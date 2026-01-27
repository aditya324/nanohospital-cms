<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use App\Models\Speciality;
use App\Models\Doctor;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/second-opinion', function () {
    return view('second-opinion');
});
Route::get('/international-patients', function () {
    return view('international-patients');
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

Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
