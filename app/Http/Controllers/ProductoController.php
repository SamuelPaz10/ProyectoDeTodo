<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    
    public function mostrarProductos() {
        $productos = Producto::all();
        return view("components/productomostrar", compact("productos"));
    }

    public function crearProducto(){
        return view("components/productoagregar");
    }

    public function guardarProducto(Request $request){
        $nuevoProducto = new Producto();
        $nuevoProducto->descripcion = $request->descripcion;
        $nuevoProducto->precio = $request->precio;
        $nuevoProducto->stock = $request->stock;
        $nuevoProducto->pagaisv = $request->pagaisv;
        $nuevoProducto->save();

        return redirect("productos/mostrar");
    }
}
