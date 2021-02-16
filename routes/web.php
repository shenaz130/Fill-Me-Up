<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
   
});
Route::get('/home', [PageController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
// //PostController
Route::get('/product/{id}', [ProductController::class, 'show']);


// Route::post('/post', [PostController::class, 'store']);

// Route::get('/posts/{id}', [PostController::class, 'show']);
// Route::get("/posts/edit/{id}", [PostController::class, 'edit']);
// Route::put("/posts/edit/{id}", [PostController::class, 'update']);

// Route::delete('/posts/{id}', [PostController::class, 'destroy']);

// Route::get('/home', function () {
  
//     return '<h1>Hello</h1>';
// });
