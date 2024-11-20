<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallbackRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'source',
        'phone_number',
        'scheduled_time',
        'call_made',
        'call_date',
        'call_result',
        'comment',
    ];
}