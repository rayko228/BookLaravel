<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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



Route::get('/book', function () {
    $books = DB::table('books')->get();
    return view('book',compact('books'));
})->name('book-list');


Route::get('/book/create', function () {
    $libraries = DB::table('libraries')->get();
    return view('bookCreate',compact('libraries'));
})->name('book-create');;
//Route::get('/Book/change', function () {
//    return view('Book.change');
//});
//Route::get('/Book/delete', function () {
//    $books = DB::table('books')->get();
//    return view('bookDelete',compact('books'));
//});
Route::get('/library/create', function () {
    return view('libraryCreate');
})->name('library-create');
//Route::get('/company/change', function () {
//    return view('company.change');
//});
//Route::get('/company/delete', function () {
//    $libraries = DB::table('libraries')->get();
//    return view('companyDelete',compact('libraries'));
//});

Route::get('/library', function () {
    $libraries = DB::table('libraries')->get();
    return view('libraries',compact('libraries'));
})->name('company-list');
Route::post('/library/delete/submit',[BookController::class, 'delete'])->name('library-delete-form');
Route::post('/library/change/submit',[BookController::class, 'change'])->name('library-change-form');
Route::post('/library/create/submit',[BookController::class, 'create'])->name('library-form');
Route::post('/book/delete/submit',[BookController::class, 'deleteBook'])->name('book-delete-form');
Route::post('/book/change/submit',[BookController::class, 'createchange'])->name('book-change-form');
Route::post('/book/create/submit',[BookController::class, 'createBook'])->name('book-form');
Route::get('/', function () {
    return view('welcome');
});
