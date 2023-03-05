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
    }

    public function index()
    {
        $last_invoice_number = $this->invoiceModel->getLastInvoiceNumber();
        // dd($last_invoice_number);
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

        $invoice = [
            'from' => $this->request->getVar('from'),
            'billto' => $this->request->getVar('billto'),
            'invoice' => $this->request->getVar('noinv'),
            'invoice_date' => date("Y-m-d", strtotime($this->request->getVar('dateinv'))),
            'total_invoice' => 0,
        ];
        // dd($invoice);
        $dataInvoiceDetail = [
            'invoice_id' => $this->request->getVar('invdetail'),
            'description' => $this->request->getVar('description'),
            'detail_date' => $this->request->getVar('detail_date'),
            'flight' => $this->request->getVar('flight'),
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

        $invoice['total_invoice'] = array_sum($total_details);

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
        $service = ($invoices['total_invoice'] * 5) / 100;
        $ppn = ($invoices['total_invoice'] * 11) / 100;
        $total = $invoices['total_invoice'] + $service + $ppn;

        $data = [
            'invoice' => $invoices,
            'details' => $details,
            'service' => $service,
            'ppn' => $ppn,
            'total' => $total
        ];

        return view('invoice/show-invoice', $data);
    }

    public function deleteInvoice($invoice_id)
    {
        return $invoice_id;
    }

    public function htmlToPDF()
    {
        $dompdf = new \Dompdf\Dompdf();

        $dompdf->loadHtml(view('invoice/print-invoice'));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
