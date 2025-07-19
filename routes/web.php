<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/event', function () {
    return view('event');
});

Route::post('/contact-form', [ContactController::class, 'store'])->name('contact.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/get-start', function () {
        return view('getstarted');
    });

    Route::get('/form', function(){
        return view('form');
    });

    Route::get('/uni-recommend-form', function(){
        return view('uniform');
    });

    Route::post('/api/submit-form', [FormController::class, 'submit'])->name('api.submit.form');
    
    Route::post('/api/submit', [FormController::class, 'submit'])->name('form.submit');
    Route::get('/result', [FormController::class, 'result'])->name('result');

    Route::post('/university-submit', [UniversityController::class, 'submit'])->name('api.university.submit');
    Route::get('/university-result', [UniversityController::class, 'result'])->name('university.result');

    

});

require __DIR__.'/auth.php';
