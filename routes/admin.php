<?php

use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\contactController;
use App\Http\Controllers\Admin\permissionController;
use App\Http\Controllers\Admin\postController;
use App\Http\Controllers\Admin\roleController;
use App\Http\Controllers\Admin\UpermController;
use App\Http\Controllers\Admin\userController;
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
Route::prefix('admin')->middleware(['auth','isAdmin'])->group( function() {
    /* Home Index */
    Route::get('/index',[adminController::class,'index'])->name('admin');
    /* End Home Index */

    /* User */
    Route::resource('/users', userController::class);
    /* Edn Users */

    /* Post */
    Route::resource('/posts', postController::class);
    /* End Post */

    /* Category */
    Route::resource('/category', categoryController::class);
    /* End Category */

    /* Permission */
    Route::resource('/permissions', permissionController::class);
    /* End Permission */

    /* Role */
    Route::resource('/roles', roleController::class);
    /* End Role */

    /* contact */
    Route::get('/contacts/index', [contactController::class,'index'])->name('contacts.index');
    Route::delete('/contacts/destroy/{contact}', [contactController::class,'destroy'])->name('contacts.destroy');
    /* End contact */

    /* User Permission */
    Route::get('/Uperm/index/{id}', [UpermController::class, 'index'])->name('Uperm.index');
    Route::get('/Uperm/create/{id}', [UpermController::class, 'create'])->name('Uperm.create');
    Route::post('/Uperm/store/{id}', [UpermController::class, 'store'])->name('Uperm.store');
    /* End User Permission */
});
