<nav class="navbar navbar-expand-md navbar-light shadow-sm detail-header-container">
 
  <div class="btn-group">
    <button type="button" class="btn btn-primary">詳細</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="{{ route('travel_expenses.create')}}">出張費用明細</a></li>
    </ul>
  </div>

  <div class="btn-group">
    <button type="button" class="btn btn-info">日報</button>
    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="{{ route('daily_reports.create')}}">会社日報（田中）</a></li>
      <li><a class="dropdown-item" href="{{ route('daily_report2s.create')}}">会社日報（社員）</a></li>

    </ul>
  </div>




</nav>