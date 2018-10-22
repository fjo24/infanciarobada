<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Seminario;

class SeminariosController extends Controller
{
    public function index()
    {
        $seminarios = Seminario::orderBy('orden', 'ASC')->paginate(10);
        return view('adm.seminarios.index')
            ->with('seminarios', $seminarios);
    }

    public function create()
    {
        return view('adm.seminarios.create');
    }

    public function store(Request $request)
    {
        $homes          = new Seminario();
        $homes->nombre      = $request->nombre;
        $homes->descripcion = $request->descripcion;
        $homes->contenido = $request->contenido;
        $homes->orden   = $request->orden;
        $id              = Seminario::all()->max('id');
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/seminarios/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/seminarios/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/seminarios/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/seminarios/' . $id . '_' . $file->getClientOriginalName();
            }
        }
        $homes->save();

        return redirect()->route('seminarios.index');

    }

    public function edit($id)
    {
        $homes = Seminario::find($id);
        return view('adm.seminarios.edit')->with(compact('homes'));
    }

    public function update(Request $request, $id)
    {
        $homes              = Seminario::find($id);
        $homes->nombre      = $request->nombre;
        $homes->descripcion = $request->descripcion;
        $homes->contenido = $request->contenido;
        $homes->orden   = $request->orden;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/seminarios/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/seminarios/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/seminarios/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/seminarios/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        $homes->update();

        return redirect()->route('seminarios.index', $homes->id);
    }

    public function destroy($id)
    {
        $seminario = Seminario::find($id);
        $seminario->delete();
        return redirect()->route('seminarios.index');
    }
}
