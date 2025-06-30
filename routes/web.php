<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;

Route::get('/', [MembersController::class, 'index'])->name('member.index');
Route::get('/create', [MembersController::class, 'create'])->name('member.create');
Route::post('/create', [MembersController::class, 'store'])->name('member.store');
Route::get('/edit/{id}', [MembersController::class, 'edit'])->name('member.edit');
Route::post('/edit/{id}', [MembersController::class, 'update'])->name('member.update');
Route::delete('/delete/{id}', [MembersController::class, 'destroy'])->name('member.destroy');
