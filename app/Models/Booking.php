<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // ✅ Add this

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_name',
        'booking_date',
        'notes',
    ];
}
