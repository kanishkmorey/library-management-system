<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\IssueController;

Route::resource('books', BookController::class);
Route::resource('members', MemberController::class);
Route::resource('issues', IssueController::class);

Route::get('/', function () {
    return view('home');
});
