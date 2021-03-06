@extends('adm.layouts.frame')

@section('titulo', 'Listado noticias')

@section('contenido')
	    @if(count($errors) > 0)
<div class="col s12 card-panel red lighten-4 red-text text-darken-4">
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {!!$error!!}
        </li>
        @endforeach
    </ul>
</div>
@endif
		@if(session('success'))
<div class="col s12 card-panel green lighten-4 green-text text-darken-4">
    {{ session('success') }}
</div>
@endif
<div class="row">
    <div class="col s12">
        <table class="highlight bordered">
            <thead>
                <td>
                    nombre
                </td>
                <td>
                    orden
                </td>
                <th class="center">
                    Administrar imagenes
                </th>
                <td class="text-right">
                    Acciones
                </td>
            </thead>
            <tbody>
                @foreach($noticias as $noticia)
                <tr>
                    <td>
                        {{ $noticia->nombre }}
                    </td>
                    <td>
                        {{ $noticia->orden }}
                    </td>
                    <td class="center"><a href="{{ route('imgnoticias.lista', $noticia->id)}}"><i class="material-icons">image</i></a></td>
                    <td class="text-right">
                        <a href="{{ route('noticias.edit', $noticia->id) }}">
                            <i class="material-icons">
                                create
                            </i>
                        </a>
                        {!!Form::open(['class'=>'en-linea', 'route'=>['noticias.destroy', $noticia->id], 'method' => 'DELETE'])!!}
                        <button class="submit-button" onclick="return confirm('¿Realmente deseas borrar noticia?')" type="submit">
                            <i class="material-icons red-text">
                                cancel
                            </i>
                        </button>
                        {!!Form::close()!!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="{{ route('noticias.create') }}">
            <div class="col l12 s12 no-padding" href="">
                <button class="boton btn-large right" name="action" type="submit">
                    Nuevo
                </button>
            </div>
        </a>
    </div>
</div>
@endsection
