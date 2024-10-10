<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailSubscrabtionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReporInstitutionSubscrabtionController;
use App\Http\Controllers\ReportUserSubscrabtionController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('layouts.main');
});

Route::resource('/subscribtion', SubscriptionController::class);
Route::get('subscriptions/{id}', [SubscriptionController::class, 'show'])->name('subscriptions.show');

Route::resource('/detail-Subscription', DetailSubscrabtionController::class);

Route::resource('/report-user', ReportUserSubscrabtionController::class);

Route::resource('/report-institution', ReporInstitutionSubscrabtionController::class);

Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
Route::resource('/payments', PaymentController::class);


//Cetak Pdf
Route::get('/cetak-pdf', [PdfController::class, 'cetakPDF'])->name('cetak.pdf');
Route::get('generate-pdf/', [App\Http\Controllers\PdfController::class, 'PdfGenerate']);


//from template
Route::resource('/dashboard', DashboardController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
 
// Route::post('/logout', function () {
//     Auth::logout();
//     return redirect('/');
// })->name('logout');