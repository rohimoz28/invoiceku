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
    $last_invoice_number = $this->invoiceModel->getLastInvoiceNumber();
    if ($last_invoice_number == 0) {
      $data['invoice_number'] = 1;
    } else {
      $data['invoice_number'] = $last_invoice_number + 1;
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

    $invoice = [
      'from' => $this->request->getVar('from'),
      'billto' => $this->request->getVar('billto'),
      'invoice' => $this->request->getVar('noinv'),
      'invoice_date' => date("Y-m-d", strtotime($this->request->getVar('dateinv'))),
      'total_invoice' => 0,
      'prosentase_service' => $service,
      'service' => 0,
      'tax' => 0
    ];
    // dd($invoice);
    $dataInvoiceDetail = [
      'invoice_id' => $this->request->getVar('invdetail'),
      'description' => $this->request->getVar('description'),
      'detail_date' => $this->request->getVar('detail_date'),
      'flight' => $this->request->getVar('flight'),
      'route' => $this->request->getVar('route'),
      'booking' => $this->request->getVar('booking'),
      'qty' => $this->request->getVar('qty'),
      'price' => $this->request->getVar('price'),
    ];

    $count = count($dataInvoiceDetail['invoice_id']);
    $invoice_detail = [];

    for ($i = 0; $i < $count; $i++) {
      $invoice_detail[] = [
        'invoice_id' => $dataInvoiceDetail['invoice_id'][$i],
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
    $details = $this->invoiceDetailModel->getInvoiceDetail($invoice_id);
    $total = $invoices['total_invoice'] + $invoices['service'] + $invoices['tax'];
    // dd($details);
    $data = [
      'invoice' => $invoices,
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
    $details = $this->invoiceDetailModel->getInvoiceDetail($invoice_id);
    $total = $invoices['total_invoice'] + $invoices['service'] + $invoices['tax'];

    $data = [
      'id' => $invoice_id,
      'invoice' => $invoices,
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
