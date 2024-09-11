<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PortfolioController::class, 'index'])->name('home');
Route::post('/send-message',[PortfolioController::class, 'sendMessage'])->name('portfolio.sendMessage');