<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mision;

class MisionController extends Controller
{
    public function create()
    {
        $homes = Mision::all()->first();
        return redirect()->route('mision.edit', $homes->id);
    }

    public function edit($id)
    {
        $homes = Mision::find($id);
        return view('adm.mision.edit')->with(compact('homes'));
    }

    public function update(Request $request, $id)
    {
        $homes              = Mision::find($id);
        $homes->nombre      = $request->nombre;
        $homes->descripcion = $request->descripcion;
        $homes->contenido   = $request->contenido;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/mision/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/mision/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/mision/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/mision/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        $homes->update();

        return redirect()->route('mision.edit', $homes->id);
    }
}
