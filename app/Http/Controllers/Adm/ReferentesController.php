<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Referente;
use App\Cargo;

class ReferentesController extends Controller
{
    public function index()
    {
        $referentes = Referente::orderBy('cargo_id', 'ASC')->get();
        return view('adm.referentes.index', compact('referentes'));
    }

    public function create()
    {
        $cargos = Cargo::orderBy('nombre', 'ASC')->pluck('nombre', 'id')->all();
        return view('adm.referentes.create', compact('cargos'));
    }

    public function store(Request $request)
    {

        $referente              = new Referente();
        $referente->nombre      = $request->nombre;
        $referente->cargo_id       = $request->cargo_id;
        $id                     = Referente::all()->max('id');
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/referente/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $referente->imagen = 'img/referente/' . $id . '_' . $file->getClientOriginalName();
            }
        }
        $referente->save();
        return redirect()->route('referentes.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cargos = Cargo::orderBy('nombre', 'ASC')->pluck('nombre', 'id')->all();
        $referente  = Referente::find($id);
        return view('adm.referentes.edit', compact('referente', 'referentes'));
    }

    public function update(Request $request, $id)
    {
        $referente = Referente::find($id);
        $referente->nombre = $request->nombre;
        $referente->cargo_id  = $request->cargo_id;

        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/referente/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $referente->imagen = 'img/referente/' . $id . '_' . $file->getClientOriginalName();
            }
        }
        $referente->save();
        return redirect()->route('referentes.index');
    }

    public function destroy($id)
    {
        $referente = Referente::find($id);
        $referente->delete();
        return redirect()->route('referentes.index');
    }
}
