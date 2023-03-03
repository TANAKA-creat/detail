<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceStatus;

class AttendanceStatusController extends Controller
{
    public function create()
    {
        return view('attendance_statuses.create');
    }

    public function store(Request $request)
    {
        $attendance_statuses = new AttendanceStatus;
        $attendance_statuses->date = $request->date;
        $attendance_statuses->employee = $request->employee;
        $attendance_statuses->overtime_on_weekdays_total = $request->overtime_on_weekdays_total;
        $attendance_statuses->overtime_on_weekdays_15 = $request->overtime_on_weekdays_15;
        $attendance_statuses->overtime_on_weekdays_times = $request->overtime_on_weekdays_times;
        $attendance_statuses->overtime_on_weekdays_auto = $request->overtime_on_weekdays_auto;

        $attendance_statuses->weekend_overtime_total = $request->weekend_overtime_total;
        $attendance_statuses->weekend_overtime_15 = $request->weekend_overtime_15;
        $attendance_statuses->weekend_overtime_times = $request->weekend_overtime_times;
        $attendance_statuses->weekend_overtime_auto = $request->weekend_overtime_auto;

        $attendance_statuses->overtime_on_public_holidays_total = $request->overtime_on_public_holidays_total;
        $attendance_statuses->overtime_on_public_holidays_15 = $request->overtime_on_public_holidays_15;
        $attendance_statuses->overtime_on_public_holidays_times = $request->overtime_on_public_holidays_times;
        $attendance_statuses->overtime_on_public_holidays_auto = $request->overtime_on_public_holidays_auto;
        
        $attendance_statuses->business_trip = $request->business_trip;
        $attendance_statuses->other_holidays = $request->other_holidays;
        $attendance_statuses->other_attendance = $request->other_attendance;
        $attendance_statuses->lunch = $request->lunch;
        $attendance_statuses->memo = $request->memo;
        $attendance_statuses->save();

        return to_route('attendance_statuses.show', compact('attendance_statuses'));
    }

    public function show()
    {
        $attendance_statuses = AttendanceStatus::all();
        $attendance_statuses = AttendanceStatus::latest()->get();

        return view('attendance_statuses.show', compact('attendance_statuses'));
    }

    public function edit(AttendanceStatus $attendance_status)
    {
        return view('attendance_statuses.edit', compact('attendance_status'));
    }

    public function update(Request $request, AttendanceStatus $attendance_status)
    {
        $attendance_status->date = $request->date;
        $attendance_status->employee = $request->employee;
        $attendance_status->overtime_on_weekdays_total = $request->overtime_on_weekdays_total;
        $attendance_status->overtime_on_weekdays_15 = $request->overtime_on_weekdays_15;
        $attendance_status->overtime_on_weekdays_times = $request->overtime_on_weekdays_times;
        $attendance_status->overtime_on_weekdays_auto = $request->overtime_on_weekdays_auto;

        $attendance_status->weekend_overtime_total = $request->weekend_overtime_total;
        $attendance_status->weekend_overtime_15 = $request->weekend_overtime_15;
        $attendance_status->weekend_overtime_times = $request->weekend_overtime_times;
        $attendance_status->weekend_overtime_auto = $request->weekend_overtime_auto;

        $attendance_status->overtime_on_public_holidays_total = $request->overtime_on_public_holidays_total;
        $attendance_status->overtime_on_public_holidays_15 = $request->overtime_on_public_holidays_15;
        $attendance_status->overtime_on_public_holidays_times = $request->overtime_on_public_holidays_times;
        $attendance_status->overtime_on_public_holidays_auto = $request->overtime_on_public_holidays_auto;
        
        $attendance_status->business_trip = $request->business_trip;
        $attendance_status->other_holidays = $request->other_holidays;
        $attendance_status->other_attendance = $request->other_attendance;
        $attendance_status->lunch = $request->lunch;
        $attendance_status->memo = $request->memo;
        $attendance_status->update();

        return to_route('attendance_statuses.show', compact('attendance_status'));
    }

    public function destroy(AttendanceStatus $attendance_status)
    {
        $attendance_status->delete();

        return to_route('attendance_statuses.show');
    }
}
