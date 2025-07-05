<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;

Route::get('/members', [MembersController::class, 'index'])->name('member.index');
Route::get('/addmember', [MembersController::class, 'create'])->name('member.create');
Route::post('/member/create', [MembersController::class, 'store'])->name('member.store');
Route::get('/editmember/{id}', [MembersController::class, 'edit'])->name('member.edit');
Route::post('/editmember/{id}', [MembersController::class, 'update'])->name('member.update');
Route::delete('/member/delete/{id}', [MembersController::class, 'destroy'])->name('member.destroy');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/adduser', [UsersController::class, 'create'])->name('user.create');
Route::post('/user/create', [UsersController::class, 'store'])->name('user.store');
Route::get('/edituser/{id}', [UsersController::class, 'edit'])->name('user.edit');
Route::post('/edituser/{id}', [UsersController::class, 'update'])->name('user.update');
Route::delete('/user/delete/{id}', [UsersController::class, 'destroy'])->name('user.destroy');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [LoginController::class, 'landingPage'])->name('home');

Route::get('/dashboard', [MembersController::class, 'dashboard'])->name('dashboard');

