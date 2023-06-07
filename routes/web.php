<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ContactController::class, 'index']);  //Show home Page

Route::post('/', [ContactController::class, 'store']);  //Contact request

// services routes start
Route::get('design', [ServicesController::class, 'show']);
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


Route::get('dashboard', [ContactController::class, 'show']);  //Admin Dashboard

Route::get('dashboard/team', [TeamController::class, 'index']);  //add new members form
Route::post('dashboard/team', [TeamController::class, 'store']);  //post new member
