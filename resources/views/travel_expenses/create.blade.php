@extends('components.layout')

@section('content')
<div class="back-link">
  <a href="{{route('travel_expenses.index') }}">&laquo トップページに戻る</a>
  <a href="{{route('travel_expenses.show') }}">&laquo 出張費用明細の詳細と検索（該当者名と出発日）に移動</a>
  <a href="{{route('travel_expenses.show2') }}">&laquo 出張費用明細の詳細と検索（出発日）に移動</a>
</div>
<h1>出張費用明細 -登録-</h1>
<div class="form-group">
  <form method="post" action="{{ route('travel_expenses.store') }}">
    @csrf
    <label>
    <span class="label">該当者:</span>
      <input type="string" name="customer_name" class="typing_place" placeholder="該当者名" value="{{ old('customer_name')}}">
    </label>
    <label>
      <span class="label">目的地:</span>
      <input type="string" name="destination" class="typing_place" placeholder="目的地" value="{{ old('destination')}}">
    </label>
    <label>
      <span class="label">出発日:</span>
      <input type="date" name="from" class="typing_place" placeholder="出発日" value="{{ old('from')}}">
    </label>
    <label>
      <span class="label">終了日:</span>
      <input type="date" name="until" class="typing_place" placeholder="終了日" value="{{ old('until')}}">
    </label>
    {{-- <label>
      <input type="integer" name="total" class="typing_place" placeholder="合計金額" value="{{ old('total')}}">
    </label> --}}
    <label>
      <span class="label">チケット行き:</span>
      <input type="integer" name="from_ticket_fee" class="typing_place" placeholder="チケット行き" value="{{ old('from_ticket_fee')}}">
    </label>
    <label>
      <span class="label">チケット帰り:</span>
      <input type="integer" name="to_ticket_fee" class="typing_place" placeholder="チケット帰り" value="{{ old('to_ticket_fee')}}">
    </label>
    <label>
      <span class="label">チケット帰り:</span>
      <input type="integer" name="to_ticket_fee" class="typing_place" placeholder="チケット帰り" value="{{ old('to_ticket_fee')}}">
    </label>
    <label>
      {{-- <span class="label">合計:</span> --}}
      <input type="hidden" name="total" class="typing_place">
    </label>
    <label>
      <span class="label">出張手当:</span>
      <input type="integer" name="allowance" class="typing_place" placeholder="出張手当" value="{{ old('allowance')}}">
    </label>
    <label>
      <span class="label">出張費:</span>
      <input type="integer" name="cost_per_day" class="typing_place" placeholder="出張費" value="{{ old('cost_per_day')}}">
    </label>
    <label>
      <span class="label">交通費:</span>
      <input type="integer" name="transportation_cost" class="typing_place" placeholder="交通費" value="{{ old('transportation_cost')}}">
    </label>
    <label>
      <span class="label">雑費:</span>
      <input type="integer" name="miscellaneous_expense" class="typing_place" placeholder="雑費" value="{{ old('miscellaneous_expense')}}">
    </label>
    <label>
      <span class="label">その他費用:</span>
      <input type="integer" name="other" class="typing_place" placeholder="その他費用" value="{{ old('other')}}">
    </label>
    <label>
      <span class="label">備忘録・メモ:</span>
      <input type="text" name="memo" class="typing_place typing_place1" placeholder="備忘録・メモ" value="{{ old('memo')}}">
    </label>
    <button type="submit" class="btn btn-success btn-sm shadow">登録</button>
  </form>
</div>
@endsection












  
    
