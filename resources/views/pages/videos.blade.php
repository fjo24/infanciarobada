@extends('pages.templates.body')
@section('title', 'Videos')
@section('css')
<link href="{{ asset('css/pages/videos.css') }}" rel="stylesheet"/>
@endsection
@section('contenido')
<div class="container" style="width: 85%;">
    <div class="row bloquecont center">
        <div class="row" style= "margin-bottom: 5px;padding-top: 6%;">
  <div class="col l12" style="text-align: left;">
  <h6 style="font-family: 'Titillium Web'; color:#D8212A;font-size: 22px;"></h6>
  <h4 style="font-family: 'Titillium Web'; color:#D8212A; margin-top: 0px;font-size: 38px;"><b>NUESTROS VIDEOS</b></h4>  
  </div>
</div>
        <div class="bloquecard col l12 s12 m12">
                    @foreach($videos as $video)
                    <div class="col l4 s12 m6">
                        <div class="card white darken-1" style="">
                            <div class="card-content white-text">
                                <div class="center masproducto hide-on-med-and-down col l12 m12 s12" style="">
                                    <iframe style="position: relative;right: 12.6%;z-index: 1;width: 125%;" width="364" height="245" src="{{$video->video}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>            
                                </div>
                            </div>
                            <div class="card-action" style="height: 29%;padding-top: 5%;">
                                <div class="titulo_video left" style="    width: 100%;">
                                    {{$video->nombre}}
                                </div>
                                <br>
                                <div class="contenido_video left">
                                    {{$video->descripcion}}
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
</div>
@endsection

@section('js')

@endsection
