<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandHoldingController;
use App\Http\Controllers\IrrigationController;
use App\Http\Controllers\CroppingPatternController;
use App\Http\Controllers\WellDepthController;
use Illuminate\Support\Facades\Auth;
use App\Models\WellDepth;



Route::get('/', function () {
    return view('home');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');



Route::get('landhold', [LandHoldingController::class, 'index']);  // To display the form
Route::post('landhold', [LandHoldingController::class, 'store']); // To handle form submission


Route::get('/irrigation', [IrrigationController::class, 'index'])->name('irrigation.index');
Route::post('/irrigation', [IrrigationController::class, 'store'])->name('irrigation.store');


Route::post('/cropping', [CroppingPatternController::class, 'store']);
Route::get('/cropping', [CroppingPatternController::class, 'index']);


Route::post('/welldepth', [WellDepthController::class, 'store']);
 // Assuming the WellDepth model exists

 Route::get('/welldepth', [WellDepthController::class, 'index'])->name('welldepth');



// Routes for login and signup
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup.form');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');

// Routes for dashboard and other pages
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');;

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::get('/about', function () {
    return view('about');
});

Route::get('/agriculture', function () {
    return view('agriculture');
});

// Route::get('/cropping', function () {
//     return view('cropping');
// });

Route::get('/farming', function () {
    return view('farming');
});

// Route::get('/irrigation', function () {
//     return view('irrigation');
// });

// Route::get('/landhold', function () {
//     return view('landhold');
// });

// Route::get('/welldepth', function () {
//     return view('welldepth');
// });


Route::get('/landhold/export', [LandHoldingController::class, 'export'])->name('landhold.export');

Route::get('/irrigation/export', [IrrigationController::class, 'exportToCSV'])->name('irrigation.export');

Route::get('/cropping/export', [CroppingPatternController::class, 'exportToCSV'])->name('cropping.export');

Route::get('/welldepth/export', [WellDepthController::class, 'exportToCSV'])->name('welldepth.export');