<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class examenController extends Controller
{
    public function crearGrafico(){
        $data2020 = array(12,23,5,9,7,10,4,9,14,10,3,6);
        $data2021 = array(10,5,21,8,7,11,6,5,12,9,3,2);
        $labels = array('ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE');

        return view('grafico')->with('data2020', $data2020)
        ->with('labels', $labels)
        ->with('data2021', $data2021);
        
    }
}
