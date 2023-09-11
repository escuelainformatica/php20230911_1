<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function formularioGET() {
        $producto=new Producto();
        return view('paginas.formulario',['producto'=>$producto]);
    }
    public function formularioPOST(Request $request ) { //$_GET,$_POST, $_SERVER        
        $producto=new Producto($request->all());
        return view('paginas.formulario',['producto'=>$producto]);
    }
}
