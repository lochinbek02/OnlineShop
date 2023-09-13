<?php

use App\Http\Controllers\MainController;
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

Route::get('/post',[MainController::class,'index'])->name('post');
Route::get('/product',[MainController::class,"product"])->name('product');

//Add Product
Route::get('/Clothes',[MainController::class,'Clothes'])->name('clothes');
Route::post('/addClothes',[MainController::class,'AddClothes'])->name('add.clothes');
Route::get('/Phone',[MainController::class,'Phones'])->name('phone');
Route::post('/addPhone',[MainController::class,'AddPhone'])->name('add.phone');
Route::get('/Laptop',[MainController::class,'Laptops'])->name('laptop');
Route::post('/addLaptop',[MainController::class,'AddLaptop'])->name('add.laptop');

Route::get('/ViewClothes',[MainController::class,'ViewClothes'])->name('Views.Clothes');
Route::get('/ViewPhones',[MainController::class,'ViewPhones'])->name('Views.Phones');
Route::get('/ViewLaptops',[MainController::class,'ViewLaptops'])->name('Views.Laptops');


//
Route::get('/about/{id}',[MainController::class,'about'])->name('about.product');
Route::get('/aboutClothes/{id}',[MainController::class,'aboutClothes'])->name('about.clothes');
Route::get('/aboutPhones/{id}',[MainController::class,'aboutPhones'])->name('about.phones');
Route::get('/aboutLaptops/{id}',[MainController::class,'aboutLaptops'])->name('about.laptops');

//
Route::get('/buy/{id}',[MainController::class,'buy'])->name('buy');
Route::post('/personRegistr/{id}',[MainController::class,'PersonRegistr'])->name('person.registr');
Route::get('/people',[MainController::class,'people'])->name('people');


Route::get('/xaqida',[MainController::class,'xaqida'])->name('xaqida');
Route::post('/product/create',[MainController::class,"ProductCreate"])->name('product.create');
