<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Routes

Route::get('/', [ContactController::class, 'index']);  //Show home Page

Route::post('/', [ContactController::class, 'store']);  //Contact request
// Route::post('web', [ContactController::class, 'getReq']);  //Subscribe  Request

// services routes start
Route::get('property', [ServicesController::class, 'show']);
Route::get('call', [ServicesController::class, 'showCallService']);
Route::get('data', [ServicesController::class, 'showDataService']);
Route::get('web', [ServicesController::class, 'showWebService']);
Route::get('virtual', [ServicesController::class, 'showVirtualService']);
// services routes End

// Blog Routes Start
Route::get('blog1', [BlogController::class, 'showBlog1']);
Route::get('blog2', [BlogController::class, 'showBlog2']);
// Blog Routes End


// Team Members routes Start
Route::get('teams', [BlogController::class, 'team']);


Route::get('delete', [ContactController::class, 'delete']);  //delete request
Route::get('dashboard', [ContactController::class, 'show']);  //Admin Dashboard

Route::get('dashboard/team', [TeamController::class, 'index']);  //add new members form
Route::post('dashboard/team', [TeamController::class, 'store']);  //post new member
Route::get('dashboard/index', [TeamController::class, 'members']);  //show members
Route::get('dashboard/edit', [TeamController::class, 'edit']);  //show members
Route::post('dashboard/edit', [TeamController::class, 'update']);  //show members
Route::get('dashboard/delete', [TeamController::class, 'delete']);  //show members

// Registration Page
Route::get('register', [UserController::class, 'get']);  // get registration form
Route::post('register', [UserController::class, 'store']);  // post registration

// login Page
Route::get('login', [UserController::class, 'show']);  // get login form
Route::post('login', [UserController::class, 'login']);  // login 

Route::get('photoGallery', [PhotoController::class, 'photos']);  // get all photos

Route::get('payment', [ContactController::class, 'payment']);  // get all photos








