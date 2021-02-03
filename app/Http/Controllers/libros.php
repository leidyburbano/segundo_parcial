<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class libros extends Controller
{
    //
    public function index(){
        return view('libros');
    }
    public function listado(){
        return view('listado');
    }

}
