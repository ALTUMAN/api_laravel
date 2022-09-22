<?php

namespace App\Http\Controllers;

use App\Http\Kernel;
use Illuminate\Http\Request;
use App\Models\Articulo;

class SkyCopController extends kernel
{
    public function getdata(){
        return response()->json (articulo::all ());
    }
}
