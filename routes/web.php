<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ControllerKeynotespeaker;
use App\Http\Controllers\ControllerOrganizer;
use App\Http\Controllers\ControllerSponsor;
use App\Http\Controllers\ControllerTweet;
use App\Http\Controllers\ControllerVideo;
use App\Http\Controllers\ControllerPhoto;
use App\Http\Controllers\CountrieController;
use App\Http\Controllers\SpecialsessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// page route
Route::get('/page', [PageController::class,'getall'])->name('pages.index');
Route::get('/page/{id}', [PageController::class,'getbyid'])->name('pages.index-id');
Route::post('/page', [PageController::class,'add'])->name('pages.store');
Route::put('/page/update/{id}', [PageController::class,'update'])->name('pages.update');
Route::get('/page/edit/{id}', [PageController::class,'edit'])->name('pages.edit');
Route::delete('/page/delete/{id}', [PageController::class,'delete'])->name('pages.delete');


// link route
Route::get('/link', [LinkController::class,'getall'])->name('links.index');
Route::get('/link/{id}', [LinkController::class,'getbyid'])->name('links.index-id');
Route::post('/link', [LinkController::class,'add'])->name('links.store');
Route::put('/link/update/{id}', [LinkController::class,'update'])->name('links.update');
Route::get('/link/edit/{id}', [LinkController::class,'edit'])->name('links.edit');
Route::delete('/link/delete/{id}', [LinkController::class,'delete'])->name('links.delete');


// Author route
Route::get('/author', [AuthorController::class,'getall'])->name('authors.index');
Route::get('/author/{id}', [AuthorController::class,'getbyid'])->name('authors.index-id');
Route::post('/author', [AuthorController::class,'add'])->name('authors.store');
Route::put('/author/update/{id}', [AuthorController::class,'update'])->name('authors.update');
Route::get('/author/edit/{id}', [AuthorController::class,'edit'])->name('authors.edit');
Route::delete('/author/delete/{id}', [AuthorController::class,'delete'])->name('authors.delete');


// Keynotespeakers route
Route::get('/keynote', [ControllerKeynotespeaker::class,'getall'])->name('keynotes.index');
Route::get('/keynote/{id}', [ControllerKeynotespeaker::class,'getbyid'])->name('keynotes.index-id');
Route::post('/keynote', [ControllerKeynotespeaker::class,'add'])->name('keynotes.store');
Route::put('/keynote/update/{id}', [ControllerKeynotespeaker::class,'update'])->name('keynotes.update');
Route::get('/keynote/edit/{id}', [ControllerKeynotespeaker::class,'edit'])->name('keynotes.edit');
Route::delete('/keynote/delete/{id}', [ControllerKeynotespeaker::class,'delete'])->name('keynotes.delete');



// orgonizers route
Route::get('/organizer', [ControllerOrganizer::class,'getall'])->name('organizers.index');
Route::get('/organizer/{id}', [ControllerOrganizer::class,'getbyid'])->name('organizers.index-id');
Route::post('/organizer', [ControllerOrganizer::class,'add'])->name('organizers.store');
Route::put('/organizer/update/{id}', [ControllerOrganizer::class,'update'])->name('organizers.update');
Route::get('/organizer/edit/{id}', [ControllerOrganizer::class,'edit'])->name('organizers.edit');
Route::delete('/organizer/delete/{id}', [ControllerOrganizer::class,'delete'])->name('organizers.delete');


// sponsors route
Route::get('/sponsor', [ControllerSponsor::class,'getall'])->name('sponsors.index');
Route::get('/sponsor/{id}', [ControllerSponsor::class,'getbyid'])->name('sponsors.index-id');
Route::post('/sponsor', [ControllerSponsor::class,'add'])->name('sponsors.store');
Route::put('/sponsor/update/{id}', [ControllerSponsor::class,'update'])->name('sponsors.update');
Route::get('/sponsor/edit/{id}', [ControllerSponsor::class,'edit'])->name('sponsors.edit');
Route::delete('/sponsor/delete/{id}', [ControllerSponsor::class,'delete'])->name('sponsors.delete');

