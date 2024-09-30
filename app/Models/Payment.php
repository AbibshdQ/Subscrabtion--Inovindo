<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pay',
        'payment_type',
        'payment_status',
        'payment_date'  
    ];

    public function user()
    {
        return $this->belongsTo(User::class);  
    }
    
    public function userSubStatuses()
    {
        return $this->hasMany(UserSubStatus::class);
    }

}
