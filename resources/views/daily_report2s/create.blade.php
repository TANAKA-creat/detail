@extends('components.layout')

@section('content')
<div class="back-link">
<a href="{{ route('travel_expenses.index') }}">&laquo; トップページに戻る</a>
<a href="{{ route('daily_report2s.show') }}">&laquo; 会社日報（社員）の詳細に移動</a>
</div>

<h1>会社日報（社員）- 登録</h1>
<div class="form-group">
  <form method="POST" action="{{ route('daily_report2s.store' )}}">
    @csrf
    <label>
      <input type="date" name="date" class="typing_place" placeholder="date" value="{{old('date')}}">
    </label>
    <label>
      <input type="string" name="what_day" class="typing_place daily_report" placeholder="何の日" value="{{old('what_day')}}">
    </label>

    <label>
      <input type="string" name="employee_1" class="typing_place daily_report" placeholder="吴玉霞" value="{{old('employee_1')}}">
    </label>
    <label>
      <input type="string" name="employee_2" class="typing_place daily_report" placeholder="臧力群" value="{{old('employee_2')}}">
    </label>
    <label>
      <input type="string" name="employee_3" class="typing_place daily_report" placeholder="徐倩" value="{{old('employee_3')}}">
    </label>
    <label>
      <input type="string" name="employee_4" class="typing_place daily_report" placeholder="孙翔" value="{{old('employee_4')}}">
    </label>
    <label>
      <input type="string" name="employee_5" class="typing_place daily_report" placeholder="曲文佳" value="{{old('employee_5')}}">
    </label>
    <label>
      <input type="string" name="employee_6" class="typing_place daily_report" placeholder="王晓娜" value="{{old('employee_6')}}">
    </label>
    <label>
      <input type="string" name="employee_7" class="typing_place daily_report" placeholder="王玉娇" value="{{old('employee_7')}}">
    </label>
    <label>
      <input type="string" name="employee_8" class="typing_place daily_report" placeholder="法務部" value="{{old('employee_8')}}">
    </label>
    <label>
      <input type="string" name="employee_9" class="typing_place daily_report" placeholder="-" value="{{old('employee_9')}}">
    </label>
    <button type="submit" class="btn btn-warning btn-sm shadow-lg">登録</button>
  </form>
</div>
 @endsection
    