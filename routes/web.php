<?php

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FileUploadAssgController;
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

Route::get('/file-upload', [FileUploadController::class, 'fileUpload']);
Route::post('/file-upload', [FileUploadController::class, 'prosesFileUpload']);

Route::get('/file-upload-assg', [FileUploadAssgController::class, 'fileUpload']);
Route::post('/file-upload-assg', [FileUploadAssgController::class, 'prosesFileUpload']);