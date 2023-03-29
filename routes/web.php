<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;
use App\Http\Controllers\PVController;
use App\Http\Controllers\CircularController;
use App\Http\Controllers\ProfileController;


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

Route::post('/submitdepartment', [ProfileController::class, 'submitdepartment']);

Route::get('/offices', [ProfileController::class, 'offices']);

Route::get('/banks', [ProfileController::class, 'banks']);

Route::get('/staffprofile', [ProfileController::class, 'staffprofile']);

Route::post('/submitdesignation', [ProfileController::class, 'submitdesignation']);

Route::post('/submitoffices', [ProfileController::class, 'submitoffices']);

Route::post('/submitbank', [ProfileController::class, 'submitbank']);

Route::post('/submitstaff', [ProfileController::class, 'submitstaff']);

Route::post('/submitpics', [ProfileController::class, 'submitpics']);

Route::post('/submitsignature', [ProfileController::class, 'submitsignature']);

Route::get('/editstaff', [ProfileController::class, 'editstaff']);

Route::get('/convertuser', [ProfileController::class, 'convertuser']);

Route::post('/submiteditstaff', [ProfileController::class, 'submiteditstaff']);

Route::get('/stafftable', [ProfileController::class, 'stafftable']);

Route::get('/usertable', [ProfileController::class, 'usertable']);

Route::get('/userprofile', [ProfileController::class, 'userprofile']);

Route::post('/submitedituser', [ProfileController::class, 'submitedituser']);

Route::get('/updateprofile', [ProfileController::class, 'updateprofile']);

Route::post('/submitupdateprofile', [ProfileController::class, 'submitupdateprofile']);

Route::get('/uploadmypics', [ProfileController::class, 'uploadmypics']);

Route::get('/uploadmysignature', [ProfileController::class, 'uploadmysignature']);

Route::post('/submitmypics', [ProfileController::class, 'submitmypics']);

Route::post('/submitmysignature', [ProfileController::class, 'submitmysignature']);

Route::get('/changepassword', [ProfileController::class, 'changepassword']);

Route::post('/submitpassword', [ProfileController::class, 'submitpassword']);

/*************************** Memo Controller *************************************/

Route::get('/creatememo', [MemoController::class, 'creatememo']);

Route::get('/memodetails', [MemoController::class, 'memodetails']);

Route::get('/memoinbox', [MemoController::class, 'memoinbox']);

Route::get('/sentmemo', [MemoController::class, 'sentmemo']);

Route::get('/allmemo', [MemoController::class, 'allmemo']);

Route::post('/submitmemo', [MemoController::class, 'submitmemo']);

Route::post('/memoreaction', [MemoController::class, 'memoreaction']);

Route::post('/submiteditmemo', [MemoController::class, 'submiteditmemo']);

Route::get('/editmemo', [MemoController::class, 'editmemo']);


/**************************** PV Controller **************************************/

Route::get('/paymentvoucher', [PVController::class, 'paymentvoucher']);

Route::get('/pvdetails', [PVController::class, 'pvdetails']);

Route::get('/allpvs', [PVController::class, 'allpvs']);


/*************************** Circular Controller *********************************/

Route::get('/createcircular', [CircularController::class, 'createcircular']);

Route::get('/circulardetails', [CircularController::class, 'circulardetails']);

Route::get('/listcirculars', [CircularController::class, 'listcirculars']);







