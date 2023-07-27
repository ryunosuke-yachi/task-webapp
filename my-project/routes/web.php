<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/show', function () {
    return view('show');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/edit', function () {
    return 'タスク編集画面';
});

Route::get('/detail', function () {
    return 'タスク詳細画面';
});

Route::get('/remove', function () {
    return 'タスク削除画面';
});

Route::get('/sort', function () {
    return view('sort');
});

Route::get('/calendar', function () {
    return view('calendar');
});
