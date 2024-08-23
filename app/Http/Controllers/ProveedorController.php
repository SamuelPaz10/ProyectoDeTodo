<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function mostrarProveedores() {
        $proveedores = Proveedor::all();
        return view("components/proveedormostrar", compact("proveedores"));
    }

    public function crearProveedor(){
        return view("components/proveedoragregar");
    }

    public function guardarProveedor(Request $request){
        $nuevoProveedor = new Proveedor();
        $nuevoProveedor->nombre = $request->nombre;
        $nuevoProveedor->fechaRegistro = $request->fechaRegistro;
        $nuevoProveedor->telefono = $request->telefono;
        $nuevoProveedor->correo = $request->correo;
        $nuevoProveedor->save();

        return redirect("proveedores/mostrar");
    }
}
