<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use App\Models\Speciality;
use App\Models\Doctor;
use App\Models\Procedure;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/second-opinion', function () {
    return view('second-opinion');
});
Route::get('/international-patients', function () {
    return view('international-patients');
});

Route::get('/specialities', function () {
    $specialities = Speciality::orderBy('name')->get()->map(function ($s) {
        return [
            'title' => $s->name,
            'shortTitle' => str_replace(' ', '<br/>', $s->name),
            'image' => $s->banner_image
                ? asset('storage/' . $s->banner_image)
                : asset('assets/specialities/default.webp'),
            'desc' => $s->about_intro,
            'url' => route('specialities.show', $s->slug), // needs named route
        ];
    });

    return view('specialities.index', compact('specialities'));
})->name('specialities.index'); // 👈 ADD THIS


Route::get('/specialities/{slug}', function ($slug) {
    $speciality = Speciality::with('faqs')->where('slug', $slug)->firstOrFail();
    return view('specialities.show', compact('speciality'));
})->name('specialities.show'); // 👈 ADD THIS






Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');



Route::get('/doctors/{doctor:slug}', function (Doctor $doctor) {
    return view('doctors.show', compact('doctor'));
})->name('doctors.show');

Route::get('/conditions/{slug}', [ConditionController::class, 'show'])->name('conditions.show');

Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');



Route::get('/procedure/{slug}', function ($slug) {
    $procedure = Procedure::where('slug', $slug)
        ->where('is_active', true)
        ->firstOrFail();

    return view('procedures.show', compact('procedure'));
});


Route::get('/news-and-media', function () {
    return view('news');
});

Route::get('/doctor-videos', function () {
    return view('doctor-videos');
});


Route::get('/careers', function () {
    return view('career');
});


Route::get('/patient-testimonials', function () {
    return view('patient-testimonials');
});
