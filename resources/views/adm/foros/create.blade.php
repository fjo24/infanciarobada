@extends('adm.layouts.frame')

@section('titulo', 'Crear foro')

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
        {!!Form::open(['route'=>'foros.store', 'method'=>'POST', 'files' => true])!!}
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
                Crear
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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA63i-XcQl_muMFwA098edDlL_OrnXoWcs&libraries=geometry,places"> </script>
<script type="text/javascript">
window.onload = function()
    {
        googleAutocompleteInstance = new google.maps.places.Autocomplete($('#direccion')[0], {
            types: ['geocode'],
            componentRestrictions: {
                country: 'AR'
            }
        });
    };

    $('#coordenadas').click(function(event) {
        var code = new google.maps.Geocoder();
        var direccion = $('#direccion').val();
        code.geocode({ 'address': direccion}, resultado);
        function resultado(results, status)
        {
            // Verificamos el estatus
            if (status == 'OK') {
                $('#coordenada2').val(results[0].geometry.location.lng())
                $('#coordenada1').val(results[0].geometry.location.lat());
            }
        }
    });

$(document).ready(function(){
    $('select').formSelect();
  });

</script>
@endsection
