<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;

Route::get('/', [MembersController::class, 'index'])->name('member.index');
Route::get('/create', [MembersController::class, 'create'])->name('member.create');
Route::post('/create', [MembersController::class, 'store'])->name('member.store');
