<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;
use App\Imgevento;

class EventosController extends Controller
{
    public function index()
    {
        $eventos = Evento::orderBy('orden', 'ASC')->paginate(10);
        return view('adm.eventos.index')
            ->with('eventos', $eventos);
    }

    public function create()
    {
        return view('adm.eventos.create');
    }

    public function store(Request $request)
    {
        $homes          = new Evento();
        $homes->nombre      = $request->nombre;
        $homes->descripcion = $request->descripcion;
        $homes->contenido = $request->contenido;
        $homes->orden   = $request->orden;
        $id              = Evento::all()->max('id');
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/Evento/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/Evento/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/Evento/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/Evento/' . $id . '_' . $file->getClientOriginalName();
            }
        }
        $homes->save();

        return redirect()->route('eventos.index');

    }

    public function edit($id)
    {
        $homes = Evento::find($id);
        return view('adm.eventos.edit')->with(compact('homes'));
    }

    public function update(Request $request, $id)
    {
        $homes              = Evento::find($id);
        $homes->nombre      = $request->nombre;
        $homes->descripcion = $request->descripcion;
        $homes->contenido = $request->contenido;
        $homes->orden   = $request->orden;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/Evento/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/Evento/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/Evento/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/Evento/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        $homes->update();

        return redirect()->route('eventos.index', $homes->id);
    }

    public function destroy($id)
    {
        $evento = Evento::find($id);
        $evento->delete();
        return redirect()->route('eventos.index');
    }

    //admin de imagenes
    public function imagenes($id)
    {
        $imagenes = Imgevento::orderBy('id', 'ASC')->Where('evento_id', $id)->get();
        $evento = Evento::find($id);
        return view('adm.eventos.imagenes')->with(compact('imagenes', 'evento'));
    }

    public function nuevaimagen(Request $request, $id)
    {
        if ($request->HasFile('file')) {
            foreach ($request->file as $file) {
                $filename = $file->getClientOriginalName();
                $path     = public_path('img/evento/');
                $file->move($path, $id . '_' . $file->getClientOriginalName());
                $imagen              = new Imgevento;
                $imagen->imagen   = 'img/evento/' . $id . '_' . $file->getClientOriginalName();
                $imagen->evento_id = $id;
                $imagen->save();
            }
        }
        $imagenes = Imgevento::orderBy('id', 'ASC')->Where('evento_id', $id)->get();

        $evento = evento::find($id);
        return view('adm.eventos.imagenes')->with(compact('imagenes', 'evento'));
    }

    public function destroyimg($id)
    {
        $imagen = Imgevento::find($id);
        $idpro  = $imagen->evento_id;
        $imagen->delete();
        $imagenes = Imgevento::orderBy('id', 'ASC')->Where('evento_id', $idpro)->get();

        $evento = evento::find($idpro);
        return view('adm.eventos.imagenes')->with(compact('imagenes', 'evento'));
    }

}
