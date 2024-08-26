<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\bookController;

use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\PostCondition;

Route::get("posts",[ PostController::class ,"index"]);
Route::get("posts/show/{id}",[ PostController::class ,"show"]);
Route::get("posts/create",[ PostController::class ,"create"]);
Route::post("posts/store",[ PostController::class ,"store"]);
Route::get("posts/edit/{id}",[ PostController::class ,"edit"]);
Route::post("posts/update/{id}",[ PostController::class ,"update"]);
Route::get("posts/delete/{id}",[ PostController::class ,"delete"]);
Route::get("posts/latest/{num}",[ PostController::class ,"latest"]);
Route::get("posts/search", [PostController::class, "search"]);
Route::get("books",[ bookController::class ,"index"]);
Route::get("books/show/{id}",[ bookController::class ,"show"]);
Route::get("books/create",[ bookController::class ,"create"]);
Route::post("books/store",[ bookController::class ,"store"]);
Route::get("books/edit/{id}",[ bookController::class ,"edit"]);
Route::post("books/update/{id}",[ bookController::class ,"update"]);
Route::get("books/delete/{id}",[ bookController::class ,"delete"]);





