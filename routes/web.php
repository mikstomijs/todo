<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Models\ToDo;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/why', function () {
    return view('why');
});

// todos

Route::get('/todos', [ToDoController::class, 'index']);

Route::post('/todos', [ToDoController::class, 'store']);

Route::get('/todos/create', [ToDoController::class, 'create']);

//diaries

Route::get('/diaries', [DiaryController::class, 'index']);

Route::get('/diaries/create', [DiaryController::class, 'create']);

Route::post('/diaries', [DiaryController::class, 'store']);

// dinamiskie route

Route::get('todos/{todo}/edit', [ToDoController::class, 'edit']);

Route::get('diaries/{diary}/edit', [DiaryController::class, 'edit']);

Route::put('todos/{todo}', [ToDoController::class, 'update']);

Route::put('diaries/{diary}', [DiaryController::class, 'update']);

Route::get('/todos/{todo}', [ToDoController::class, 'show']);   

Route::get('/diaries/{diary}', [DiaryController::class, 'show']);

Route::delete('/todos/{todo}', [ToDoController::class, 'destroy']);

Route::delete('/diaries/{diary}', [DiaryController::class, 'destroy']);







