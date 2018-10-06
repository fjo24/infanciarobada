<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Biblioteca;

class BibliotecaController extends Controller
{

    public function index()
    {
        $bibliotecas = Biblioteca::orderBy('orden', 'ASC')->paginate(10);
        return view('adm.biblioteca.index')
            ->with('bibliotecas', $bibliotecas);
    }

    public function create()
    {
        return view('adm.biblioteca.create');
    }

    public function store(Request $request)
    {
        $homes          = new Biblioteca();
        $homes->nombre      = $request->nombre;
        $homes->descripcion = $request->descripcion;
        $homes->orden   = $request->orden;
        $id              = Biblioteca::all()->max('id');
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/biblioteca/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/biblioteca/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/biblioteca/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/biblioteca/' . $id . '_' . $file->getClientOriginalName();
            }
        }
        $homes->save();

        return redirect()->route('biblioteca.index');

    }

    public function edit($id)
    {
        $homes = Biblioteca::find($id);
        return view('adm.biblioteca.edit')->with(compact('homes'));
    }

    public function update(Request $request, $id)
    {
        $homes              = Biblioteca::find($id);
        $homes->nombre      = $request->nombre;
        $homes->descripcion = $request->descripcion;
        $homes->orden   = $request->orden;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/biblioteca/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/biblioteca/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/biblioteca/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/biblioteca/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        $homes->update();

        return redirect()->route('biblioteca.index', $homes->id);
    }
}
