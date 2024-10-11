<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register'=>false,
    'reset'=>false,
    'verify'=>false,
]);

Route::group([
    'middleware' => ['auth'], 
    'prefix' => 'admin', 
    'as' => 'admin.' 

] ,function () {

 Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->Name('index');
 Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->Name('dashboard');
    
Route::resource ('/institution', App\Http\Controllers\InstitutionController::class);

Route::resource ('/member', App\Http\Controllers\MemberController::class)->only(['index', 'show', 'destroy']);

});
