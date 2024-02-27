<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FlaskAPIController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecommendationsController;

// Home route
Route::get('/', HomeController::class)->name('home');

// Feedback routes
Route::get('/feedback', [FeedbackController::class, 'showForm'])->name('feedback.show');
Route::post('/feedback/submit', [FeedbackController::class, 'submitFeedback'])->name('feedback.submit');
Route::get('/feedback/confirmation', function () {
    return view('feedback_confirmation');
})->name('feedback.confirmation');
// Display the feedback form
Route::get('/feedback', [FeedbackController::class, 'showForm'])->name('feedback.show');
Route::get('/feedback', [FeedbackController::class, 'showForm'])->name('feedback.form');

// Process the feedback form submission
Route::post('/feedback', [FeedbackController::class, 'submitFeedback'])->name('feedback.submit');



// Display the form for creating a new recommendation
Route::get('/recommendation', [RecommendationsController::class, 'showForm'])->name('recommendation.form');

// Submit a new recommendation
Route::post('/recommendation/submit', [RecommendationsController::class, 'submitRecommendation'])->name('recommendation.submit');

// Display all recommendations
Route::get('/recommendations', [RecommendationsController::class, 'index'])->name('recommendations.index');

// Display a specific recommendation
Route::get('/recommendation/{id}', [RecommendationsController::class, 'show'])->name('recommendation.show');

// Show the form for editing a specific recommendation
Route::get('/recommendation/{id}/edit', [RecommendationsController::class, 'edit'])->name('recommendation.edit');

// Submit the updated recommendation
Route::put('/recommendation/{id}', [RecommendationsController::class, 'update'])->name('recommendation.update');

// Delete a specific recommendation
Route::delete('/recommendation/{id}', [RecommendationsController::class, 'destroy'])->name('recommendation.destroy');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/visualizations', [DashboardController::class, 'index'])->name('dashboard');


// routes/web.php


// Route::get('/entrainement/{user_id}', [FlaskAPIController::class, 'fetchRecommendations'])->name('entrainement');

// // Define a route for fetching recommendations for a given user ID
// Route::get('/entrainement/{user_id}', [FlaskAPIController::class, 'fetchRecommendations'])->name('entrainement');
Route::get('/entrainement/{user_id}', [FlaskAPIController::class, 'fetchRecommendations'])->name('entrainement.with.id');
Route::get('/entrainement', function () {
    return view('entrainement'); // Assumes you have a view named evenement.blade.php
})->name('entrainement');




Route::get('/user-manager', function () {
    return view('user-manager'); // Assumes you have a view named user-manager.blade.php
})->name('user-manager');
// Route::get('/entrainement', function () {
//     return view('entrainement'); // Assumes you have a view named entrainement.blade.php
// })->name('entrainement');
// Route::get('/evenement', function () {
//     return view('evenement'); // Assumes you have a view named evenement.blade.php
// })->name('evenement');
Route::get('/produit', function () {
    return view('produit'); // Assumes you have a view named produit.blade.php
})->name('produit');
Route::get('/home', function () {
    return view('home'); // Assumes you have a view named produit.blade.php
})->name('home');
//categories 
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
/* events routes*/ 
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');


// // Routes for feedback


// // Routes for recommendation
// Route::get('/recommendation', 'RecommendationsController@showForm')->name('recommendation.show');
// Route::post('/recommendation', 'RecommendationsController@submitRecommendation')->name('recommendation.submit');
// Route::get('/recommendation', [RecommendationsController::class, 'showForm'])->name('recommendation.form');
