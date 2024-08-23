<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;



// Página principal
Route::get('/', function () {
    return view('components/index');
}) -> name('index');


// Rutas para ProductoController
Route::get('/productos/mostrar', [ProductoController::class, 'mostrarProductos']) ->name('mostrar.productos');

Route::get('/productos/agregar', [ProductoController::class, 'crearProducto']) ->name('crear.producto');

Route::post('/productos/agregar/guardar', [ProductoController::class, 'guardarProducto']) ->name('guardar.producto');


// Rutas para EmpleadoController
Route::get('/empleados/mostrar', [EmpleadoController::class, 'mostrarEmpleados']) ->name('mostrar.empleados');

Route::get('/empleados/agregar', [EmpleadoController::class, 'crearEmpleado']) ->name('crear.empleado');

Route::post('/empleados/agregar/guardar', [EmpleadoController::class, 'guardarEmpleado']) ->name('guardar.empleado');


// Rutas para EmpleadoController
Route::get('/proveedores/mostrar', [ProveedorController::class, 'mostrarProveedores']) ->name('mostrar.proveedores');

Route::get('/proveedores/agregar', [ProveedorController::class, 'crearProveedor']) ->name('crear.proveedor');

Route::post('/proveedores/agregar/guardar', [ProveedorController::class, 'guardarProveedor']) ->name('guardar.proveedor');