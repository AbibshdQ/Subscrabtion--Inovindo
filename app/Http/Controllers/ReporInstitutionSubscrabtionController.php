<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporInstitutionSubscrabtionController extends Controller
{
    public function index(){
        return view('reportSelectUser.index');
    }
}
