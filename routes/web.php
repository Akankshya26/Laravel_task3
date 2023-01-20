<?php

use App\Models\Post;
use App\Models\Post1;
use App\Models\Comment;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
// Route::get('show', [PostController::class, 'show']);
// Route::post('add', [PostController::class, 'store']);
//Observer
// Route::get('/', function () {
//     Post1::whereId(1)->First()->delete();
//     Comment::wherepostId(1)->delete();
//     dd('done');
// });

//file storage
// Route::get('/', [PostController::class, 'index']);
// Route::post('/upload', [PostController::class, 'upload']);
// Route::post('upload', [PostController::class, 'upload']);
// Route::get('download{image}', [PostController::class, 'download'])->name('download.image');
// //Helper
//  Route::get('/', [PostController::class, 'helper']);
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::resource('/students', StudentController::class);
//Localization
//with lang
Route::get('/', function () {
    return view('home');
});
Route::get('/{locale}', function ($locale) {
    App::setlocale($locale);
    return view('home');
});
//with json
Route::get('/', function () {
    return view('homej');
});
Route::get('/{locale}', function ($locale) {
    App::setlocale($locale);
    return view('homej');
});
