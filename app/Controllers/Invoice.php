<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Invoice extends BaseController
{
    public function index()
    {
        return view('invoice/invoice');
    }

    public function printInvoice()
    {
        $dataInvoice = [
            'from' => $this->request->getVar('from'),
            'billto' => $this->request->getVar('billto'),
            'noinv' => $this->request->getVar('noinv'),
            'dateinv' => $this->request->getVar('dateinv'),
        ];

        $dataInvoiceDetail =
            [
                'invdetail' => $this->request->getVar('invdetail'),
                'description' => $this->request->getVar('description'),
                'flight' => $this->request->getVar('flight'),
                'booking' => $this->request->getVar('booking'),
                'qty' => $this->request->getVar('qty'),
                'price' => $this->request->getVar('price'),
                'total' => $this->request->getVar('total'),
            ];

        return view('invoice/show-invoice', $dataInvoice, $dataInvoiceDetail);
    }

    public function printToPDF()
    {
    }
}
