<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Invoice\Invoice as InvoiceInvoice;
use App\Models\Invoice\InvoiceDetail;

class Invoice extends BaseController
{
  protected InvoiceInvoice $invoiceModel;
  protected InvoiceDetail $invoiceDetailModel;

  public function __construct()
  {
    $this->invoiceModel = new InvoiceInvoice();
    $this->invoiceDetailModel = new InvoiceDetail();
    helper(['form', 'url', 'custom']);
  }

  public function index()
  {
    $num =  $this->invoiceModel->getLastInvoiceNumber();
    $num++; // increment $num by 1
    $num_str = sprintf("%03d", $num); // format $num with leading zeroes

    $prefix = "IV";
    // $placeholder = "001";
    $suffix = "BMN";
    $year = date("Y");

    $last_invoice_number = $prefix . "." . $num_str . "/" . $suffix . "/" . $year;

    if ($last_invoice_number == 0) {
      $data['invoice_number'] = 1;
    } else {
      $data['invoice_number'] = $last_invoice_number++;
    }
    return view('invoice/invoice', $data);
  }

  public function save()
  {
    $session = \Config\Services::session();

    // VALIDATION
    $val = $this->validate([
      'billto' => [
        'label' => 'Penerima',
        'rules' => 'required',
        'errors' => [
          'required' => 'Kolom penerima wajib di isi!',
        ]
      ],
      'qty.*' => [
        'label' => 'Kuantitas',
        'rules' => 'integer',
        'errors' => [
          'integer' => 'Di isi angka!',
        ]
      ],
      'price.*' => [
        'label' => 'Penerima',
        'rules' => 'integer',
        'errors' => [
          'integer' => 'Di isi angka!',
        ]
      ],
    ]);

    if (!$val) {
      $data = [
        'invoice_number' => $this->request->getVar('noinv'),
        'validation' => $this->validator
      ];
      return view('invoice/invoice', $data);
    }
    // END VALIDATION

    $service = $this->request->getVar('service');
    $tax = $this->request->getVar('tax');
    // dd($service);
    $string_invoices_number = $this->request->getVar('noinv');
    $parts = explode('.', $string_invoices_number); // split the string into an array using '.' as the delimiter
    $invoices_number = explode('/', $parts[1])[0]; // get the '001' substring from the second element of the array
    // dd($invoices_number);
    $invoice = [
      'from' => $this->request->getVar('from'),
      'billto' => $this->request->getVar('billto'),
      'invoice_number' => $invoices_number,
      'invoice_date' => date("Y-m-d", strtotime($this->request->getVar('dateinv'))),
      'total_invoice' => 0,
      'prosentase_service' => $service,
      'service' => 0,
      'tax' => 0
    ];

    // $string_invoice_details_number = $this->request->getVar('noinv');
    // $parts = explode('.', $string_invoice_details_number); // split the string into an array using '.' as the delimiter
    // $invoices_number = explode('/', $parts[1])[0]; // get the '001' substring from the second element of the array
    // dd($string_invoice_details_number);

    $dataInvoiceDetail = [
      'invoice_number' => $invoices_number,
      'description' => $this->request->getVar('description'),
      'detail_date' => $this->request->getVar('detail_date'),
      'flight' => $this->request->getVar('flight'),
      'route' => $this->request->getVar('route'),
      'booking' => $this->request->getVar('booking'),
      'qty' => $this->request->getVar('qty'),
      'price' => $this->request->getVar('price'),
    ];
    // dd($dataInvoiceDetail);
    // rubah format array invoice_detail menjadi format array untuk insertBatch
    $count = count($dataInvoiceDetail['description']);
    $invoice_detail = [];

    for ($i = 0; $i < $count; $i++) {
      $invoice_detail[] = [
        'invoice_number' => $invoices_number,
        'description' => $dataInvoiceDetail['description'][$i],
        'detail_date' => date("Y-m-d", strtotime($dataInvoiceDetail['detail_date'][$i])),
        'flight' => $dataInvoiceDetail['flight'][$i],
        'route' => $dataInvoiceDetail['route'][$i],
        'booking' => $dataInvoiceDetail['booking'][$i],
        'qty' => $dataInvoiceDetail['qty'][$i],
        'price' => $dataInvoiceDetail['price'][$i],
        'total_details' => $dataInvoiceDetail['qty'][$i] * $dataInvoiceDetail['price'][$i],
      ];
    }

    $total_details = [];
    foreach ($invoice_detail as $detail) {
      $total_details[] = $detail['total_details'];
    }

    $invoice['total_invoice'] = $total_invoice = array_sum($total_details);
    $invoice['service'] = $total_service = ($total_invoice * $service) / 100;
    $invoice['tax'] = ($total_service * $tax) / 100;
    // dd($invoice['tax']);

    // dd($invoice);
    // dd($invoice_detail);
    $is_save = $this->invoiceModel->saveInvoice($invoice, $invoice_detail);

    if ($is_save == false) {
      return redirect()->back()->with('error', 'Error while inserting invoice!');
    } else {
      $session->setFlashdata('success', 'Success insert new invoice!');
      return redirect()->to('invoice/all-invoice');
    }
  }

