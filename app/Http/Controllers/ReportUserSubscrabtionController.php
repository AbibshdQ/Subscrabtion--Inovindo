<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportUserSubscrabtionController extends Controller
{
    public function index(){
        return view('reportUser.index');
    }
}
