<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubscription  extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'start_date',
        'duration_month',
        'is_free',
        
    ];

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
