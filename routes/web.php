<?php

use App\Http\Controllers\AttractionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Route;

// Landing Routes
Route::prefix('/')->name('landing.')->group(function () {
    Route::get('/', function () {
        $zones = \App\Models\Zone::all();
        $attractions = \App\Models\Attraction::all();
        return view('landing.pages.index', compact('zones', 'attractions'));
    })->name('index');

    // Attraction Routes
    Route::prefix('/attraction')->group(function () {
        Route::get('/{attraction}', [AttractionController::class, 'showAttractions'])->name('attractions');
        Route::post('/review', [ReviewController::class, 'store'])->name('attraction.review.store');
    });

    // Zone Routes
    Route::prefix('/zone')->group(function () {
        Route::get('/{zone}', [ZoneController::class, 'showZones'])->name('zones');
        Route::post('/review', [ReviewController::class, 'store'])->name('zone.review.store');
    });
});

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', function () {
        $zones = \App\Models\Zone::all();
        $attractions = \App\Models\Attraction::all();
        $publishedReviews = \App\Models\Review::where('is_published', true)->get();
        $unpublishedReviews = \App\Models\Review::where('is_published', false)->get();

        $counter = [
            'zones' => $zones->count(),
            'attractions' => $attractions->count(),
            'publishedReviews' => $publishedReviews->count(),
            'unpublishedReviews' => $unpublishedReviews->count(),
        ];

        return view('admin.pages.index', compact('counter'));
    })->name('index');

    Route::resource('zones', ZoneController::class);
    Route::resource('attractions', AttractionController::class);

    Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index');
    Route::patch('reviews/{review}/approve', [ReviewController::class, 'approve'])->name('reviews.approve');
    Route::patch('reviews/{review}/disapprove', [ReviewController::class, 'disapprove'])->name('reviews.disapprove');
    Route::delete('reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
});

// Contact Route
Route::post('/contact', function () {
    return back()->with('success', 'Message sent successfully!');
});

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';