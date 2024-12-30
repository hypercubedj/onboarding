<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\MultiStepFormController;

// Route d'accueil
Route::get('/', function () {
    return Inertia::render('Auth/Register');
})->middleware('guest');

// Dashboard
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes d'onboarding
Route::get('/onboarding', function () {
    return Inertia::render('Onboarding/Edit');
})->middleware(['auth', 'verified'])->name('onboarding');

Route::get('/form', [MultiStepFormController::class, 'showForm'])->withoutMiddleware(['auth'])->name('form.show');

// Route::get('/form', [MultiStepFormController::class, 'showForm'])->name('form.show');
Route::post('/form', [MultiStepFormController::class, 'submitForm'])->name('form.submit');


// Route::middleware(['auth'])->group(function () {
//     Route::get('/onboarding', [OnboardingController::class, 'index'])->name('onboarding.index');
//     Route::post('/onboarding/step', [OnboardingController::class, 'store'])->name('onboarding.store');
// });

// Routes de profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
