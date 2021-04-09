
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$inicio->nombre}}</title>
	{{-- <title>Soy Laravel</title> --}}

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="#">

	<link rel="stylesheet" href="http://localhost:8080/project-cms/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost:8080/project-cms/public/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://localhost:8080/project-cms/public/css/style.css">
	<link rel="stylesheet" href="http://localhost:8080/project-cms/public/css/fonts.css">
	<link rel="stylesheet" href="http://localhost:8080/project-cms/public/css/cssFancybox/jquery.fancybox.css">

	<script src="http://localhost:8080/project-cms/public/js/jquery-2.2.0.min.js"></script>
	<script src="http://localhost:8080/project-cms/public/js/bootstrap.min.js"></script>
	<script src="http://localhost:8080/project-cms/public/js/jquery.fancybox.js"></script>
	<script src="http://localhost:8080/project-cms/public/js/animatescroll.js"></script>
	<script src="http://localhost:8080/project-cms/public/js/jquery.scrollUp.js"></script>
    <script src="http://localhost:8080/project-cms/public/js/script.js"></script>
	
</head>

<body>

	<div class="container-fluid">

		@include('frontend.menu')
        @yield('content')

		{{-- {{dd(Request::url())}}  ____    	ESTO NOS MUESTRA LA RUTA EN LA QUE ESTAMOS --}}
		@if(Request::url() == 'http://localhost:8080/project-cms/public')

		<div class="row">

			<div id="slide" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			  
			  <ul>
				@foreach($slide as $sli)
				  <li>
					  <img src="storage/{{ $sli->imagen }}">
					  <div class="slideCaption">
						  <h3>ESTOY AQUI {{ $sli->titulo }}</h3>
						  <p>{{ $sli->descripcion }}</p>
					  </div>
				  </li>
				  @endforeach    
				  
			 </ul>
		
		
			  <div id="slideIzq"><span class="fa fa-chevron-left"></span></div>
			  <div id="slideDer"><span class="fa fa-chevron-right"></span></div>
		
		  </div>
		
		</div>
		
		
		<div class="row" id="top">
		  
		  <h1 class="text-center text-info"><b>CATEGORÍAS</b></h1>
		
			@foreach($categorias as $ctg)
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
					<a href="{{ url('excursiones/'.$ctg->id) }}" style="color: black;">             
					  <h3>{{ $ctg -> nombre}}</h3>
					</a> 
				</div>
		
			@endforeach
		
			  
		
		</div>
		
		
		<div class="row" id="articulos">
		  
		  <hr>
		
		  <h1 class="text-center text-info"><b>EXCURSIONES</b></h1>
		
		  <hr>
		
		  <ul>
			  @foreach($excursiones as $excursion)
			   <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		
				  <img src="storage/{{ $excursion->portada }}" class="img-thumbnail">
				  <h1>{{ $excursion->titulo }}</h1>
				  <p>{{ $excursion->descripcion }}</p>
				  <a href="{{ url('excursion/'.$excursion->id)}}">
				  <button class="btn btn-default">Leer Más</button>
				  </a>
		
				  <hr>
		
			  </li>
			  @endforeach
		  </ul>
		
		</div>
		
		  <div class="row">
			  
			  <center><a href="{{ url('excursiones-todas') }}"><button class="btn btn-primary btn-lg">Ver Todas las Excursiones</button></a></center>
			  
		  </div>
		
		<footer class="row" id="contactenos">
		
			  <hr>
			  
			  <h1 class="text-center text-info"><b>CONTÁCTENOS</b></h1>
		
			  <hr>
			  
			  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			  
				  {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0610775555!2d-75.60278588568637!3d6.255684295471969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429739f2122e9%3A0x7097411dc6e57e48!2sCl.+45f+%2382-31%2C+Medell%C3%ADn%2C+Antioquia%2C+Colombia!5e0!3m2!1ses!2sus!4v1470838764806" width="100%"  frameborder="0" style="border:0" allowfullscreen></iframe> --}}
				  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12576.752472716691!2d-0.6952369722592179!3d37.996072385376884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd63a9f2994be955%3A0x81cbc68b138794af!2sUrb.%20Jard%C3%ADn%20del%20Mar%2C%2003184%20Torrevieja%2C%20Alicante!5e0!3m2!1ses!2ses!4v1617634272013!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jumbotron">
		
					  {{--    ___DE ESTA FORMA SE COLOCAN ESTOS DATOS MANUAL___ 
						<h4 class="blockquote-reverse text-primary">
						  <ul>
						  <li><span class="glyphicon glyphicon-phone"></span>  (57)(4) 234 56 43</li>
						  <li><span class="glyphicon glyphicon-map-marker"></span>  Calle 45F 32 - 45</li>
						  <li><span class="glyphicon glyphicon-envelope"></span>  logotipo@correo.com</li>    
						  </ul>      
					  </h4> --}}
					  <h4 class="blockquote-reverse text-primary">
						<ul>
						<li><span class="glyphicon glyphicon-phone"></span>{{$inicio->telefono}}</li>
						<li><span class="glyphicon glyphicon-map-marker"></span>{{$inicio->direccion}}</li>
						<li><span class="glyphicon glyphicon-envelope"></span>{{$inicio->email}}</li>    
						</ul>      
					</h4>
				  </div>
		
			  </div>
		
			  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="formulario" >
		
				  <ol>
					  <li>
						  <a href="http://www.facebook.com" target="_blank">
						  <i class="fa fa-facebook" style="font-size:24px;"></i>  
						  </a>
					  </li>
		
					  <li>
						  <a href="http://www.youtube.com" target="_blank">  
						  <i class="fa fa-youtube" style="font-size:24px;"></i>  
						  </a>
					  </li>
			  
					  <li>
						  <a href="http://www.vimeo.com" target="_blank">
						  <i class="fa fa-vimeo" style="font-size:24px;"></i>  
						  </a>
					  </li>
				  </ol>
		
				  <form method="post" novalidate>
						@csrf 
		
						  <input type="text" name="nombre" class="form-control"  placeholder="Nombre">
		
						  <input type="email" name="email" class="form-control" placeholder="Email">
		
						  <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Contenido del Mensaje" class="form-control"></textarea>
		
					  
						  <input type="submit" class="btn btn-default" value="Enviar">
		
				  </form>
								  
		
			  </div>
		
		</footer>
		@endif
		
    </div>

	<script src="http://localhost:8080/project-cms/public/js/slide.js"></script>
</body>
</html>


