<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function store(){
       return view('catalogo');
    }

    public function searchProduct(Request $request){
        $respond=Producto::select('id','nombreProducto','nombreImage')
        ->where('nombreProducto','LIKE',"%$request->nombreProducto%")
        ->get();
        return response(json_encode($respond),200)->header('Content-type','text/plain');
        
    }

    public function home(){
        $obj=New Producto();
        $lowPrecio=$obj->productosLowPrecio();
        $lastDate=$obj->productosLastdate();
       return view('welcome',compact('lastDate','lowPrecio'));
    }

    public function show($id){
        $producto=Producto::find($id);
        
        return view('productoShow', compact('producto'));
    }
}
