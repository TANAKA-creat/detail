<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyReport2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'what_day',
        'employee_1',
        'employee_2',
        'employee_3',
        'employee_4',
        'employee_5',
        'employee_6',
        'employee_7',
        'employee_8',
        'employee_9'
    ];
}
