@extends('components.layout')

@section('content')

<div class="back-link">
  <a href="{{ route('travel_expenses.index')}}">&laquo; トップページに戻る</a>
  <a href="{{ route('daily_reports.create')}}">&laquo; 会社日報（田中）の登録に移動</a>
</div>
<h1>会社日報 - 詳細</h1>

<div class="container">
<table border="2" style="solid 1px brack";>
  <thead>
    <tr>
      <th class="column">日付</th>
      <th class="column">何の日</th>
      <th class="column">滞在地</th>
      <th class="column">午前</th>
      <th class="column">午後</th>
      <th class="column">残業</th>
      <th class="column">状況</th>
      <th class="column">編集</th>
      <th class="column">削除</th>
    </tr>
  </thead>
  <tbody>
    @foreach($daily_reports as $daily_report)
    <tr>
      <td class="column">{{ $daily_report->date }}</td>
      <td class="column">{{ $daily_report->what_day }}</td>
      <td class="column">{{ $daily_report->place }}</td>
      <td class="column column1">{{ $daily_report->morning }}</td>
      <td class="column column1">{{ $daily_report->afternoon }}</td>
      <td class="column column1">{{ $daily_report->overtime }}</td>
      <td class="column column1">{{ $daily_report->situation }}</td>
      <td class="column"><a href="/daily_reports/edit/{{ $daily_report->id }}">編集</a></td>
      <td class="column">
        <form method="POST" action="{{ route('daily_reports.destroy', $daily_report->id) }}" id="delete">
          @method('DELETE')
          @csrf
          <button>削除</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection

      
