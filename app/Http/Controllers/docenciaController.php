<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class docenciaController extends Controller
{
    public function profesores_show(){
        $profesores = Professor::all();
        return view('docencia/profesores', compact('profesores'));
    }
}
