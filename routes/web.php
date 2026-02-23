<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiseaseController;
use App\Models\Disease;

Route::get('/', function () {
    return view('profile');
});


// ===== ADMIN ROUTES =====
Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        $totalDiseases = \App\Models\Disease::count();
        return view('admin.dashboard', compact('totalDiseases'));
    })->name('admin.dashboard');

    Route::resource('diseases', DiseaseController::class);
});

