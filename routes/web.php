<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CatController;
use App\Models\Cat;
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
//read from data base
Route::get('/cats',                   [CatController::class , 'index'])->name('all');
Route::get('/cats/show/{id}',         [CatController::class , 'show'])->name('show');
//create and store in data base
Route::get('/cats/create',            [CatController::class , 'create'])->name('create');
Route::post('/cats/store',            [CatController::class , 'store'])->name('store');
// edit and update in data base
Route::get('/cats/edit/{id}',         [CatController::class , 'edit'])->name('edit');
Route::post('/cats/update/{id}',      [CatController::class , 'update'])->name('update');
// delet row from data base
Route::get('/cats/delete/{id}',       [CatController::class , 'delete'])->name('delete');

Route::get('/cats/latest/{num}',      [CatController::class , 'latest'])->name('latest');

Route::get('cats/search',             [CatController::class , 'search'])->name('search');
//routes Book
Route::get('/books' ,                 [BookController::class , 'index'])->name('allBook');
Route::get('/books/show/{id}',        [BookController::class , 'show'])->name('showBook');
//create and store in data base
Route::get('/books/create',           [BookController::class , 'create'])->name('createBook');
Route::post('/books/store',           [BookController::class , 'store'])->name('storeBook');










// Route::get('test' , function(){
// //select * from cats
// //  $cats = Cat::all();

// //select * from cats where id >= 3 and name !=history   ""dont forget get method when we use where""
// // $cats = Cat::where('id' , '>=' , 3)->where('name','<>' , 'history')->get;
// //select * from cats where id>3 order by id DESC limit 2
// // $cats = Cat::where('id' , '>=' ,3)->orderBy('id' , 'DESC')->take(2)->get();
// // $res = Cat::where('name' , '<>' ,'history')->count('id');
// // dd($res);
// $cat = Cat::orderBy('id','desc')->first();
// dd($cat);
// // foreach($cats as $cat)
// // {
// //     echo "$cat->id - $cat->name";
// //     echo '<br>';
// // }
// });
