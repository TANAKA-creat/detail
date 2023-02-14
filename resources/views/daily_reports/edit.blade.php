@extends('components.layout')

@section('content')

<div class="back-link">
  <a href="{{ route('travel_expenses.index')}}">&laquo; トップページに戻る</a>
  <a href="{{ route('daily_reports.create')}}">&laquo; 会社日報（田中）の登録に移動</a>
  <a href="{{ route('daily_reports.show')}}">&laquo; 会社日報（田中）の詳細に移動</a>
</div>
<h1>会社日報 - 編集</h1>
<div class="container">
  <div class="form_group">
    <form method="POST" action="{{ route('daily_reports.update', $daily_report->id) }}">
      @csrf
    <label>
      <input type="date" name="date" class="typing_place daily_report" placeholder="date" value="{{ $daily_report->date }}">
    </label>
    <label>
      <input type="string" name="what_day" class="typing_place daily_report" placeholder="何の日" value="{{ $daily_report->what_day }}">
    </label>
    <label>
      <input type="string" name="place" class="typing_place daily_report" placeholder="滞在地" value="{{ $daily_report->place }}">
    </label>
    <label>
      <input type="string" name="morning" class="typing_place daily_report" placeholder="午前" value="{{ $daily_report->morning }}">
    </label>
    <label>
      <input type="string" name="afternoon" class="typing_place daily_report" placeholder="午後" value="{{ $daily_report->afternoon }}">
    </label>
    <label>
      <input type="string" name="overtime" class="typing_place daily_report" placeholder="残業" value="{{ $daily_report->overtime }}">
    </label>
    <label>
      <input type="string" name="situation" class="typing_place daily_report" placeholder="今日の状況" value="{{ $daily_report->situation }}">
    </label>
    <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
    </form>
  </div>
</div>

@endsection
