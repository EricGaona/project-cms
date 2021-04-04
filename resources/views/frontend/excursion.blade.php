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

                <li>
                    <a rel="grupo" href="images/galeria/photo01.jpg">
                    <img src="images/galeria/photo01.jpg">
                    </a>
                </li>

                <li>
                    <a rel="grupo" href="images/galeria/photo02.jpg">
                    <img src="images/galeria/photo02.jpg">
                    </a>
                </li>

                <li>
                    <a rel="grupo" href="images/galeria/photo03.jpg">
                    <img src="images/galeria/photo03.jpg">
                    </a>
                </li>


                <li>
                    <a rel="grupo" href="images/galeria/photo04.jpg">
                    <img src="images/galeria/photo04.jpg">
                    </a>
                </li>


                <li>
                    <a rel="grupo" href="images/galeria/photo01.jpg">
                    <img src="images/galeria/photo01.jpg">
                    </a>
                </li>

            </ul>

        </div>


@endsection