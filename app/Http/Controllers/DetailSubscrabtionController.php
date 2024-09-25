<?php

namespace App\Http\Controllers;

use App\Models\Subscription; // Sesuaikan dengan nama model yang Anda gunakan
use Illuminate\Http\Request;

class DetailSubscrabtionController extends Controller
{
   
    public function index(){
        return view('detailSubscription.index');
    }    
}
