@extends('components.layout')

@section('content')
    <div class="back-link">
        <a href="{{ route('travel_expenses.index') }}">&laquo トップページに戻る</a>
        <a href="{{ route('travel_expenses.create') }}">&laquo 出張費用明細の登録に移動</a>
    </div>
    <h1>出張費用明細 -詳細</h1>

    {{-- 該当者で検索 --}}
    <div class="container">
        <h2>該当者名の費用を検索する</h2>
        <form action="{{ route('travel_expenses.search_customer_name') }}" method="POST">
            @csrf
            <div class="form-group form-group-seach-customer-name">
                <div class="form-group-search-customer-name1">
                    <span>該当者名</span>
                    <input type="string" name="customer_name" placeholder="該当者名">
                </div>
                <div class="form-group-search-customer-name2">
                    <span>出発日</span>
                    <input type="date" name="from" placeholder="from_date">
                    <input type="date" name="until" placeholder="until_date">
                </div>
                <button type="submit" data-toggle="button" class="btn btn-primary shadow btn-sm">検索</button>
            </div>
        </form>

        <span class="customer_name_total">
            <?php $customer_name_total = 
            $travel_expenses->sum('from_ticket_fee') +
            $travel_expenses->sum('to_ticket_fee') +
            $travel_expenses->sum('allowance') +
            $travel_expenses->sum('cost_per_day') +
            $travel_expenses->sum('transportation_cost') +
            $travel_expenses->sum('miscellaneous_expense') +
            $travel_expenses->sum('other')
            ; ?>
            合計: {{ number_format($customer_name_total) }}
        </span>

        <table border="2" style="solid 2px black";>
            <thead>
                <tr>
                    <th class="column">該当者名</th>
                    <th class="column">目的地</th>
                    <th class="column">出発日</th>
                    <th class="column">終了日</th>
                    <th class="column">合計金額</th>
                    <th class="column">チケット行き</th>
                    <th class="column">チケット帰り</th>
                    <th class="column">出張手当</th>
                    <th class="column">出張費</th>
                    <th class="column">交通費</th>
                    <th class="column">雑費</th>
                    <th class="column">その他費用</th>
                    <th class="column column1">備忘録・メモ</th>
                    <th class="column">編集</th>
                    <th class="column">削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($travel_expenses as $travel_expense)
                    <tr>
                        <td class="column">{{ $travel_expense->customer_name }}</td>
                        <td class="column">{{ $travel_expense->destination }}</td>
                        <td class="column">{{ $travel_expense->from }}</td>
                        <td class="column">{{ $travel_expense->until }}</td>
                        <td class="column">
                             <?php echo $total =
                              $travel_expense->from_ticket_fee +
                               $travel_expense->to_ticket_fee +
                               $travel_expense->allowance +
                               $travel_expense->cost_per_day +
                               $travel_expense->transportation_cost +
                               $travel_expense->miscellaneous_expense +
                               $travel_expense->other
                             ;?> 
                                
                                </td>
                        <td class="column">{{ $travel_expense->from_ticket_fee }}</td>
                        <td class="column">{{ $travel_expense->to_ticket_fee }}</td>
                        <td class="column">{{ $travel_expense->allowance }}</td>
                        <td class="column">{{ $travel_expense->cost_per_day }}</td>
                        <td class="column">{{ $travel_expense->transportation_cost }}</td>
                        <td class="column">{{ $travel_expense->miscellaneous_expense }}</td>
                        <td class="column">{{ $travel_expense->other }}</td>
                        <td class="column column1">{{ $travel_expense->memo }}</td>
                        <td class="column"><a href="/travel_expenses/edit/{{ $travel_expense->id }}">編集</a></td>
                        <td class="column delete">
                            <form method="POST" action="{{ route('travel_expenses.destroy', $travel_expense->id) }}"
                                id="delete">
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
    </div>
    </div>
@endsection
