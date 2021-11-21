<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProviderController;


Route::get('/index', [ProviderController::class, 'index'])->name('index'); // نمایش صفحه اصلی
Route::get('/provider/create', [ProviderController::class, 'create'])->name('create'); // افزودن سرویس دهنده ی
Route::post('/provider/store', [ProviderController::class, 'store'])->name('store'); // ذخیره و آپدیت سرویس دهنده
Route::get('/provider/list', [ProviderController::class, 'list'])->name('list'); // نمایش لیست سرویس دهنده ها
Route::get('/provider/edit/{provider_id?}', [ProviderController::class, 'edit'])->name('edit'); // ویرایش سرویس دهنده ی مورد نظر
Route::get('/provider/delete/{provider_id?}', [ProviderController::class, 'delete'])->name('delete'); // حذف سرویس دهنده ی مورد نظر





