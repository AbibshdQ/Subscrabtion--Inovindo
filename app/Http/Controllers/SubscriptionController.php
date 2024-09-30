<?php

namespace App\Http\Controllers;
use App\Models\Subscription;
use App\Models\UserSubscription;
use App\Models\UserSubsrciption;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    
    public function index(){

        $user_subscriptions = UserSubscription::with(['user', 'institution'])->get();

        return view('subscription.index', compact('user_subscriptions'));
      }
}
