<?php

use App\Http\Controllers\CatatanHasilBelajarController;
use App\Http\Controllers\UserController;
use App\Models\CatatanHasilBelajar;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layout');
// });

Route::get('/',function() {
    return redirect()->route('catatan.tampil');
});

Route::get('/catatan',[CatatanHasilBelajarController::class,'tampil'])->name('catatan.tampil');
Route::get('/catatan/tambah',[CatatanHasilBelajarController::class,'tambah'])->name('catatan.tambah');
Route::get('/catatan/submit',[CatatanHasilBelajarController::class,'submit'])->name('catatan.submit');
Route::get('/catatan/edit',[CatatanHasilBelajarController::class,'edit'])->name('catatan.edit');
Route::get('/catatan/update',[CatatanHasilBelajarController::class,'update'])->name('catatan.update');
Route::get('/catatan/delete',[CatatanHasilBelajarController::class,'delete'])->name('catatan.delete');