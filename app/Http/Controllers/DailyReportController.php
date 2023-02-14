<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyReport;

class DailyReportController extends Controller
{
    /**
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
        return view('daily_reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $daily_reports = new DailyReport();
        $daily_reports->date = $request->date;
        $daily_reports->what_day = $request->what_day;
        $daily_reports->place = $request->place;
        $daily_reports->morning = $request->morning;
        $daily_reports->afternoon = $request->afternoon;
        $daily_reports->overtime = $request->overtime;
        $daily_reports->situation = $request->situation;
        $daily_reports->save();

        return redirect()
        ->route('daily_reports.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $daily_reports = DailyReport::all();

        return view('daily_reports.show',compact('daily_reports'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DailyReport $daily_report)
    {
        return view('daily_reports.edit', compact('daily_report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DailyReport $daily_report)
    {
        $daily_report->date = $request->date;
        $daily_report->what_day = $request->what_day;
        $daily_report->place = $request->place;
        $daily_report->morning = $request->morning;
        $daily_report->afternoon = $request->afternoon;
        $daily_report->overtime = $request->overtime;
        $daily_report->situation = $request->situation;
        $daily_report->update();

        return redirect()
        ->route('daily_reports.show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DailyReport $daily_report)
    {   
        $daily_report->delete();

        return to_route('daily_reports.show');
        
    }
}
