<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TravelExpenseController;
use App\Http\Controllers\DailyReportController;
use App\Http\Controllers\DailyReport2Controller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

// travel_expense
Route::get('/', [TravelExpenseController::class, 'index'])
->name('travel_expenses.index');

Route::get('/travel_expenses/show', [TravelExpenseController::class, 'show'])
->name('travel_expenses.show')
->where('travel_expense','[0-9]+');

Route::get('/travel_expenses/show2', [TravelExpenseController::class, 'show2'])
->name('travel_expenses.show2')
->where('travel_expense','[0-9]+');

Route::get('/travel_expenses/create', [TravelExpenseController::class, 'create'])
->name('travel_expenses.create')
->where('travel_expense','[0-9]+');

Route::post('/travel_expenses/store', [TravelExpenseController::class, 'store'])
->name('travel_expenses.store')
->where('travel_expense','[0-9]+');

Route::get('/travel_expenses/edit/{travel_expense}', [TravelExpenseController::class, 'edit'])
->name('travel_expenses.edit')
->where('travel_expense','[0-9]+');

Route::post('/travel_expenses/update/{travel_expense}', [TravelExpenseController::class, 'update'])
->name('travel_expenses.update')
->where('travel_expense','[0-9]+');

Route::delete('/travel_expenses/{travel_expense}/destroy', [TravelExpenseController::class, 'destroy'])
->name('travel_expenses.destroy')
->where('travel_expense','[0-9]+');

Route::post('/travel_expenses/search_customer_name', [TravelExpenseController::class, 'search_customer_name'])
->name('travel_expenses.search_customer_name')
->where('travel_expense','[0-9]+');

Route::post('/travel_expenses/search_customer_name2', [TravelExpenseController::class, 'search_customer_name2'])
->name('travel_expenses.search_customer_name2')
->where('travel_expense','[0-9]+');


// daily_report
Route::get('/daily_reports/show', [DailyReportController::class, 'show'])
->name('daily_reports.show')
->where('daily_report','[0-9]+');

Route::get('/daily_reports/create', [DailyReportController::class, 'create'])
->name('daily_reports.create')
->where('daily_report','[0-9]+');

Route::post('/daily_reports/store', [DailyReportController::class, 'store'])
->name('daily_reports.store')
->where('daily_report','[0-9]+');

Route::get('/daily_reports/edit/{daily_report}', [DailyReportController::class, 'edit'])
->name('daily_reports.edit')
->where('daily_report','[0-9]+');

Route::post('/daily_reports/update/{daily_report}', [DailyReportController::class, 'update'])
->name('daily_reports.update')
->where('daily_report','[0-9]+');

Route::delete('/daily_reports/{daily_report}/destroy', [DailyReportController::class, 'destroy'])
->name('daily_reports.destroy')
->where('daily_report','[0-9]+');


// daily_report2
Route::get('/daily_report2s/show', [DailyReport2Controller::class, 'show'])
->name('daily_report2s.show')
->where('daily_report2','[0-9]+');

Route::get('/daily_report2s/create', [DailyReport2Controller::class, 'create'])
->name('daily_report2s.create')
->where('daily_report2','[0-9]+');

Route::post('/daily_report2s/store', [DailyReport2Controller::class, 'store'])
->name('daily_report2s.store')
->where('daily_report2','[0-9]+');

Route::get('/daily_report2s/edit/{daily_report2}', [DailyReport2Controller::class, 'edit'])
->name('daily_report2s.edit')
->where('daily_report2','[0-9]+');

Route::post('/daily_report2s/update/{daily_report2}', [DailyReport2Controller::class, 'update'])
->name('daily_report2s.update')
->where('daily_report2','[0-9]+');

Route::delete('/daily_report2s/{daily_report2}/destroy', [DailyReport2Controller::class, 'destroy'])
->name('daily_report2s.destroy')
->where('daily_report2','[0-9]+');



