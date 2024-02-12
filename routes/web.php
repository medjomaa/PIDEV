<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Your HomeController
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FlaskAPIController;

// Adjust the route for single-action controller
Route::get('/', HomeController::class)->name('home');

Route::get('/feedback', [FeedbackController::class, 'showForm'])->name('feedback.show');
Route::post('/feedback/submit', [FeedbackController::class, 'submitFeedback'])->name('feedback.submit');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/visualizations', [DashboardController::class, 'getVisualizationData']);


Route::get('/fetch-recommendations/{user_id}', [FlaskAPIController::class, 'fetchRecommendations']);


Route::get('/user-manager', function () {
    return view('user-manager'); // Assumes you have a view named user-manager.blade.php
})->name('user-manager');
Route::get('/entrainement', function () {
    return view('entrainement'); // Assumes you have a view named entrainement.blade.php
})->name('entrainement');
Route::get('/evenement', function () {
    return view('evenement'); // Assumes you have a view named evenement.blade.php
})->name('evenement');
Route::get('/produit', function () {
    return view('produit'); // Assumes you have a view named produit.blade.php
})->name('produit');
Route::get('/category', function () {
    return view('category'); // Assumes you have a view named category.blade.php
})->name('category');
