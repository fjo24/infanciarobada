<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contenido_red;

class ContenidoRedController extends Controller
{
    public function create()
    {
        $homes = Contenido_red::all()->first();
        return redirect()->route('contenido_red.edit', $homes->id);
    }

    public function edit($id)
    {
        $homes = Contenido_red::find($id);
        return view('adm.contenido_red.edit')->with(compact('homes'));
    }

    public function update(Request $request, $id)
    {
        $homes              = Contenido_red::find($id);
        $homes->nombre      = $request->nombre;
        $homes->descripcion = $request->descripcion;
        $homes->contenido   = $request->contenido;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/contenido_red/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/contenido_red/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/contenido_red/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/contenido_red/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        $homes->update();

        return redirect()->route('contenido_red.edit', $homes->id);
    }
}
