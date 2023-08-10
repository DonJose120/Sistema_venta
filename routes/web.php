<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FacturaController;
use App\http\Controllers\ProductController;
use App\Http\Controllers\ProveedorController;

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
Route::post('/products/delete/{product}', [ProductController::class, 'destroy'])
->name('products.delete');



//////////////////Department and City////////////////////

Route::get('/departments', [DepartmentController::class, 'index'])
->name('departments.index');

Route::get('/departments/create',[DepartmentController::class, 'create'])
->name('departments.create');

Route::post('/departments/create',[DepartmentController::class, 'store'])
->name('departments.create');

Route::get('/departments/edit/{department}',[DepartmentController::class, 'edit'])
->name('departments.edit');

Route::post('/departments/edit/{department}', [DepartmentController::class, 'update'])
->name('departments.edit');

Route::post('/departments/delete/{department}', [DepartmentController::class, 'destroy'])
->name('departments.delete');


Route::get('/cities', [CityController::class, 'index'])
->name('cities.index');

Route::get('/cities/create',[CityController::class, 'create'])
->name('cities.create');

Route::post('/cities/create', [CityController::class, 'store'])
->name('cities.create');

Route::get('/cities/edit/{city}',[CityController::class, 'edit'])
->name('cities.edit');

Route::post('/cities/edit/{city}', [CityController::class, 'update'])
->name('cities.edit');

Route::post('/cities/delete/{city}', [CityController::class, 'destroy'])
->name('cities.delete');

////////////////////Employee///////////////////////

Route::get('/employees', [EmployeeController::class, 'index'])
->name('employees.index');

Route::get('/employees/create',[EmployeeController::class, 'create'])
->name('employees.create');

Route::post('/employees/create', [EmployeeController::class, 'store'])
->name('employees.create');

Route::get('/employees/edit/{employee}',[EmployeeController::class, 'edit'])
->name('employees.edit');

Route::post('/employees/edit/{employee}', [EmployeeController::class, 'update'])
->name('employees.edit');

Route::post('/employees/delete/{employee}', [EmployeeController::class, 'destroy'])
->name('employees.delete');



////////////////////// Clientes ////////////////////////////


Route::get('/clientes', [ClienteController::class, 'index'])
->name('clientes.index');

Route::get('/clientes/create',[ClienteController::class, 'create'])
->name('clientes.create');

Route::post('/clientes/create', [ClienteController::class, 'store'])
->name('clientes.create');

Route::get('/clientes/edit/{cliente}',[ClienteController::class, 'edit'])
->name('clientes.edit');

Route::post('/clientes/edit/{cliente}', [ClienteController::class, 'update'])
->name('clientes.edit');

Route::post('/clientes/delete/{cliente}', [ClienteController::class, 'destroy'])
->name('clientes.delete');



//////////////////////// Proveedor ////////////////////////

Route::get('/proveedors', [ProveedorController::class, 'index'])
->name('proveedors.index');

Route::get('/proveedors/create',[ProveedorController::class, 'create'])
->name('proveedors.create');

Route::post('/proveedors/create', [ProveedorController::class, 'store'])
->name('proveedors.create');

Route::get('/proveedors/edit/{proveedor}',[ProveedorController::class, 'edit'])
->name('proveedors.edit');

Route::post('/proveedors/edit/{proveedor}', [ProveedorController::class, 'update'])
->name('proveedors.edit');

Route::post('/proveedors/delete/{proveedor}', [ProveedorController::class, 'destroy'])
->name('proveedors.delete');



//////////////////////// Factura ////////////////////////


Route::get('/facturas', [FacturaController::class, 'index'])
->name('facturas.index');

Route::get('/facturas/create',[FacturaController::class, 'create'])
->name('facturas.create');

Route::post('/facturas/create', [FacturaController::class, 'store'])
->name('facturas.create');

Route::get('/facturas/edit/{factura}',[FacturaController::class, 'edit'])
->name('facturas.edit');

Route::post('/facturas/edit/{factura}', [FacturaController::class, 'update'])
->name('facturas.edit');

Route::post('/facturas/delete/{factura}', [FacturaController::class, 'destroy'])
->name('facturas.delete');
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
