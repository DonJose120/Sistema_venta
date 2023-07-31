<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\http\Controllers\CategoryController;
use App\http\Controllers\ProductController;



Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//Muestra una tabla con todas las categorias
Route::get('/categories', [CategoryController::class, 'index'])
->name('categories.index');

//Muestra un formulario para crear una categoria
Route::get('/categories/create',[CategoryController::class, 'create'])
->name('categories.create');

//Recibe los datos del formulario para crear una categoria
Route::post('/categories/create',[CategoryController::class, 'store'])
->name('categories.create');

//Muesta un formulario para editar una categoria
Route::get('/categories/edit/{category}',[CategoryController::class, 'edit'])
->name('categories.edit');

//Recibe los datos del formulario para editar una categoria
Route::post('/categories/edit/{category}', [CategoryController::class, 'update'])
->name('categories.edit');

//Eliminar una categoria por el id
Route::post('/categories/delete/{category}', [CategoryController::class, 'destroy'])
->name('categories.delete');

//Muestra una tabla con todos los productos
Route::get('/products', [ProductController::class, 'index'])
->name('products.index');

//Muestra un formulario para crear un producto
Route::get('/products/create',[ProductController::class, 'create'])
->name('products.create');

//Recibe los datos del fomulario para crear un producto
Route::post('/products/create', [ProductController::class, 'store'])
->name('products.create');

//Muestra un fomulario para editar un producto
Route::get('/products/edit/{product}',[ProductController::class, 'edit'])
->name('products.edit');

//Recibe los datos del fomulario para editar un producto
Route::post('/products/edit/{product}', [ProductController::class, 'update'])
->name('products.edit');

//Eliminar un producto por el id
Route::post('/products/delete/{product}', [ProductController::class, 'destoy'])
->name('products.delete');


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
