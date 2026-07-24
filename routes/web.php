<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
Use Illuminate\Support\Facades\View; 

// 1. Halaman Home
Route::get('/', [CompanyController::class, 'home']);

// 2. Halaman Products (Route Prefix)
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [CompanyController::class, 'marbelEdu']);
    Route::get('/marbel-and-friends-kids-games', [CompanyController::class, 'marbelAndFriends']);
    Route::get('/riri-story-books', [CompanyController::class, 'ririBooks']);
    Route::get('/kolak-kids-songs', [CompanyController::class, 'kolakSongs']);
});

// 3. Halaman News (Route Parameter Dinamis)
Route::get('/news/{title?}', [CompanyController::class, 'news']);

// 4. Halaman Program (Route Prefix)
Route::prefix('program')->group(function () {
    Route::get('/karir', [CompanyController::class, 'karir']);
    Route::get('/magang', [CompanyController::class, 'magang']);
    Route::get('/kunjungan-industri', [CompanyController::class, 'kunjungan']);
});

// 5. Halaman About Us
Route::get('/about-us', [CompanyController::class, 'aboutUs']);

 
Route::get('/hello', function () { 
 
return view('hello', ['name' => 'Andi']); 
 
}); 

return View::make('hello', ['name' => 'Andi']);