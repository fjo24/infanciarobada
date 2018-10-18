@extends('pages.templates.body')

@section('titulo', 'Biblioteca')

@section('contenido')
<link href="{{ asset('css/pages/novedades.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/pages/banner.css') }}" rel="stylesheet" type="text/css"/>
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
    <div class="row" style="margin-top: 8%;">
@foreach($novedades as $novedad)
<div class="row novedad">
    <div class="col l12 m12 s12">
        <div class="" style="padding: 1%;background-color: #F5F5F5;    border: 1px solid #C9C9C9;">
            <img class="imgnovedad responsive-img" src="{{ asset($novedad->imagen) }}" hspace="5" vspace="5" style="float: left;width: 250px;height: 250px;"/>
            <div class="titulonovedad">
                {!! $novedad->nombre !!}
            </div>
            <div class="descripcionnovedad">
                {!! $novedad->descripcion !!}
            </div>
            <br>
            <div class="flecha">
    <a href="{{ route('file-pdf', ['post' => $novedad->id])}}">
                    <img class="responsive-img" src="{{ asset("/img/descarga.png") }}"/>
                    <span class="ver">
                    DESCARGAR
                    </span>
                </a>
            </div>
        </div>
    </div>    
</div>
    <br>
@endforeach
            </div>
</div>

<script src="{{ asset('js/jquery.tinycarousel.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('js/slick.min.js') }}" type="text/javascript">
</script>
<script type="text/javascript">
</script>
@endsection

