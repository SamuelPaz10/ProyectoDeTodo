<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function mostrarEmpleados() {
        $empleados = Empleado::all();
        return view("components/empleadomostrar", compact("empleados"));
    }

    public function crearEmpleado(){
        return view("components/empleadoagregar");
    }

    public function guardarProducto(Request $request){
        $nuevoProducto = new Empleado();
        $nuevoProducto->descripcion = $request->descripcion;
        $nuevoProducto->precio = $request->precio;
        $nuevoProducto->stock = $request->stock;
        $nuevoProducto->pagaisv = $request->pagaisv;
        $nuevoProducto->save();

        return redirect("empleados/mostrar");
    }
}
