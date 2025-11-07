<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;

// ===================== HALAMAN UTAMA =====================
// Halaman utama dengan animasi dan tombol
Route::get('/', [HomeController::class, 'index'])->name('home');

// ===================== FEEDBACK ROUTES =====================

// Tampilkan semua feedback (untuk admin)
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');

// Form untuk balas feedback (untuk admin)
Route::get('/feedback/reply/{id}', [FeedbackController::class, 'replyForm'])->name('feedback.replyForm');

// Simpan balasan feedback (untuk admin)
Route::post('/feedback/reply/{id}', [FeedbackController::class, 'replySubmit'])->name('feedback.replySubmit');

// Form untuk user submit feedback
Route::get('/feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');

// Simpan feedback dari user
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

// ===================== DELETE FEEDBACK =====================
// Hapus feedback (untuk admin)
Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
