<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfluencerProfileController;

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
    return view('auth/login_influencer');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/edit_tiktok', function () {
    return view('profile/edit.tiktok');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/find', function() {
    return view('find');
});

Route::middleware(['auth', 'can:check_influencer'])->group(function () {
    // Route::get('/login_influencer', function () {
    //     return view('login_influencer');
    // })->name('login_influencer');
    Route::get('/influencer/profile', [InfluencerProfileController::class, 'edit'])->name('influencer.profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/influencer/dashboard', function () {
        return view('dashboard');
    })->name('influencer.dashboard');

});


//Route::get('/brand',);


require __DIR__.'/auth.php';

