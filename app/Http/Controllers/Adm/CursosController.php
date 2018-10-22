<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursosController extends Controller
{
    public function create()
    {
        $homes = Curso::all()->first();
        return redirect()->route('contenido_curso.edit', $homes->id);
    }

    public function edit($id)
    {
        $homes = Curso::find($id);
        return view('adm.contenido_curso.edit')->with(compact('homes'));
    }

    public function update(Request $request, $id)
    {
        $homes              = Curso::find($id);
        $homes->nombre      = $request->nombre;
        $homes->link      = $request->link;
        $homes->descripcion = $request->descripcion;
        $homes->contenido   = $request->contenido;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/contenido_curso/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/contenido_curso/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/contenido_curso/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/contenido_curso/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        $homes->update();

        return redirect()->route('contenido_curso.edit', $homes->id);
    }
}
