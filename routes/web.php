<?php
use App\Http\Controllers\LeadController;
use App\Http\Controllers\SalesPipelineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('leads', LeadController::class);
Route::resource('sales_pipeline', SalesPipelineController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
