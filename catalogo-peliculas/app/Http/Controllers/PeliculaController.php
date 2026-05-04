<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.index', compact('peliculas'));
    }

    public function buscarPorId($id)
    {
        $pelicula = Pelicula::find($id);

          if (!$pelicula) {
            return response()->json(['mensaje' => 'Película no encontrada'], 404);
        }

        return response()->json($pelicula);
    }

   public function buscarPorNombre($nombre)
    {
        $peliculas = Pelicula::where('nombre', 'LIKE', "%$nombre%")->get();

        if ($peliculas->isEmpty()) {
            return response()->json(['mensaje' => 'No se encontraron resultados'], 404);
        }

        return response()->json($peliculas);
    }
}