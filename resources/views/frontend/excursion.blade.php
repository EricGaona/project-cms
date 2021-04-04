@extends('welcome')
@section('content')

<div class="row">

    <center><img src="http://localhost:8080/project-cms/public/storage/{{ $excursion->portada }}"></center>
            
    <h1 class="text-center text-info"><b>{{ $excursion->titulo }}</b></h1>

    <div class="col-12">

        <p style="padding: 15px">{{ $excursion->descripcion }}</p>

    </div>

</div>

<div class="row" id="galeria">

            <hr>
            
            <h1 class="text-center text-info"><b>GALERÍA DE IMÁGENES</b></h1>

            <hr>

            <ul>
                @foreach($galerias as $img)

                 <li>
                    <a rel="grupo" href="http://localhost:8080/project-cms/public/storage/{{ $img->imagen }}">
                    <img src="http://localhost:8080/project-cms/public/storage/{{ $img->imagen }}">
                    </a>
                </li>   

                @endforeach
                    
                         
            </ul>

        </div>


@endsection