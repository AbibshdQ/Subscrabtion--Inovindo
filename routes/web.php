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

// Route::get('/register', function () {
//     return view('layouts.create');
// });

Route::resource('/subscribtion', SubscriptionController::class);
Route::get('subscriptions/{id}', [SubscriptionController::class, 'show'])->name('subscriptions.show');

Route::resource('/detail-Subscription', DetailSubscrabtionController::class);

Route::resource('/report-user', ReportUserSubscrabtionController::class);

Route::resource('/report-select', ReporInstitutionSubscrabtionController::class);

Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
Route::resource('/payments', PaymentController::class);


//Cetak Pdf
Route::get('/cetak-pdf', [PdfController::class, 'usercetakPDF'])->name('cetak.user.pdf');
Route::get('/cetak/selectuser/pdf', [PdfController::class, 'selectusercetakPDF'])->name('cetak.selectuser.pdf');
Route::get('generate-pdf/', [App\Http\Controllers\PdfController::class, 'PdfGenerate']);
// Route::get('/cetak-user-pdf', [ReportUserSubscrabtionController::class, 'cetakUserPdf'])->name('cetak.user.pdf');
// Route::get('/cetak-select-user-pdf', [ReporInstitutionSubscrabtionController::class, 'cetakSelectUserPdf'])->name('cetak.selectuser.pdf');

 
//from template
// Route::resource('/dashboard', DashboardController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
 
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');