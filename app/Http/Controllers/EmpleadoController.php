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

    public function guardarEmpleado(Request $request){
        $nuevoEmpleado = new Empleado();
        $nuevoEmpleado->nombre = $request->nombre;
        $nuevoEmpleado->apellido = $request->apellido;
        $nuevoEmpleado->fechaIngreso = $request->fechaingreso;
        $nuevoEmpleado->salario = $request->salario;
        $nuevoEmpleado->save();

        return redirect("empleados/mostrar");
    }
}
