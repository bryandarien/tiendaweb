<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function productosLowPrecio(){
        $lowPrecio=Producto::orderBy('precio', 'desc')->limit(4)->get();
        return $lowPrecio;
    }
    public function productosLastdate(){
        $lastDate=Producto::orderBy('created_at', 'asc')->limit(4)->get();
        return $lastDate;
    }
}
