<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerrosController extends Controller
{
    public function show()
    {

        $table_info = DB::table('perros')->select('perros.id', 'perros.nombre', 'perros.img', 'razas.nombre_raza', 'tamaños.tamaño')
            ->join('razas', 'perros.raza_id', 'perros.raza_id')
            ->join('tamaños', 'perros.tamaño_id', 'tamaños.id')
            ->get();




        foreach ($table_info as $row){
            $colores = DB::table('perros_colores')->select('color_id')->where('perros_colores.color_id', $row->id)->get();
            $table_info->colores = $colores;
            //$colores_count = DB::table('perros_colores.perro_id')->where('perros_colores.color_id', $row->id)->count();
        }

        return view('sections.vistaperros')->with('perros_todos', $table_info);
    }
}
