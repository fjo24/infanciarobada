@extends('pages.templates.body')

@section('title', 'Contacto')

@section('css')



<link rel="stylesheet" href="{{ asset('css/pages/contacto.css') }}">



@endsection

@section('contenido')

<!-- body -->        

   

	<main>

		<section class="contacto">

			<div class="container">

				<div class="row">

				    <div class="col l12 m12 s12 center" style="color: black">

				        <span class="complete">Complete el formulario a continuación y nuestro equipo se contactará a la brevedad</span>

				    </div>

					<div class="col s12 l12">

						{!!Form::open(['route'=>'enviarmailcontacto', 'method'=>'POST'])!!}

						{{ csrf_field() }}

					      	<div class="row">

					        	<div class="input-field col m6 s12" style="color: black">

					          		{!!Form::text('nombre',null,['class'=>'', 'placeholder'=>'Nombre'])!!}

					          		<label for="nombre"></label>

					        	</div>

					        	<div class="input-field col m6 s12" style="color: black">

					          		{!!Form::text('telefono',null,['class'=>'', 'placeholder'=>'Telefono'])!!}

					          		<label for="telefono"></label>

					        	</div>

					      	</div>

					      	<div class="row">

					        	<div class="input-field col m6 s12" style="color: black">

					          		{!!Form::email('email',null,['class'=>'', 'placeholder'=>'Email'])!!}

					          		<label for="email"></label>

					        	</div>

					        	<div class="input-field col m6 s12" style="color: black">

					          		{!!Form::text('ciudad',null,['class'=>'', 'placeholder'=>'Ciudad'])!!}

					          		<label for="ciudad"></label>

					        	</div>

					      	</div>

					      	<div class="row no-margin">
				
            <div class="input-field col l6 s12">
                {!! Form::select('foro_id', $foros, null, ['class' => 'form-control', 'placeholder' => 'Foros', 'required']) !!}
            </div>

							    <div class="col s6">

					        		<div class="g-recaptcha" data-sitekey="6LfT-GQUAAAAALDE4kKAhJAYX2I10Ve1PwtaXBQV" required></div>

					        	<br>
</div>
					        	<div class="row">
            <div class="col m12 l12 s12">
                <label class="col l12 s12" for="parrafo">
                    Mensaje
                </label>
                <div class="input-field col s12">
                    <textarea class="materialize-textarea" id="mensaje" name="mensaje" required=""></textarea>
                </div>
            </div>
        </div>


							      	<button class="btn waves-effect waves-light z-depth-0" type="submit" name="action" style="background-color: #89B8E6;height: 38px;    width: 100px;color: white;font-weight: 500;    font-family: 'Asap', sans-serif;border-radius: 3px;">Enviar

									</button>

								</div>

					      	</div>

					</div>

				</div>

				{!!Form::close()!!}

			</div>

	</section>





@endsection



@section('js')
<script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js">
</script>

	<script type="text/javascript">
		$(document).ready(function(){
    $('select').formSelect();
  });

	CKEDITOR.replace('mensaje');
	CKEDITOR.config.height = '150px';
	CKEDITOR.config.width = '100%';
    </script>
	<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>




@endsection











