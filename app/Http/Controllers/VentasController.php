<?php

namespace App\Http\Controllers;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentasController extends Controller
{
    public function index(){
        $vts = DB::table('ventas')
        ->join('productos', 'id_producto', '=', 'productos.id')
        ->select('ventas.*', 'productos.nombre')
        ->get();
         return view('ventas',compact('vts'));
    
    }
}
