<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TrialController;
use App\Http\Controllers\EnrollmentController;
use App\Models\Article;
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
    $articles = Article::where('is_published', true)
        ->whereNotNull('published_at')
        ->where('published_at', '<=', now())
        ->latest('published_at')
        ->take(3)
        ->get();
        
    return view('welcome', compact('articles'));
})->name('welcome');

// Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{article:slug}', [BlogController::class, 'show'])->name('blog.show');

// Authentication Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard.index');
    })->name('admin');

    // Article routes
    Route::resource('articles', ArticleController::class);
    Route::post('articles/upload-image', [ArticleController::class, 'uploadImage'])->name('articles.upload-image');

    // Trial routes
    Route::resource('trials', TrialController::class);
    Route::patch('trials/{trial}/status', [TrialController::class, 'updateStatus'])->name('trials.update-status');

    // Enrollment routes
    Route::post('/enroll', [EnrollmentController::class, 'store'])->name('enroll.store');
    
    // Dashboard Enrollment routes
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::resource('enrollments', \App\Http\Controllers\Dashboard\EnrollmentController::class);
        Route::patch('enrollments/{enrollment}/status', [\App\Http\Controllers\Dashboard\EnrollmentController::class, 'updateStatus'])->name('enrollments.update-status');
    });
});
