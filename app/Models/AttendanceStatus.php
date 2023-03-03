<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'employee',
        'overtime_on_weekdays_total',
        'overtime_on_weekdays_15',
        'overtime_on_weekdays_times',
        'overtime_on_weekdays_auto',

        'weekend_overtime_total',
        'weekend_overtime_15',
        'weekend_overtime_times',
        'weekend_overtime_auto',

        'overtime_on_public_holidays_total',
        'overtime_on_public_holidays_15',
        'overtime_on_public_holidays_times',
        'overtime_on_public_holidays_auto',

        'business_trip',
        'other_holidays',
        'other_attendance',
        'lunch',
        'memo'
    ];


}
