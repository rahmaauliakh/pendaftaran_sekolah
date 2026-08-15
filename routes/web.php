<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
Route::get('/',[PublicController::class,'home'])->name('home');
Route::get('/tentang',[PublicController::class,'page'])->defaults('page','tentang');
Route::get('/program',[PublicController::class,'page'])->defaults('page','program');
Route::get('/fasilitas',[PublicController::class,'page'])->defaults('page','fasilitas');
Route::get('/faq',[PublicController::class,'page'])->defaults('page','faq');
Route::get('/kontak',[PublicController::class,'page'])->defaults('page','kontak');
Route::get('/ppdb',[PublicController::class,'ppdb'])->name('ppdb');
Route::get('/daftar',[PublicController::class,'create'])->name('register'); Route::post('/daftar',[PublicController::class,'store'])->name('register.store');
Route::get('/daftar/sukses/{registration_number}',[PublicController::class,'success'])->name('register.success');
Route::get('/cek-status',[PublicController::class,'statusForm'])->name('status'); Route::post('/cek-status',[PublicController::class,'statusCheck'])->name('status.check');
Route::get('/bukti/{registration_number}',[PublicController::class,'receipt'])->name('receipt');
Route::prefix('admin')->group(function(){
 Route::get('/login',[AdminController::class,'login'])->name('admin.login'); Route::post('/login',[AdminController::class,'authenticate'])->name('admin.auth');
 Route::middleware('admin')->group(function(){ Route::get('/',[AdminController::class,'dashboard'])->name('admin.dashboard'); Route::post('/logout',[AdminController::class,'logout'])->name('admin.logout'); Route::get('/pendaftar',[AdminController::class,'applicants'])->name('admin.applicants'); Route::get('/pendaftar/{applicant}',[AdminController::class,'show'])->name('admin.applicant'); Route::post('/pendaftar/{applicant}/status',[AdminController::class,'status'])->name('admin.status'); Route::post('/dokumen/{document}',[AdminController::class,'document'])->name('admin.document'); Route::get('/ppdb',[AdminController::class,'settings'])->name('admin.settings'); Route::post('/ppdb',[AdminController::class,'saveSettings'])->name('admin.settings.save'); });
});
