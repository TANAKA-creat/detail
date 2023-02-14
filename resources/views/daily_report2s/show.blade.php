@extends('components.layout')

@section('content')

<div class="back-link">
  <a href="{{ route('travel_expenses.index') }}">&laquo; トップページに戻る</a>
  <a href="{{ route('daily_reports.create') }}">&laquo; 会社日報（社員）の登録に移動</a>
</div>

<div class="container">
<table border="2" style="solid 1px black">
  <thead>
    <tr>
      <th class="column">日付</th>
      <th class="column">何の日</th>
      <th class="column">吴玉霞</th>
      <th class="column">臧力群</th>
      <th class="column">徐倩</th>
      <th class="column">孙翔</th>
      <th class="column">曲文佳</th>
      <th class="column">王晓娜</th>
      <th class="column">王玉娇</th>
      <th class="column">法務部</th>
      <th class="column">-</th>
      <th class="column">編集</th>
      <th class="column">削除</th>
    </tr>
  </thead>
  <tbody>
    @foreach($daily_report2s as $daily_report2)
    <tr>
      <td class="column">{{ $daily_report2->date }}</td>
      <td class="column">{{ $daily_report2->what_day }}</td>
      <td class="column">{{ $daily_report2->employee_1 }}</td>
      <td class="column">{{ $daily_report2->employee_2 }}</td>
      <td class="column">{{ $daily_report2->employee_3 }}</td>
      <td class="column">{{ $daily_report2->employee_4 }}</td>
      <td class="column">{{ $daily_report2->employee_5 }}</td>
      <td class="column">{{ $daily_report2->employee_6 }}</td>
      <td class="column">{{ $daily_report2->employee_7 }}</td>
      <td class="column">{{ $daily_report2->employee_8 }}</td>
      <td class="column">{{ $daily_report2->employee_9 }}</td>
      <td class="column"><a href="/daily_report2s/edit/{{ $daily_report2->id}}">編集</a></td>
      <td>
        <form method="POST" action="{{ route('daily_report2s.destroy', $daily_report2->id) }}" id="delete">
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





