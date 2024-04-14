<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class TalleresController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $talleres = [];
        return view('talleres')->with('talleres', $talleres);
    }

    public function buscar(Request $request)
    {
        $usuario = auth()->user();
        $talleres = DB::table('talleres_mecanicos as t')
            ->join('municipios as m', 'm.id', 't.municipios_id')
            ->join('estados as e', 'e.id', 'm.estados_id')
            ->select('t.id', 't.nombre', 't.telefono', 't.correo', 't.direccion', DB::raw("CONCAT(m.nombre, ' ', e.nombre) as ubicacion"))
            ->where(DB::raw("CONCAT(m.nombre, e.nombre)"), 'like', "%$request->nombre%")
            ->orwhere(DB::raw("CONCAT(m.nombre, ' ', e.nombre)"), 'like', "%$request->nombre%")
            ->get();
        return view('talleres')->with('talleres', $talleres)->with('usuario', $usuario);
    }
}
