<?php

namespace App\Http\Controllers;

use App\Models\Perro;
use App\Models\PerroColor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AñadirPerrosController extends Controller
{
    public function create()
    {

        $razas = DB::table('razas')->orderBy('nombre_raza')->get();
        $tamanos = DB::table('tamaños')->get();
        $colores = DB::table('colores_pelo')->orderBy('color_pelo')->get();

        return view('sections.añadirperro')
            ->with('razas', $razas)
            ->with('tamanos', $tamanos)
            ->with('colores', $colores);
    }

    public function store(Request $request){
/*
        $validated = $request->validate([
            'nombre' => 'required|min:3|max:30',
            'foto' => '',
            'raza' => 'required',
            'tamanos' => 'required',
            'colores' => 'required|array',
        ]);
*/
        $file = $request->file('foto_perro');
        $filename = $file->getClientOriginalName();
        $path = $request->file('foto_perro')->storeAs('perros/', $filename);

        $perro = new Perro;
        $perro->nombre = $request->nombre;
        $perro->img = $filename;
        $perro->raza_id = $request->raza;
        $perro->tamaño_id = $request->tamanos;
        $perro->save();

        foreach($request->colores as $c){
            //Este codigo produce un error al instentar insertar los datos en la tabla, intenta insertar unos timestamps que no se de donde saca por eso pongo este codigo
            $perro_color = new PerroColor;
            $perro_color->perro_id = $perro->id;
            $perro_color->color_id = $c;
            $perro_color->timestamps=false;
            $perro_color->save();
        }

        $ruta = Storage::get('bichon-maltes.jpg');

        dd($ruta);

        //$respuesta = ['nombre' => $request->nombre, 'img' => $ruta];

        //return response()->json ($respuesta);

    }
}
