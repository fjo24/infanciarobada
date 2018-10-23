<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;
use App\Imgnoticia;

class NoticiasController extends Controller
{
    public function index()
    {
        $noticias = Noticia::orderBy('orden', 'ASC')->paginate(10);
        return view('adm.noticias.index')
            ->with('noticias', $noticias);
    }

    public function create()
    {
        return view('adm.noticias.create');
    }

    public function store(Request $request)
    {
        $homes          = new noticia();
        $homes->nombre      = $request->nombre;
        $homes->descripcion = $request->descripcion;
        $homes->contenido = $request->contenido;
        $homes->orden   = $request->orden;
        $homes->fecha  = $request->fecha;
        $id              = noticia::all()->max('id');
        $id++;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/noticia/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/noticia/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/noticia/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/noticia/' . $id . '_' . $file->getClientOriginalName();
            }
        }
        $homes->save();

        return redirect()->route('noticias.index');

    }

    public function edit($id)
    {
        $homes = noticia::find($id);
        return view('adm.noticias.edit')->with(compact('homes'));
    }

    public function update(Request $request, $id)
    {
        $homes              = noticia::find($id);
        $homes->nombre      = $request->nombre;
        $homes->descripcion = $request->descripcion;
        $homes->contenido = $request->contenido;
        $homes->orden   = $request->orden;
        $homes->fecha  = $request->fecha;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('img/noticia/');
                $request->file('imagen')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->imagen = 'img/noticia/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        if ($request->hasFile('pdf')) {
            if ($request->file('pdf')->isValid()) {
                $file = $request->file('pdf');
                $path = public_path('img/noticia/');
                $request->file('pdf')->move($path, $id . '_' . $file->getClientOriginalName());
                $homes->pdf = 'img/noticia/' . $id . '_' . $file->getClientOriginalName();
            }
        }

        $homes->update();

        return redirect()->route('noticias.index', $homes->id);
    }

    public function destroy($id)
    {
        $noticia = Noticia::find($id);
        $noticia->delete();
        return redirect()->route('noticias.index');
    }

    //admin de imagenes
    public function imagenes($id)
    {
        $imagenes = Imgnoticia::orderBy('id', 'ASC')->Where('noticia_id', $id)->get();
        $noticia = Noticia::find($id);
        return view('adm.noticias.imagenes')->with(compact('imagenes', 'noticia'));
    }

    public function nuevaimagen(Request $request, $id)
    {
        if ($request->HasFile('file')) {
            foreach ($request->file as $file) {
                $filename = $file->getClientOriginalName();
                $path     = public_path('img/noticia/');
                $file->move($path, $id . '_' . $file->getClientOriginalName());
                $imagen              = new Imgnoticia;
                $imagen->imagen   = 'img/noticia/' . $id . '_' . $file->getClientOriginalName();
                $imagen->noticia_id = $id;
                $imagen->save();
            }
        }
        $imagenes = Imgnoticia::orderBy('id', 'ASC')->Where('noticia_id', $id)->get();

        $noticia = Noticia::find($id);
        return view('adm.noticias.imagenes')->with(compact('imagenes', 'noticia'));
    }

    public function destroyimg($id)
    {
        $imagen = Imgnoticia::find($id);
        $idpro  = $imagen->noticia_id;
        $imagen->delete();
        $imagenes = Imgnoticia::orderBy('id', 'ASC')->Where('noticia_id', $idpro)->get();

        $noticia = Noticia::find($idpro);
        return view('adm.noticias.imagenes')->with(compact('imagenes', 'noticia'));
    }
}
