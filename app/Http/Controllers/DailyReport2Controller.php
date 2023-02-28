<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyReport2;

class DailyReport2Controller extends Controller
{   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daily_report2s.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $daily_report2s = new DailyReport2();
        $daily_report2s->date = $request->date;
        $daily_report2s->what_day = $request->what_day;
        $daily_report2s->employee_1 = $request->employee_1;
        $daily_report2s->employee_2 = $request->employee_2;
        $daily_report2s->employee_3 = $request->employee_3;
        $daily_report2s->employee_4 = $request->employee_4;
        $daily_report2s->employee_5 = $request->employee_5;
        $daily_report2s->employee_6 = $request->employee_6;
        $daily_report2s->employee_7 = $request->employee_7;
        $daily_report2s->employee_8 = $request->employee_8;
        $daily_report2s->employee_9 = $request->employee_9;
        $daily_report2s->save();

        return redirect()
        ->route('daily_report2s.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $daily_report2s = DailyReport2::all();
        $daily_report2s = DailyReport2::latest('date')->get();

        return view('daily_report2s.show',compact('daily_report2s'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DailyReport2 $daily_report2)
    {
        return view('daily_report2s.edit', compact('daily_report2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DailyReport2 $daily_report2)
    {
        $daily_report2->date = $request->date;
        $daily_report2->what_day = $request->what_day;
        $daily_report2->employee_1 = $request->employee_1;
        $daily_report2->employee_2 = $request->employee_2;
        $daily_report2->employee_3 = $request->employee_3;
        $daily_report2->employee_4 = $request->employee_4;
        $daily_report2->employee_5 = $request->employee_5;
        $daily_report2->employee_6 = $request->employee_6;
        $daily_report2->employee_7 = $request->employee_7;
        $daily_report2->employee_8 = $request->employee_8;
        $daily_report2->employee_9 = $request->employee_9;
        $daily_report2->update();

        return redirect()
        ->route('daily_report2s.show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DailyReport2 $daily_report2)
    {   
        $daily_report2->delete();

        return to_route('daily_report2s.show');
        
    }
}

