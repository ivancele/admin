<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/user/create', [DashboardController::class, 'createUser'])->name('user.create');
    Route::get('/dashboard/users', [DashboardController::class, 'usersIndex'])->name('user.all');
    Route::get('/dashboard/subject/all', [DashboardController::class, 'subjectsIndex'])->name('subjects.all');
});