// tweets route
Route::get('/tweet', [ControllerTweet::class,'getall'])->name('tweets.index');
Route::get('/tweet/{id}', [ControllerTweet::class,'getbyid'])->name('tweets.index-id');
Route::post('/tweet', [ControllerTweet::class,'add'])->name('tweets.store');
Route::put('/tweet/update/{id}', [ControllerTweet::class,'update'])->name('tweets.update');
Route::get('/tweet/edit/{id}', [ControllerTweet::class,'edit'])->name('tweets.edit');
Route::delete('/tweet/delete/{id}', [ControllerTweet::class,'delete'])->name('tweets.delete');

// video route
Route::get('/video', [ControllerVideo::class,'getall'])->name('videos.index');
Route::get('/video/{id}', [ControllerVideo::class,'getbyid'])->name('videos.index-id');
Route::post('/video', [ControllerVideo::class,'add'])->name('videos.store');
Route::put('/video/update/{id}', [ControllerVideo::class,'update'])->name('videos.update');
Route::get('/video/edit/{id}', [ControllerVideo::class,'edit'])->name('videos.edit');
Route::delete('/video/delete/{id}', [ControllerVideo::class,'delete'])->name('videos.delete');


// photo route
Route::get('/photo', [ControllerPhoto::class,'getall'])->name('photos.index');
Route::get('/photo/{id}', [ControllerPhoto::class,'getbyid'])->name('photos.index-id');
Route::post('/photo', [ControllerPhoto::class,'add'])->name('photos.store');
Route::put('/photo/update/{id}', [ControllerPhoto::class,'update'])->name('photos.update');
Route::get('/photo/edit/{id}', [ControllerPhoto::class,'edit'])->name('photos.edit');
Route::delete('/photo/delete/{id}', [ControllerPhoto::class,'delete'])->name('photos.delete');


// countrie route
Route::get('/countrie', [CountrieController::class,'getall'])->name('countries.index');
Route::get('/countrie/{id}', [CountrieController::class,'getbyid'])->name('countries.index-id');
Route::post('/countrie', [CountrieController::class,'add'])->name('countries.store');
Route::put('/countrie/update/{id}', [CountrieController::class,'update'])->name('countries.update');
Route::get('/countrie/edit/{id}', [CountrieController::class,'edit'])->name('countries.edit');
Route::delete('/countrie/delete/{id}', [CountrieController::class,'delete'])->name('countries.delete');


// specialsession route
Route::get('/specialsession', [SpecialsessionController::class,'getall'])->name('specialsessions.index');
Route::get('/specialsession/{id}', [SpecialsessionController::class,'getbyid'])->name('specialsessions.index-id');
Route::post('/specialsession', [SpecialsessionController::class,'add'])->name('specialsessions.store');
Route::put('/specialsession/update/{id}', [SpecialsessionController::class,'update'])->name('specialsessions.update');
Route::get('/specialsession/edit/{id}', [SpecialsessionController::class,'edit'])->name('specialsessions.edit');
Route::delete('/specialsession/delete/{id}', [SpecialsessionController::class,'delete'])->name('specialsessions.delete');


// author route
Route::get('/author', [AuthorController::class,'getall'])->name('authors.index');
Route::get('/author/{id}', [AuthorController::class,'getbyid'])->name('authors.index-id');
Route::post('/author', [AuthorController::class,'add'])->name('authors.store');
Route::put('/author/update/{id}', [AuthorController::class,'update'])->name('authors.update');
Route::get('/author/edit/{id}', [AuthorController::class,'edit'])->name('authors.edit');
Route::delete('/author/delete/{id}', [AuthorController::class,'delete'])->name('authors.delete');
