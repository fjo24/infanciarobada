@extends('pages.templates.body')

@section('titulo', 'Biblioteca')

@section('contenido')
<link href="{{ asset('css/pages/novedades.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/pages/banner.css') }}" rel="stylesheet">
<div class="seccion-banner" style="background: url(/{!! $banner->imagen !!});">
    <div class="btexto">
        <div class="tbanner">
            <i>
                {!! $banner->texto1 !!}
            </i>
        </div>
    </div>
</div>
            <div class="container" style="width: 80%">
@foreach($novedades as $novedad)
    <div class="row">   
        <div class="contnovedad col l12 m12 s12">
            <div class="col l4 m4 s12" style="padding-left: 0px;">
                <div class="imgnovedad"> 
                    <img class="responsive-img" src="{{ asset($novedad->imagen) }}"/>
                </div>
            </div>
            <div class="col l8 m8 s12" style="padding-left: 29px;">
                <div class="titulonovedad">
                    {!! $novedad->nombre !!}
                </div>
                <div class="descripcionnovedad">
                    {!! $novedad->descripcion !!}
                </div>
                <div class="flecha">
                    <a href="{{ route('eventoinfo', $novedad->id)}}">
                        <img class="responsive-img" src="{{ asset("/img/descarga.png") }}"/>
                        <span class="ver">
                        VER MÁS
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>    
@endforeach

<br><br><br><br><br><br><br><br><br><br>
            </div>
<script src="{{ asset('js/jquery.tinycarousel.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('js/slick.min.js') }}" type="text/javascript">
</script>
<script type="text/javascript">
</script>
@endsection

