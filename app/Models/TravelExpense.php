<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelExpense extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'destination',
        'from',
        'until',
        'total',
        'from_ticket_fee',
        'to_ticket_fee',
        'allowance',
        'cost_per_day',
        'transportation_cost',
        'miscellaneous_expense',
        'other',
        'memo'
    ];

    public static function getTravelExpense($customer_name, $from, $until)
    {
        $travel_expense = TravelExpense::where('customer_name',$customer_name)->whereBetween('from',[$from, $until])->get();

        return $travel_expense;
    }

    public static function getTravelExpense2($from, $until)
    {
        $travel_expense = TravelExpense::whereBetween('from',[$from, $until])->get();

        return $travel_expense;
    }



}
