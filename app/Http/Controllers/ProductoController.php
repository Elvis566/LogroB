<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $cat = Categoria::all();
        return view('productos', compact('cat'));
    }
    public function save(Request $request){
       
        $producto = new Producto();
        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->stock=$request->cantidad;
        $producto->fechaVencimiento = $request->fecha;
        $producto->id_categoria=$request->categoria;
        $producto->estado=true;
        $producto->save();
        return back();
        
    }
}
