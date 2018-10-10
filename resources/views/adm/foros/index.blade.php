@extends('adm.layouts.frame')

@section('titulo', 'Editar foro')

@section('contenido')
<div class="container" style="width: 97%;">
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
                <th>
                    Correo electronico
                </th>
                <th>
                    Dirección
                </th>
                <th>
                	localidad
                </th>
                <th class="center">
                    Provincia
                </th>
                <th class="text-right">
                    Acciones
                </th>
            </thead>
            <tbody>
                @foreach($foros as $foro)
                <tr>
                    <td>
                        {!!$foro->correo!!}
                    </td>
                    <td>
                        {!!$foro->direccion!!}
                    </td>
                    <td>
                    	{!!$foro->localidad!!}
                     </td>
                    <td>
                        {!!$foro->provincia!!}
                    </td>
                    <td class="text-right">
                        <a href="{{ route('foros.edit',$foro->id)}}">
                            <i class="material-icons">
                                create
                            </i>
                        </a>
                        {!!Form::open(['class'=>'en-linea', 'route'=>['foros.destroy', $foro->id], 'method' => 'DELETE'])!!}
                        <button class="submit-button" onclick="return confirm_delete(this);" type="submit">
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
    </div>
</div>
</div>
<script src="{{ asset('js/eliminar.js') }}" type="text/javascript">
</script>
@endsection
