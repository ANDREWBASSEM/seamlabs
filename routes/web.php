<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MenuController;
use App\Models\Menu;

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
    return view('index');
})->name("homePage");

Route::get('book', function () {
    return view('book');
})->name("bookPage");

Route::get('contact', function () {
    return view('contact');
})->name("contactPage");

Route::get('admin', function () {
    $rows = Menu::all();
   return view('admin/M_index',compact('rows'));
});




Route::get('menu', [FoodController::class,"getMenu"]) -> name("menuPage");

Route::resource('menus', MenuController::class);

// Route::get('menu', function () {
//     return view('menu');
// })->name("menuPage");
    