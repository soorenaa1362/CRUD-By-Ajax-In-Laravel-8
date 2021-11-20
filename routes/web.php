<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProviderController;


Route::get('/provider', [ProviderController::class, 'index'])->name('index');
Route::get('/provider/list', [ProviderController::class, 'list'])->name('list');





