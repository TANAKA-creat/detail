@extends('components.layout')

@section('content')
<div class="back-link">
<a href="{{ route('travel_expenses.index') }}">&laquo; トップページに戻る</a>
<a href="{{ route('daily_report2s.show') }}">&laquo; 会社日報（社員）の詳細に移動</a>
</div>

<h1>会社日報（社員）- 編集</h1>
<div class="form-group">
  <form method="POST" action="{{ route('daily_report2s.update', $daily_report2->id)}}">
    @csrf
    <label>
      <input type="date" name="date" class="typing_place" placeholder="date" value="{{$daily_report2->date}}">
    </label>
    <label>
      <input type="string" name="what_day" class="typing_place daily_report" placeholder="何の日" value="{{$daily_report2->what_day}}">
    </label>

    <label>
      <input type="string" name="employee_1" class="typing_place daily_report" placeholder="吴玉霞" value="{{$daily_report2->employee_1}}">
    </label>
    <label>
      <input type="string" name="employee_2" class="typing_place daily_report" placeholder="臧力群" value="{{$daily_report2->employee_2}}"> value="{{old('employee_2')}}">
    </label>
    <label>
      <input type="string" name="employee_3" class="typing_place daily_report" placeholder="徐倩" value="{{$daily_report2->employee_3}}"> value="{{old('employee_3')}}">
    </label>
    <label>
      <input type="string" name="employee_4" class="typing_place daily_report" placeholder="孙翔" value="{{$daily_report2->employee_4}}"> value="{{old('employee_4')}}">
    </label>
    <label>
      <input type="string" name="employee_5" class="typing_place daily_report" placeholder="曲文佳" value="{{$daily_report2->employee_5}}"> value="{{old('employee_5')}}">
    </label>
    <label>
      <input type="string" name="employee_6" class="typing_place daily_report" placeholder="王晓娜" value="{{$daily_report2->employee_6}}"> value="{{old('employee_6')}}">
    </label>
    <label>
      <input type="string" name="employee_7" class="typing_place daily_report" placeholder="王玉娇" value="{{$daily_report2->employee_7}}"> value="{{old('employee_7')}}">
    </label>
    <label>
      <input type="string" name="employee_8" class="typing_place daily_report" placeholder="法務部" value="{{$daily_report2->employee_8}}"> value="{{old('employee_8')}}">
    </label>
    <label>
      <input type="string" name="employee_9" class="typing_place daily_report" placeholder="-" value="{{$daily_report2->employee_9}}"> value="{{old('employee_9')}}">
    </label>
    <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
  </form>
</div>
 @endsection
    