<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PortfolioController::class, 'index'])->name('home');
Route::get('/projects/{id}',[PortfolioController::class, 'showProject'])->name('project.show'); // (resource.action)
