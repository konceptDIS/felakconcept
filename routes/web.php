<?php

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

Route::get('/', function () {
    return view('home');
}) ->name('home');

Route::get('/about', function () {
    return view('about');
}) ->name('about');

Route::get('/project', function () {
    return view('project');
}) ->name('project');

Route::get('/design', function () {
    return view('design');
}) ->name('design');

Route::get('/hse', function () {
    return view('hse');
}) ->name('hse');

Route::get('/marine', function () {
    return view('marine');
}) ->name('marine');

Route::get('/port', function () {
    return view('port');
}) ->name('port');

Route::get('/training', function () {
    return view('training');
}) ->name('training');

Route::get('/water', function () {
    return view('water');
}) ->name('water');

Route::get('/procurement', function () {
    return view('procurement');
}) ->name('procurement');

Route::get('/contact', function () {
    return view('contact');
}) ->name('contact');
