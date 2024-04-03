<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FlaskAPIController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecommendationsController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Event2Controller;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ProductController;


// Home route
Route::get('/', HomeController::class)->name('home');
// Authentication Routes



Route::get('/login', [AuthManager::class,  'login'])->name('login');
Route::post('/login', [AuthManager::class,  'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class,  'registration'])->name('registration');
Route::post('/registration', [AuthManager::class,  'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');


// Feedback routes
Route::get('/feedback/{id}', [FeedbackController::class, 'index'])->name('feedback.form');
Route::post('/feedback/submit', [FeedbackController::class, 'submitFeedback'])->name('feedback.form');
Route::get('/feedback/confirmation', function () {
    return view('feedback_confirmation');
})->name('feedback.confirmation');
// Display the feedback form
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.show');
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.form');

// Process the feedback form submission
Route::post('/feedback', [FeedbackController::class, 'submitFeedback'])->name('feedback.submit');

// Using a POST request for logout (recommended for security)
Route::post('/logout', [AuthManager::class, 'logout'])->name('logout');




// Route for displaying the recommendation form

Route::get('/recommendation', [RecommendationsController::class, 'index'])->name('recommendation.form');
Route::put('/recommendation', [App\Http\Controllers\RecommendationsController::class, 'update'])->name('recommendation.form');

Route::post('/recommendation/submit', [RecommendationsController::class, 'store'])->name('recommendation.submit');
Route::get('/recommendations', [RecommendationsController::class,'index'])->name('recommendations.index');
Route::get('/recommendation/{id}/edit', [RecommendationsController::class, 'edit'])->name('recommendation.edit');
Route::delete('/recommendation/{id}', [RecommendationsController::class, 'destroy'])->name('recommendation.destroy');


// Delete a specific recommendation
Route::delete('/recommendation/{id}', [RecommendationsController::class, 'destroy'])->name('recommendation.destroy');
Route::get('/recommendations/{recommendation}/edit',[RecommendationsController::class, 'edit'])->name('recommendations.edit');
Route::put('/recommendations/{recommendation}', [RecommendationsController::class, 'update'])->name('recommendations.update');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/visualizations', [DashboardController::class, 'index'])->name('dashboard');


// routes/web.php


// Route::get('/entrainement/{user_id}', [FlaskAPIController::class, 'fetchRecommendations'])->name('entrainement');

// // Define a route for fetching recommendations for a given user ID
// Route::get('/entrainement/{user_id}', [FlaskAPIController::class, 'fetchRecommendations'])->name('entrainement');
// Route::get('/entrainement', [App\Http\Controllers\FlaskAPIController::class, 'fetchRecommendations'])->name('entrainement');


// Route for authenticated users to fetch and view their recommendations
Route::get('/entrainement', [FlaskAPIController::class, 'fetchRecommendations'])
     ->middleware('auth')
     ->name('entrainement');


Route::get('/user-manager', [UserProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/user-manager', [UserProfileController::class, 'index'])
     ->name('profile')
     ->middleware('auth');

// Route for submitting the profile update form
Route::post('/user-manager/update', [UserProfileController::class, 'update'])
     ->name('profile.update') // This names the route as 'profile.update'
     ->middleware('auth');

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
Route::get('/eventshow', [EventController::class, 'eventshow'])->name('events.eventshow');
Route::get('/searchE', [EventController::class, 'searchE'])->name('events.searchE');


// // Routes for feedback


// // Routes for recommendation
// Route::get('/recommendation', 'RecommendationsController@showForm')->name('recommendation.show');
// Route::post('/recommendation', 'RecommendationsController@submitRecommendation')->name('recommendation.submit');
// Route::get('/recommendation', [RecommendationsController::class, 'showForm'])->name('recommendation.form');
Route::get('/home', [EventsController::class, 'index'])->name('home');
Route::get('/calendar', [Event2Controller::class, 'index'])->name('calendar.index');






Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms-of-use', function () {
    return view('terms-of-use');
})->name('terms-of-use');


//Product
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/productshow', [ProductController::class, 'productshow'])->name('products.productshow');
Route::post('/purchase/{id}', [ProductController::class, 'purchase'])->name('purchase');
// Adjusted to use explicit binding for product model



