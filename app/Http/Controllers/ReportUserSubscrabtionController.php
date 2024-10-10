<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class ReportUserSubscrabtionController extends Controller
{
    public function index()
    {
        return view('reportUser.index');
        
    }

    // public function view_pdf()
    // {
    //     $mpdf = new \mPDF();

    //     // Write some HTML code:
    //     $mpdf->WriteHTML('Hello World');

    //     // Output a PDF file directly to the browser
    //     $mpdf->Output();
    // }
}
