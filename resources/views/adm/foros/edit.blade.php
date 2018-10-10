@extends('adm.layouts.frame')

@section('titulo', 'Editar foro')

@section('contenido')
<div class="container" style="width: 90%;">
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
        {!!Form::model($foro, ['route'=>['foros.update',$foro->id], 'method'=>'PUT', 'files' => true])!!}
        <div class="row">
            <div class="input-field col l6 s12">
                {!!Form::label('Correo electronico:')!!}
                        {!!Form::text('correo', null , ['class'=>'', 'required'])!!}
            </div>
            <div class="input-field col l6 s12">
                {!!Form::label('Localidad:')!!}
                        {!!Form::text('localidad', null , ['class'=>'', ''])!!}
            </div>
            <div class="input-field col l6 s12">
                {!!Form::label('Provincia:')!!}
                        {!!Form::text('provincia', null , ['class'=>'', ''])!!}
            </div>
            <div class="input-field col l6 s12">
                {!!Form::label('Direccion:')!!}
                        {!!Form::text('direccion', null , ['class'=>'', 'id'=>'direccion','required'])!!}
            </div>
            <div class="input-field col l6 s12">
                {!!Form::label('Latitud:')!!}
                        {!!Form::text('lat', null , ['class'=>'', 'required'])!!}
            </div>
            <div class="input-field col l6 s12">
                {!!Form::label('Logitud:')!!}
                        {!!Form::text('lng', null , ['class'=>'', 'required'])!!}
            </div>
        </div>
        <div class="col l12 s12 no-padding">
            <button class="btn-large waves-effect waves-light right" name="action" type="submit">
                Editar
                <i class="material-icons right">
                    send
                </i>
            </button>
        </div>
        {!!Form::close()!!}
    </div>
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