<?php

use App\Http\Controllers\ConditionController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use App\Models\Speciality;
use App\Models\Doctor;

Route::get('/', function () {
    return view('welcome');
});





Route::get('/specialities/{slug}', function ($slug) {
    $speciality = Speciality::with('faqs')->where('slug', $slug)->firstOrFail();
    return view('specialities.show', compact('speciality'));
});


Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');



Route::get('/doctors/{doctor:slug}', function (Doctor $doctor) {
    return view('doctors.show', compact('doctor'));
})->name('doctors.show');

Route::get('/conditions/{slug}', [ConditionController::class, 'show'])->name('conditions.show');