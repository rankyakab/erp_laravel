<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemoController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*************************** Profile Controller ********************************/

Route::get('/createstaff', [ProfileController::class, 'createstaff']);

Route::get('/profilepics', [ProfileController::class, 'profilepics']);

Route::get('/addsignature', [ProfileController::class, 'addsignature']);

Route::get('/designations', [ProfileController::class, 'designations']);

Route::get('/departments', [ProfileController::class, 'departments']);

Route::get('/offices', [ProfileController::class, 'offices']);

Route::get('/staffprofile', [ProfileController::class, 'staffprofile']);

/*************************** Memo Controller *************************************/

Route::get('/creatememo', [MemoController::class, 'creatememo']);

Route::get('/memodetails', [MemoController::class, 'memodetails']);
