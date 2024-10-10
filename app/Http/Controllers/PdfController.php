<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function cetakPDF()
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
        return $pdf->stream('User Report Payment.pdf');
    }
}
