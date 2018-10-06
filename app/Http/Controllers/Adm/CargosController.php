<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cargo;

class CargosController extends Controller
{
    public function index()
    {
        $cargos = Cargo::orderBy('cargo_id', 'ASC')->get();
        return view('adm.cargos.index', compact('cargos'));
    }

    public function create()
    {
        return view('adm.cargos.create');
    }

    public function store(Request $request)
    {
        $cargo              = new Cargo();
        $cargo->nombre      = $request->nombre;
        $cargo->descripcion       = $request->descripcion;
        $cargo->save();
        return redirect()->route('cargos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cargo  = Cargo::find($id);
        return view('adm.cargos.edit', compact('cargo'));
    }

    public function update(Request $request, $id)
    {
        $cargo = Cargo::find($id);
        $cargo->nombre      = $request->nombre;
        $cargo->descripcion       = $request->descripcion;
        $cargo->save();
        return redirect()->route('cargos.index');
    }

    public function destroy($id)
    {
        $cargo = Cargo::find($id);
        $cargo->delete();
        return redirect()->route('cargos.index');
    }
}
