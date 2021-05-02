<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UploadController;

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
    return view('frontend.index');
});
Route::get('locale/{locale}', [MainController::class, 'changeLocale'])->name('locale');
Route::get('/contact-us', [ContactController::class, 'contact']);
Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');
// Route::post('email/send', [ContactController::class, 'sendEmail'])->name('sending');

// Route::get('/multiuploads', 'UploadController@uploadForm');
// Route::post('/multiuploads', 'UploadController@uploadSubmit');

Route::get('/upload',[UploadController::class,'uploadForm']);
Route::post('/upload',[UploadController::class,'uploadFile'])->name('upload.uploadfile');
