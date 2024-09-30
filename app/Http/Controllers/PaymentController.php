<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){

        $users = User::all();
        return view('payments.create', compact('users'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|exists:users,id', 
            'amount' => 'required|numeric',
            'payment_type' => 'required|in:cash,transfer',
        ]);

     
        Payment::create([
            'pay' => $request->input('amount'),  
            'payment_type' => $request->input('payment_type'),
            'payment_status' => 'Paid',  
            'payment_date' => now(),  
        ]);

        
        return redirect()->route('payments.create')->with('success', 'Payment successfully created!');
    }
    
}

