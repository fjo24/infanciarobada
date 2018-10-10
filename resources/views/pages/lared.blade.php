@extends('pages.templates.body')
@section('title', 'La Red')
@section('css')
<link href="{{ asset('css/pages/slider.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/empresa.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/banner.css') }}" rel="stylesheet">
@endsection
@section('contenido')
<div class="seccion-banner" style="background: url(/{!! $banner->imagen !!});">
    <div class="btexto">
        <div class="tbanner">
            <i>
                {!! $banner->texto1 !!}
            </i>
        </div>
    </div>
</div>
    <div class="container" style="width: 90%">
        <div class="row toptab">
            <div class="col s12 m7 l7">
                <div class="nombre_empresa">
                    {!! $lared->nombre !!}
                </div>
                <hr class="linea_titulo">
                    <div class="descripcion_empresa">
                        <i>
                            {!! $lared->descripcion !!}
                        </i>
                    </div>
                </hr>
                <div class="contenido_empresa">
                            {!! $lared->contenido !!}
                    </div>
            </div>
            <div class="col s12 m5 l5" style="">
                <div class="responsive-img imagen_lared">
                    <img src="{{asset($lared->imagen)}}"/>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
