<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\SessionController;
Use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::get('/why', function () {
    return view('why');
});

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/login', [SessionController::class, 'create'])->name('login')->middleware('guest');

Route::post('/login', [SessionController::class, 'store']);



// todos

Route::get('/todos', [ToDoController::class, 'index'])->middleware('auth');

Route::post('/todos', [ToDoController::class, 'store'])->middleware('auth');

Route::get('/todos/create', [ToDoController::class, 'create'])->middleware('auth');

//diaries

Route::get('/diaries', [DiaryController::class, 'index'])->middleware('auth');

Route::get('/diaries/create', [DiaryController::class, 'create'])->middleware('auth');

Route::post('/diaries', [DiaryController::class, 'store'])->middleware('auth');

// dinamiskie route

Route::get('todos/{todo}/edit', [ToDoController::class, 'edit'])->middleware('auth');

Route::get('diaries/{diary}/edit', [DiaryController::class, 'edit'])->middleware('auth');

Route::put('todos/{todo}', [ToDoController::class, 'update'])->middleware('auth');

Route::put('diaries/{diary}', [DiaryController::class, 'update'])->middleware('auth');

Route::get('/todos/{todo}', [ToDoController::class, 'show'])->middleware('auth');   

Route::get('/diaries/{diary}', [DiaryController::class, 'show'])->middleware('auth');

Route::delete('/todos/{todo}', [ToDoController::class, 'destroy'])->middleware('auth');

Route::delete('/diaries/{diary}', [DiaryController::class, 'destroy'])->middleware('auth');







