<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DateController;
use App\Http\Controllers\ProviderController;


// Providers :
Route::get('/provider', [ProviderController::class, 'index'])->name('provider.index'); // نمایش صفحه اصلی
Route::get('/provider/create', [ProviderController::class, 'create'])->name('provider.create'); // نمایش فرم افزودن سرویس دهنده ی جدید
Route::post('/provider/store', [ProviderController::class, 'store'])->name('provider.store'); // ذخیره و آپدیت سرویس دهنده
Route::get('/provider/list', [ProviderController::class, 'list'])->name('provider.list'); // نمایش لیست سرویس دهنده ها
Route::get('/provider/edit/{provider_id?}', [ProviderController::class, 'edit'])->name('provider.edit'); // نمایش فرم ویرایش سرویس دهنده ی مورد نظر
Route::get('/provider/delete/{provider_id?}', [ProviderController::class, 'delete'])->name('provider.delete'); // حذف سرویس دهنده ی مورد نظر







