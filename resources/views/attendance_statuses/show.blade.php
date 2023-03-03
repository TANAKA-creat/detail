@extends('components.layout')
@section('content')

<h2>出勤状況 -詳細-</h2>
<div class="back-link">
  <a href="{{ route('travel_expenses.index') }}">&laquo; トップページへ</a>
  <a href="{{ route('attendance_statuses.create') }}">&laquo; 出勤状況登録へ</a>
</div>

<table border="2">
  <thead>
    <tr>
      <th class="column">記入日</th>
      <th class="column">社員名</th>
      <th class="column">平日残業</th>
      <th class="column">15分</th>
      <th class="column">回数</th>
      <th class="column">合計</th>
      <th class="column">土日残業</th>
      <th class="column">15分</th>
      <th class="column">回数</th>
      <th class="column">合計</th>
      <th class="column">祝日残業</th>
      <th class="column">15分</th>
      <th class="column">回数</th>
      <th class="column">合計</th>
      <th class="column">出張日数</th>
      <th class="column">その他休み日数</th>
      <th class="column">その他出勤日数</th>
      <th class="column">食費</th>
      <th class="column">メモ</th>
      <th class="column">編集</th>
      <th class="column">削除</th>
    </tr>
  </thead>
  <tbody>
    @foreach($attendance_statuses as $attendance_status)
    <tr>
      <td class="column">{{ $attendance_status->date }}</td>
      <td class="column">{{ $attendance_status->employee }}</td>
      <td class="column">{{ $attendance_status->overtime_on_weekdays_total }}</td>
      <td class="column">{{ $attendance_status->overtime_on_weekdays_15 }}</td>
      <td class="column">{{ $attendance_status->overtime_on_weekdays_times }}</td>
      <td class="column">{{ $attendance_status->overtime_on_weekdays_total = $attendance_status->overtime_on_weekdays_15 * $attendance_status->overtime_on_weekdays_times  }}</td>

      <td class="column">{{ $attendance_status->weekend_overtime_total }}</td>
      <td class="column">{{ $attendance_status->weekend_overtime_15 }}</td>
      <td class="column">{{ $attendance_status->weekend_overtime_times }}</td>
      <td class="column">{{ $attendance_status->weekend_overtime_total = $attendance_status->weekend_overtime_15 * $attendance_status->weekend_overtime_times }}</td>

      <td class="column">{{ $attendance_status->overtime_on_public_holidays_total }}</td>
      <td class="column">{{ $attendance_status->overtime_on_public_holidays_15 }}</td>
      <td class="column">{{ $attendance_status->overtime_on_public_holidays_times }}</td>
      <td class="column">{{ $attendance_status->overtime_on_public_holidays_total = $attendance_status->overtime_on_public_holidays_15 * $attendance_status->overtime_on_public_holidays_times }}</td>

      <td class="column">{{ $attendance_status->business_trip }}</td>
      <td class="column">{{ $attendance_status->other_holidays }}</td>
      <td class="column">{{ $attendance_status->other_attendance }}</td>
      <td class="column">{{ $attendance_status->lunch }}</td>
      <td class="column">{{ $attendance_status->memo }}</td>
      <td class="column"><a href="/attendance_statuses/edit/{{ $attendance_status->id }}">編集</a></td>
      <td class="column">
        <form method="POST" action="{{ route('attendance_statuses.destroy', $attendance_status->id)}}" id="delete">
        @method('DELETE')
        @csrf
        <button>削除</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
      