  public function allInvoice()
  {
    $data['invoices'] = $this->invoiceModel->getInvoices();

    return view('invoice/all-invoice', $data);
  }

  public function detailInvoice($invoice_id)
  {
    $invoices = $this->invoiceModel->getInvoices($invoice_id);
    $details = $this->invoiceDetailModel->getInvoiceDetail($invoices['invoice_number']);

    $num = $invoices['invoice_number'];
    // $num++; // increment $num by 1
    $num_str = sprintf("%03d", $num); // format $num with leading zeroes

    $prefix = "IV";
    // $placeholder = "001";
    $suffix = "BMN";
    $year = date("Y");

    $invoice_number = $prefix . "." . $num_str . "/" . $suffix . "/" . $year;

    $total = $invoices['total_invoice'] + $invoices['service'] + $invoices['tax'];
    // dd($details);
    $data = [
      'invoice' => $invoices,
      'invoice_number' => $invoice_number,
      'details' => $details,
      'service' => $invoices['service'],
      'ppn' => $invoices['tax'],
      'total' => $total
    ];

    return view('invoice/show-invoice', $data);
  }

  public function deleteInvoice($invoice_no)
  {
    $session = \Config\Services::session();

    $is_deleted = $this->invoiceModel->deleteInvoice($invoice_no);
    if ($is_deleted == false) {
      return redirect()->back()->with('error', 'Error while deleting invoice!');
    } else {
      $session->setFlashdata('success', 'Success delete invoice!');
      return redirect()->to('invoice/all-invoice');
    }
  }

  public function editStatusInvoice($invoice_id)
  {
    $data['invoice'] = $this->invoiceModel->getInvoices($invoice_id);
    return view('invoice/edit-invoice', $data);
  }

  public function updateStatusInvoice()
  {
    $session = \Config\Services::session();

    $id = $this->request->getVar('noinv');

    $data = [
      'status' => $this->request->getVar('status'),
      'payment' => $this->request->getVar('payment'),
      'note' => $this->request->getVar('note')
    ];
    // dd($note);
    $is_updated = $this->invoiceModel->updateInvoice($id, $data);

    if (!$is_updated) {
      return redirect()->back()->with('error', 'Error while updating invoice!');
    } else {
      $session->setFlashdata('success', 'Success update invoice!');
      return redirect()->to('invoice/all-invoice');
    }
  }

  public function printInvoice($invoice_id)
  {
    $invoices = $this->invoiceModel->getInvoices($invoice_id);
    $details = $this->invoiceDetailModel->getInvoiceDetail($invoices['invoice_number']);

    $total = $invoices['total_invoice'] + $invoices['service'] + $invoices['tax'];
    $num = $invoices['invoice_number'];
    // $num++; // increment $num by 1
    $num_str = sprintf("%03d", $num); // format $num with leading zeroes

    $prefix = "IV";
    // $placeholder = "001";
    $suffix = "BMN";
    $year = date("Y");

    $invoice_number = $prefix . "." . $num_str . "/" . $suffix . "/" . $year;

    $data = [
      'id' => $invoice_id,
      'invoice' => $invoices,
      'invoice_number' => $invoice_number,
      'details' => $details,
      'service' => $invoices['service'],
      'ppn' => $invoices['tax'],
      'total' => $total
    ];

    $dompdf = new \Dompdf\Dompdf();

    $dompdf->loadHtml(view('invoice/print-invoice', $data));
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream();
  }
}
