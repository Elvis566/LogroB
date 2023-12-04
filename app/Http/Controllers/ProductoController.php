<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\alert;

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
    public function eliminar($id){
        $producto = Producto::find($id);
        if($producto){
            $producto->estado = false;
            $producto->save();
            return back();
        }

    }
    public function Comprar(Request $request, $id){
        $adquirido = Producto::find($id);
        $venta = new Venta();
        if($adquirido){
            if($adquirido->stock < $request->cantidadCompra){
               alert( 'No puede realizar esta compra, supero el stock de la tienda');
               return redirect('mostrar');
            }else{
                // dd($request->all());
                $adquirido->stock = $adquirido->stock - $request->cantidadCompra;
                $adquirido->save();
                $venta->precioTotal = $adquirido->precio * $request->cantidadCompra;
                $venta->fecha = $request->fechac;
                $venta->id_producto = $id;
                $venta->save();
                return redirect('mostrar');
            }
        }
    }
    
}
