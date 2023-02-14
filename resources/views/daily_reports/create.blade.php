@extends('components.layout')

@section('content')

<div class="back-link">
  <a href="{{ route('travel_expenses.index')}}">&laquo; トップページに戻る</a>
  <a href="{{ route('daily_reports.show')}}">&laquo; 会社日報（田中）の詳細に移動</a>
</div>
<h1>会社日報 - 登録</h1>
<div class="container">
  <div class="form_group">
    <form method="POST" action="{{ route('daily_reports.store')}}">
      @csrf
    <label>
      <input type="date" name="date" class="typing_place " placeholder="date" value="{{old('date')}}">
    </label>
    <label>
      <input type="string" name="what_day" class="typing_place daily_report" placeholder="何の日" value="{{old('what_day')}}">
    </label>
    <label>
      <input type="string" name="place" class="typing_place daily_report" placeholder="滞在地" value="{{old('place')}}">
    </label>
    <label>
      <input type="string" name="morning" class="typing_place daily_report" placeholder="午前" value="{{old('morning')}}">
    </label>
    <label>
      <input type="string" name="afternoon" class="typing_place daily_report" placeholder="午後" value="{{old('afternoon')}}">
    </label>
    <label>
      <input type="string" name="overtime" class="typing_place daily_report" placeholder="残業" value="{{old('overtime')}}">
    </label>
    <label>
      <input type="string" name="situation" class="typing_place daily_report" placeholder="今日の状況" value="{{old('situation')}}">
    </label>
    <button type="submit" class="btn btn-warning btn-sm shadow-lg">登録</button>
    </form>
  </div>
</div>

@endsection

