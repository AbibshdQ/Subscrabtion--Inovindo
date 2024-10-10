<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function usercetakPDF()
    {
        $data = [
            'name' => 'Habib Maulana Shidiq',
            'nis' => '123456789',
            'institution' => 'Politeknik Negeri Padang',
            'period' => '2023',
            'start_internship' => 'Januari',
            'end_internship' => 'Desember',
        ];

        $pdf = PDF::loadView('report.user_payment', $data);
        return $pdf->stream('user_payment_report.pdf');
    }

    public function selectusercetakPDF()
    {
        $data = [
            'name' => 'Raisya Wulannari',
            'nis' => '123456789',
            'institution' => 'Politeknik Negeri Padang',
            'period' => '2023',
            'start_internship' => 'Januari',
            'end_internship' => 'Desember',
        ];

        // Gantilah 'report.user_payment' dengan 'report.selectuser_payment'
        $pdf = PDF::loadView('report.selectuser_payment', $data);
        return $pdf->stream('select_user_payment_report.pdf');
    }
}
