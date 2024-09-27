<?php

namespace App\Http\Controllers;

use App\Models\Subscription; // Sesuaikan dengan nama model yang Anda gunakan
use App\Models\UserSubStatus;
use Illuminate\Http\Request;

class DetailSubscrabtionController extends Controller
{
   
    public function index()
    {
        $detailSubscriptions = UserSubStatus::with('payment')->get();

        return view('detailSubscription.index', compact('detailSubscriptions'));
    }
}
