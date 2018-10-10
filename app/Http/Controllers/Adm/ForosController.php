<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Foro;

class ForosController extends Controller
{
    //'nombre', 'direccion', 'localidad', 'provincia', 'telefono', 'logitud', 'latitud',
    public function index()
    {
        $foros  = foro::orderBy('nombre', 'ASC')->get();
        $foro_seccion ='active';
        $foro_edit = 'active';

        $foros = foro::orderBy('nombre', 'ASC')->get();
        return view('adm.foros.index', compact('foros', 'foro_edit', 'foro_seccion'));
    }

    public function create()
    {
        return view('adm.foros.create');
    }

    public function store(Request $request)
    {

        $foro            = new foro();
        $foro->nombre    = $request->nombre;
        $foro->pagina    = $request->pagina;
        $foro->direccion = $request->direccion;
        $foro->correo = $request->correo;
        $foro->localidad = $request->localidad;
        $foro->provincia = $request->provincia;
        $foro->telefono  = $request->telefono;
        $foro->lng   = $request->lng;
        $foro->lat   = $request->lat;

        $foro->save();
        return redirect()->route('foros.index');
    }

    public function edit($id)
    {
        $foro = foro::find($id);
        return view('adm.foros.edit', compact('foro'));
    }

    public function update(Request $request, $id)
    {
        $foro            = foro::find($id);
        $foro->nombre    = $request->nombre; 
        $foro->pagina    = $request->pagina;
        $foro->correo = $request->correo;
        $foro->direccion = $request->direccion;
        $foro->localidad = $request->localidad;
        $foro->provincia = $request->provincia;
        $foro->telefono  = $request->telefono;
        $foro->lng   = $request->lng;
        $foro->lat   = $request->lat;

        $foro->save();
        return redirect()->route('foros.index');
    }

    public function destroy($id)
    {
        $foro = foro::find($id);
        $foro->delete();
        return redirect()->route('foros.index');
    }
}
