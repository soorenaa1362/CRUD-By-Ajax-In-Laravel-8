<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProviderController;


Route::get('/index', [IndexController::class, 'index'])->name('index');


// User :
Route::get('/user', [UserController::class, 'index'])->name('user.index'); // نمایش صفحه کاربر
Route::get('user/list', [UserController::class, 'list'])->name('user.list'); // نمایش لیست کاربران
Route::get('/user/create', [UserController::class, 'create'])->name('user.create'); // نمایش فرم افزودن کاربر
Route::get('/user/edit/{user_id?}', [UserController::class, 'edit'])->name('user.edit'); // نمایش فرم ویرایش کاربر مورد نظر
Route::post('/user/store', [UserController::class, 'store'])->name('user.store'); // ذخیره و آپدیت کاربر
Route::get('/user/delete/{user_id?}', [UserController::class, 'delete'])->name('user.delete'); // حدف کاربر مورد نظر


// Providers :
Route::get('/provider', [ProviderController::class, 'index'])->name('provider.index'); // نمایش صفحه سرویس دهنده
Route::get('/provider/create', [ProviderController::class, 'create'])->name('provider.create'); // نمایش فرم افزودن سرویس دهنده ی جدید
Route::post('/provider/store', [ProviderController::class, 'store'])->name('provider.store'); // ذخیره و آپدیت سرویس دهنده
Route::get('/provider/list', [ProviderController::class, 'list'])->name('provider.list'); // نمایش لیست سرویس دهنده ها
Route::get('/provider/edit/{provider_id?}', [ProviderController::class, 'edit'])->name('provider.edit'); // نمایش فرم ویرایش سرویس دهنده ی مورد نظر
Route::get('/provider/delete/{provider_id?}', [ProviderController::class, 'delete'])->name('provider.delete'); // حذف سرویس دهنده ی مورد نظر


// Patients :
Route::get('/patient', [PatientController::class, 'index'])->name('patient.index');
Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');
Route::get('/patient/list', [PatientController::class, 'list'])->name('patient.list');





