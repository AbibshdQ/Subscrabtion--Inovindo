<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'year', 
        'month', 
        'amount_paid', 
        'status',
        'payment_id'  
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
