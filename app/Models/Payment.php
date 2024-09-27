<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'pay',
        'payment_type',
        'payment_status',
        'payment_date'  
    ];

    public function userSubStatuses()
    {
        return $this->hasMany(UserSubStatus::class);
    }
}
