<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function Mostrar(){
        $categoria = Categoria::all();
        $productos = DB::table('productos')
        ->join('categorias', 'id_categoria', '=', 'categorias.id')
        ->where('productos.estado', 1)
        ->select('productos.*', 'categorias.categoria')
        ->get();
         return view('mostrar',compact('productos', 'categoria'));
    }
    public function filtrar(Request $request){
        $categoria = Categoria::all();
        $productos = DB::table('productos')
        ->join('categorias', 'id_categoria', '=', 'categorias.id')
        ->where('productos.estado', 1)
        ->where('categorias.id', '=', $request->datoFiltrado)
        ->select('productos.*', 'categorias.categoria')
        ->get();
         return view('mostrar',compact('productos', 'categoria'));
    }
    public function vender($id){
        $producto = Producto::find($id);
        if($producto){
            return view('venta', compact('producto'));
        }
        
    }
    public function Comprar($id){
        $adquirido = Producto::find($id);
        if($adquirido){
            
        }
    }
    
}
