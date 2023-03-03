@extends('components.layout')
@section('content')

<h2>出勤状況 -登録-</h2>
<div class="back-link">
  <a href="{{ route('travel_expenses.index') }}">&laquo; トップページへ</a>
  <a href="{{ route('attendance_statuses.show') }}">&laquo; 出勤状況詳細へ</a>
</div>

<p>平日残業時間は8時間労働以降、15分単位で計算することとする</p>
<p>土日と祝日残業は15分単位で計算することとする</p>
<p>その他休み日数は兼職者に対して適用する</p>
<p>その他出勤日数は在宅勤務者に対して適用する</p>

<div class="form-group">
  <form method="POST" action="{{ route('attendance_statuses.store') }}">
    @csrf
    <label>
      <input type="date" name="date" placeholder="月初めの日付を記入する" value="{{old('date')}}">
    </label>
    <label>
      <input type="string" name="employee" placeholder="社員名" value="{{old('employee')}}">
    </label>
    <label>
      <input type="integer" name="overtime_on_weekdays_total" placeholder="平日残業" value="{{old('overtime_on_weekdays_total')}}">
    </label>
    <label>
      <input type="integer" name="overtime_on_weekdays_15" placeholder="平日残業 15分単位" value="{{old('overtime_on_weekdays_15')}}">
    </label>
    <label>
      <input type="integer" name="overtime_on_weekdays_times" placeholder="平日残業 回数を記入する" value="{{old('overtime_on_weekdays_times')}}">
    </label>
    <label>
      <input type="hidden" name="overtime_on_weekdays_auto" placeholder="平日残業 自動計算される" value="{{old('overtime_on_weekdays_auto')}}">
    </label>

    <label>
      <input type="integer" name="weekend_overtime_total" placeholder="土日残業" value="{{old('weekend_overtime_total')}}">
    </label>
    <label>
      <input type="integer" name="weekend_overtime_15" placeholder="土日残業 15分単位" value="{{old('weekend_overtime_15')}}">
    </label>
    <label>
      <input type="integer" name="weekend_overtime_times" placeholder="土日残業 回数を記入する" value="{{old('weekend_overtime_times')}}">
    </label>
    <label>
      <input type="hidden" name="weekend_overtime_auto" placeholder="土日残業 自動計算される" value="{{old('weekend_overtime_auto')}}">
    </label>

    <label>
      <input type="integer" name="overtime_on_public_holidays_total" placeholder="祝日残業" value="{{old('overtime_on_public_holidays_total')}}">
    </label>
    <label>
      <input type="integer" name="overtime_on_public_holidays_15" placeholder="祝日残業 15分単位" value="{{old('overtime_on_public_holidays_15')}}">
    </label>
    <label>
      <input type="integer" name="overtime_on_public_holidays_times" placeholder="祝日残業 回数を記入する" value="{{old('overtime_on_public_holidays_times')}}">
    </label>
    <label>
      <input type="hidden" name="overtime_on_public_holidays_auto" placeholder="祝日残業 自動計算される" value="{{old('overtime_on_public_holidays_auto')}}">
    </label>

    <label>
      <input type="integer" name="business_trip" placeholder="出張日数を記入する" value="{{old('business_trip')}}">
    </label>
    <label>
      <input type="integer" name="other_holidays" placeholder="その他休み日数を記入する" value="{{old('other_holidays')}}">
    </label>
    <label>
      <input type="integer" name="other_attendance" placeholder="その他出勤日数を記入する" value="{{old('other_attendance')}}">
    </label>
    <label>
      <input type="integer" name="lunch" placeholder="食費申請日数を記入する" value="{{old('lunch')}}">
    </label>
    <label>
      <input type="string" name="memo" placeholder="メモを残す" value="{{old('memo')}}">
    </label>
    <button type="submit" class="btn btn-primary btn-sm shadow">登録</button>
  </form>
</div>
@endsection


