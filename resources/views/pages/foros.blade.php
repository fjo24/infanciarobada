@extends('pages.templates.body')
@section('title', 'Infancia Robada')
@section('css')
<link href="{{ asset('css/pages/donde.css') }}" rel="stylesheet">
<link href="{{ asset('css/pages/lineashome.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/banner.css') }}" rel="stylesheet">
<link href="{{ asset('css/pages/clientes.css') }}" rel="stylesheet">
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
<div class="container" style="width: 85%;">
		<div class="row bloquecont center">
        <span class="titulo-cat">
            NUESTRA RED DE FOROS SOCIALES
        </span>
        <hr class="cat-line"/>
        <div class="items-cat col l12 s12 m12">
            <p class="texto-ini">
                Red Infancia Robada - red@infanciarobada.org:
            </p>
        </div>
		<div class="listado_foros col l12 m12 s12" style="margin-top: 5%; margin-bottom: 5%;">
			@foreach($mapas as $foro)
				<div class="col l4 m4 s12">
					<div class="center">
						<div class="titulo_foro center" style="font-size: 28px;font-family: 'Titillium Web', sans-serif;color: #595959;font-weight: 600;">
							<span>
			                	{{ $foro->direccion }}
							</span>
			            </div>
			            <div class="descripcion_foro center" style="font-size: 18px;
    font-family: 'Titillium Web', sans-serif;
        color: #D8212A;">
			                {{ $foro->correo }}
			            </div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>
	<div class="col l12 m12 s12">
		<div class="col l6 m6 s12">
        <!-- CUERPO -->
        <?php $cont_mapa = 0; ?>
        @foreach($mapas as $mapa)
        <input id="p1_{{ $cont_mapa }}" name="" type="hidden" value="{{ $mapa->lat }}">
            <input id="p2_{{ $cont_mapa }}" name="" type="hidden" value="{{ $mapa->lng }}">
            <input id="nombre_{{ $cont_mapa }}" name="" type="hidden" value="{{ $mapa->direccion }} - Email: {{ $mapa->correo }}">
                <?php $cont_mapa++; ?>
        @endforeach
				<input type="hidden" id="cantidad" name="" value="{{ $cont_mapa }}">
<div id="map">
</div>
		</div>
	</div>
@endsection
@section('js')
<script type="text/javascript">
    var map;

	jQuery(function($) {

	    var script = document.createElement('script');
	    script.src = "//maps.googleapis.com/maps/api/js?sensor=false&callback=initialize&key=AIzaSyAZUlidy4Exa3bvZLRh4qgqx4lwlLy6khw&libraries=geometry,places";
	    document.body.appendChild(script);
	});

		
	function initialize() 
	{ 
	    var mapOptions = {
	    	center: new google.maps.LatLng('-35.482992', '-64.474799'),
	    	zoom: 5,
	    	scrollwheel: true,
	    	disableDefaultUI: false,
	    	mapTypeId: google.maps.MapTypeId.ROADMAP
	 	};

	 	var codificador = new google.maps.Geocoder();


	 	var direccion = '<?php if(isset($_GET['direccion'])){echo $_GET['direccion'];}else{echo '';} ?>';
	 	var kilometros = '<?php if(isset($_GET['radio'])){echo $_GET['radio'];}else{echo '';} ?>';

	 	if(kilometros == ''){
	 		kilometros = 1000000;
	 	}

	 	var position;

	 	codificador.geocode({ 'address': direccion }, function(results, status){

	 		if (status == 'OK') {

		 		position = {lat: results[0].geometry.location.lat(), lng: results[0].geometry.location.lng()
		 		};

			  	map = new google.maps.Map(document.getElementById("map"),mapOptions);
			  
			  	var cantidad = $("#cantidad").val();
			  	var p1, p2;
			  	var ubicacion1, ubicacion2, ubicacion3, ubicacion4;
			  	var distancia;
			  	ubicacion2 = new google.maps.LatLng(position.lat, position.lng);
			  	map.setCenter(position);

			  	for(var i = 0; i < cantidad; i++) {
			  		p1 = $("#p1_"+i).val();
			  		p2 = $("#p2_"+i).val();
			  		nombre = $("#nombre_"+i).val(); 

			  		ubicacion1 = new google.maps.LatLng(p1, p2);
	 				distancia = google.maps.geometry.spherical.computeDistanceBetween(ubicacion1, ubicacion2);
	 				if(distancia/1000 < kilometros){
			    		addMarker(p1, p2, nombre);
	 				}
			  	}

	 		}else{
	 			map = new google.maps.Map(document.getElementById("map"),mapOptions);
			  
			  	var cantidad = $("#cantidad").val();
			  
			  	for(var i = 0; i < cantidad; i++) {
			    	addMarker($("#p1_"+i).val(), $("#p2_"+i).val(), $("#nombre_"+i).val());
			  	}
	 		}
	 	});

	  	googleAutocompleteInstance = new google.maps.places.Autocomplete($('#direccion')[0], {
			types: ['geocode'],
			componentRestrictions: {
			country: 'AR'
			}
		});
	 }

	 function addMarker(c1, c2, nombre){
	     marker = new google.maps.Marker({
	        position: new google.maps.LatLng(c1, c2),
	        map: map,
	        title: nombre
	    });
	}
</script>
<script type="text/javascript">
    $('.logo').click(() => {
            window.location.href = "/parpen";
        });
</script>
@endsection
