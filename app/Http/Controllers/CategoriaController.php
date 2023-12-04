<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        return view('categoria');
    }
    
    public function save(Request $request){
        $cat = new Categoria();
        $cat->categoria = $request->categoria;
        $cat->save();
        return back();
    }
}
