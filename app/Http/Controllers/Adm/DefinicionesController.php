<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Definicion;

class DefinicionesController extends Controller
{
    public function index()
    {
        $definiciones = Definicion::orderBy('orden', 'ASC')->paginate(10);
        return view('adm.definiciones.index')
            ->with('definiciones', $definiciones);
    }

    public function create()
    {
        return view('adm.definiciones.create');
    }

    public function store(Request $request)
    {
        $homes          = new Definicion();
        $homes->nombre      = $request->nombre;
        $homes->descripcion = $request->descripcion;
        $homes->orden   = $request->orden;
        $id              = Definicion::all()->max('id');
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/definiciones/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/definiciones/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/definiciones/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/definiciones/' . $id . '_' . $file->getClientOriginalName();
            }
        }
        $homes->save();

        return redirect()->route('definiciones.index');

    }

    public function edit($id)
    {
        $homes = Definicion::find($id);
        return view('adm.definiciones.edit')->with(compact('homes'));
    }

    public function update(Request $request, $id)
    {
        $homes              = Definicion::find($id);
        $homes->nombre      = $request->nombre;
        $homes->descripcion = $request->descripcion;
        $homes->orden   = $request->orden;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/definiciones/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/definiciones/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/definiciones/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/definiciones/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        $homes->update();

        return redirect()->route('definiciones.index', $homes->id);
    }
}
