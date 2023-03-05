<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PdfController extends BaseController
{
    public function index()
    {
        return view('testpdf');
    }

    public function htmlToPDF()
    {
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml(view('testpdf'));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
