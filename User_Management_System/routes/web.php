<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\Permission;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleManager;
use Illuminate\Support\Facades\Route;

// welcome page
Route::get('/', function () { return view('welcome'); })->name('welcome.get');




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

    Route::get('/admin-user-list', [AdminController::class, 'getUserList'])->name('userList.get');

    Route::get('/admin-addUser', [AdminController::class, 'addUsers'])->name('addUser.get');

    
});





// role manager

Route::group(['middleware'=>'auth'], function(){

    Route::get('/add-roles',[RoleManager::class, 'addRoleGet'])->name('addRoles.get');

    Route::post('/add-roles', [RoleManager::class, 'addRolePost'])->name('addRoles.post');
});


// permission middlware
Route::group(['middleware'=>'auth'], function(){

    Route::get('/permission', [PermissionController::class, 'getPermissions'])->name('getPermissions.get');

    Route::any('/permission-assign',[PermissionController::class, 'assignPermissions'])->name('assignPermission.post');

});



Route::post('/permission-assign', [PermissionController::class,'getPermission'])->name('demo.get');











// require __DIR__.'/auth.php';
