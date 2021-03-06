@extends('adm.layouts.frame')

@section('titulo', 'Referentes')

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
        {!!Form::open(['route'=>'referentes.store', 'method'=>'POST', 'files' => true])!!}
        <div class="row">
            <div class="input-field col l6 s12">
                {!!Form::label('Nombre:')!!}
				{!!Form::text('nombre', null , ['class'=>'', 'required'])!!}
            </div>
        <div class="file-field input-field col l6 s12">
            {!! Form::select('cargo_id', $cargos, null, ['class' => 'form-control', 'placeholder' => 'Cargo', 'required']) !!}
        </div>
        </div>
        <div class="input-field col l6 s12">
                {!!Form::label('Orden:')!!}
                {!!Form::text('orden', null , ['class'=>'', 'required'])!!}
            </div>
        <div class="file-field input-field col l6 s12">
                <div class="btn">
                    <span>
                        Imagen 
                    </span>
                    {!! Form::file('imagen') !!}
                </div>
                <div class="file-path-wrapper">
                    {!! Form::text('imagen',null, ['class'=>'file-path']) !!}
                    {!!Form::label('Recomendado: 411px - 411px')!!}
                </div>
            </div>
            <div class="file-field input-field col l6 s12">
                <div class="btn">
                    <span>
                        Curriculum 
                    </span>
                    {!! Form::file('cv') !!}
                </div>
                <div class="file-path-wrapper">
                    {!! Form::text('cv',null, ['class'=>'file-path']) !!}
                    {!!Form::label('Recomendado: 411px - 411px')!!}
                </div>
            </div>
        <div class="col l12 s12 no-padding">
            <button class="boton btn-large right" name="action" type="submit">
                Crear
            </button>
        </div>
        {!!Form::close()!!}
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
$(document).ready(function(){
    $('select').formSelect();
  });

</script>
@endsection
