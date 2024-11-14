<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FormMemberController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\InstitutionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Route untuk form member (GET untuk menampilkan form, POST untuk menyimpan data)
Route::get('/', [FormMemberController::class, 'index'])->name('form.index');
Route::post('/', [FormMemberController::class, 'store'])->name('admin.form.store');



// Authentication routes (tanpa registrasi, reset, atau verifikasi)
Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

// Group route untuk admin (hanya yang sudah login)
Route::group([
    'middleware' => ['auth'],
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    // Dashboard route
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('admin/member/{id}/edit', [MemberController::class, 'edit'])->name('admin.member.edit');
    
    // Resource routes untuk Member
    Route::resource('/member', MemberController::class);
    Route::resource('admin/member', MemberController::class);

    
    // Resource routes untuk Institution
    Route::resource('/institution', InstitutionController::class);
    Route::resource('admin/institution', InstitutionController::class);
    
    // Resource routes untuk Member dengan pembatasan metode
    Route::resource('/member', MemberController::class)
        ->only(['index', 'show', 'edit', 'update', 'destroy']);
});
Route::get('/login', [LoginController::class, 'login'])->name('login');
