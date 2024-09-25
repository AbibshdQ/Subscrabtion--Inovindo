<?php

use App\Http\Controllers\DetailSubscrabtionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReporInstitutionSubscrabtionController;
use App\Http\Controllers\ReportUserSubscrabtionController;
use App\Http\Controllers\SubscrabtionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.main');
});

Route::resource('/subscribtion', SubscrabtionController::class);

Route::resource('/detail-subscribtion', DetailSubscrabtionController::class);

Route::resource('/report-user', ReportUserSubscrabtionController::class);

Route::resource('/report-institution', ReporInstitutionSubscrabtionController::class);
