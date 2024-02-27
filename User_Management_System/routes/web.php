<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ProfileController;
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
    return "<h1>Welcomw to dashBoard</h1>";
});

// sign-In get method
// Route::get('/sign-in', function(){
//     return view('auth.signIn');
// })->name('signIn.get');

// sign-Up get method
// Route::get('/sign-up', function(){
//     return view('auth.signUp');
// })->name('signUp.get');


Route::get('/sign-in', [AuthManager::class, 'signIn'])->name('signIn.get');
Route::get('/sign-up', [AuthManager::class, 'signUp'])->name('signUp.get');

// sign-In post

Route::post('/sign-up',[AuthManager::class,'signUpPost'])->name('signUp.post');
Route::post('/sign-in',[AuthManager::class, 'signInPost'])->name('signIn.post');


// Admin dashboard route



//logout route
Route::any('/sign-out', [AuthManager::class, 'signOutPost'])->name('signOut.post');

//auth middleware

Route::group(['middleware'=>'auth'], function(){

    Route::get('/admin-page', [AdminController::class, 'adminPannel'])->name('adminPannel.get'); 

    

    

});







// require __DIR__.'/auth.php';
