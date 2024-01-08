<?php

namespace App\Http\Controllers;

use App\Models\ContactoForm;
use Illuminate\Support\Facades\DB;

class AñadirPerrosController extends Controller
{
    public function show()
    {

        $razas = DB::table('razas')->orderBy('nombre_raza')->get();
        $tamaños = DB::table('tamaños')->get();
        $colores = DB::table('colores_pelo')->orderBy('color_pelo')->get();

        return view('sections.añadirperro')
            ->with('razas', $razas)
            ->with('tamaños', $tamaños)
            ->with('colores', $colores);
    }
}
