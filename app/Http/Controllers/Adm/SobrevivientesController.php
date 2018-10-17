<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sobreviviente;

class SobrevivientesController extends Controller
{
    public function index()
    {
        $sobrevivientes = Sobreviviente::orderBy('orden', 'ASC')->paginate(10);
        return view('adm.sobrevivientes.index')
            ->with('sobrevivientes', $sobrevivientes);
    }

    public function create()
    {
        return view('adm.sobrevivientes.create');
    }

    public function store(Request $request)
    {
        $homes          = new Sobreviviente();
        $homes->nombre      = $request->nombre;
        $homes->descripcion = $request->descripcion;
        $homes->contenido = $request->contenido;
        $homes->orden   = $request->orden;
        $id              = Sobreviviente::all()->max('id');
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/sobreviviente/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/sobreviviente/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/sobreviviente/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/sobreviviente/' . $id . '_' . $file->getClientOriginalName();
            }
        }
        $homes->save();

        return redirect()->route('sobrevivientes.index');

    }

    public function edit($id)
    {
        $homes = Sobreviviente::find($id);
        return view('adm.sobrevivientes.edit')->with(compact('homes'));
    }

    public function update(Request $request, $id)
    {
        $homes              = Sobreviviente::find($id);
        $homes->nombre      = $request->nombre;
        $homes->descripcion = $request->descripcion;
        $homes->contenido = $request->contenido;
        $homes->orden   = $request->orden;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/sobreviviente/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/sobreviviente/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/sobreviviente/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/sobreviviente/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        $homes->update();

        return redirect()->route('sobrevivientes.index', $homes->id);
    }

}
