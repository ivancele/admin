<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard/user/create', [DashboardController::class, 'createUser'])->name('user.create');