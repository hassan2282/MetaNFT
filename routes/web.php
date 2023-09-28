<?php

use App\Http\Controllers\Admin\contactController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NftController;
use App\Http\Controllers\productDetailController;
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
@include('admin.php');
Route::get('/', [HomeController::class,'index']);
Route::get('/google',[GoogleController::class, 'index'])->name('google');
Route::get('google/callback',[GoogleController::class, 'callback']);
Route::get('/about', function(){return view('about');})->name('about');
Route::middleware('auth')
    ->group(function(){
    Route::get('/contact', function(){return view('contact');})->name('contact');
});
Route::post('/contact/store', [contactController::class,'store'])->name('contact.store');
Route::get('/blog', function(){return view('blog');})->name('blog');
Route::get('/explore', function(){return view('explore');})->name('explore');
Route::get('/product-detail/{Nft}', [productDetailController::class, 'index'])->name('product-detail');

Route::resource('/Nft', NftController::class);


Route::get('/policy',function(){return view('privacy-policy');});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/');
    })->name('dashboard');
});


