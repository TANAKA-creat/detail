<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'what_day',
        'place',
        'morning',
        'afternoon',
        'overtime',
        'situation',
    ];
}
