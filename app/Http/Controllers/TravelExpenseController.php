<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelExpense;

class TravelExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('travel_expenses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $travel_expenses = new TravelExpense();
        $travel_expenses->customer_name = $request->customer_name;
        $travel_expenses->destination = $request->destination;
        $travel_expenses->from = $request->from;
        $travel_expenses->until = $request->until;
        // $travel_expenses->total = $request->total;
        $travel_expenses->total = $request->from_ticket_fee + $request->to_ticket_fee + $request->allowance + $request->cost_per_day + $request->transportation_cost + $request->miscellaneous_expense + $request->other;
        // $travel_expenses->total = $request->total->sum(($request->from_ticket_fee) + ($request->to_ticket_fee) + ($request->allowance) + ($request->cost_per_day) + ($request->transportation_cost) + ($request->miscellaneous_expense )+ ($request->other));

        $travel_expenses->from_ticket_fee = $request->from_ticket_fee;
        $travel_expenses->to_ticket_fee = $request->to_ticket_fee;
        $travel_expenses->allowance = $request->allowance;
        $travel_expenses->cost_per_day = $request->cost_per_day;
        $travel_expenses->transportation_cost = $request->transportation_cost;
        $travel_expenses->miscellaneous_expense = $request->miscellaneous_expense;
        $travel_expenses->other = $request->other;
        $travel_expenses->memo = $request->memo;
        $travel_expenses->save();

        return redirect()
        ->route('travel_expenses.show');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $travel_expenses = TravelExpense::all();
        $travel_expenses = TravelExpense::latest('from')->get();

        return view('travel_expenses.show', compact('travel_expenses'));
        
    }

    public function show2()
    {
        $travel_expenses = TravelExpense::all();

        return view('travel_expenses.show2', compact('travel_expenses'));
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TravelExpense $travel_expense)
    {
        return view('travel_expenses.edit', compact('travel_expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TravelExpense $travel_expense)
    {
        $travel_expense->customer_name = $request->customer_name;
        $travel_expense->destination = $request->destination;
        $travel_expense->from = $request->from;
        $travel_expense->until = $request->until;
        $travel_expense->total = $request->total;
        $travel_expense->from_ticket_fee = $request->from_ticket_fee;
        $travel_expense->to_ticket_fee = $request->to_ticket_fee;
        $travel_expense->allowance = $request->allowance;
        $travel_expense->cost_per_day = $request->cost_per_day;
        $travel_expense->transportation_cost = $request->transportation_cost;
        $travel_expense->miscellaneous_expense = $request->miscellaneous_expense;
        $travel_expense->other = $request->other;
        $travel_expense->memo = $request->memo;
        $travel_expense->update();

        return redirect()
        ->route('travel_expenses.show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TravelExpense $travel_expense)
    {
        $travel_expense->delete();

        return to_route('travel_expenses.show');
    }

    public function search_customer_name(Request $request)
    {
        if(!empty($request['customer_name']) && !empty($request['from']) && !empty($request['until'])) {
            $travel_expenses = TravelExpense::getTravelExpense($request['customer_name'], $request['from'], $request['until']);
        } else {
            $travel_expenses = TravelExpense::get();
        }

        return view('travel_expenses.show')
        ->with(['travel_expenses' => $travel_expenses]);
    }

    public function search_customer_name2(Request $request)
    {
        if(!empty($request['from']) && !empty($request['until'])) {
            $travel_expenses = TravelExpense::getTravelExpense2($request['from'], $request['until']);
        } else {
            $travel_expenses = TravelExpense::get();
        }

        return view('travel_expenses.show2')
        ->with(['travel_expenses' => $travel_expenses]);
    }

}
