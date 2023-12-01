<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class marcaController extends Controller
{

        public function listadoMarcas(){
            $libros = DB::table('marca')
                        ->join('marca', '=', 'descripcion' )->get();
                        // select * from programa join facultad on facultad= codfacultad;
            return view('marca.marca', ['marca'=> $libros]);
        }
    
}
