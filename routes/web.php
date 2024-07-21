<?php
use App\Http\Controllers\Guest\MovieController as GuestMovieController;
use App\Http\Controllers\Guest\PageController as GuestPageController;

Route::get('/movie',[GuestMovieController::class,'index'])->name('guest.movie.index');
Route::get('/',[GuestPageController::class,'index'])->name('guest.home');



