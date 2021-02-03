<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class libros extends Controller
{
    //
    public function index(){
        return view('libros');
    }
    public function listado(){


        $editoriales = DB::table('editorial')->get();
        return view('listado', ['editoriales' => $editoriales]);


    }

}
