<?php

use App\Http\Controllers\CompaniesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('listdata', function () {
    return view('listdata');
});
Route::get('editpage', function () {
    return view('editpage');
});

Route::get('/', [CompaniesController::class, 'pullDataCompany']);
Route::get('editpage', [CompaniesController::class, 'pullDataCompanyEdit']);

Route::post('addData', [CompaniesController::class, 'addData'])->name('addData');

Route::get('editpage/{id}', [CompaniesController::class, 'editPullDataToListEdit'])->name('editPullDataToListEdit');
Route::post('update/{id}', [CompaniesController::class, 'update'])->name('update');

Route::get('delete/{id}', [CompaniesController::class, 'delete'])->name('delete');
