@extends('plantilla')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Inicio</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

          <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-4 mr-5" >
                              <h2>Logo:</h2>
                              <img src="storage/{{ $inicio->logo }}" class="img-responsive" alt="foto">
                            
                              @if(auth()->user()->rol == 'Administrador')

                                <form method="post" enctype="multipart/form-data">  
                                  @csrf                              
                                  <h3>Cambiar Logo</h3>
                                  <input type="file" name="logo" required="">
                                  <br>
                                  <button type="submit" class="btn btn-success btn-xs">Cambiar</button>
                                </form>

                             @endif
                              
                            </div>
                            <div class="col-6">
                              <h2>Datos Generales</h2>

                              @if(auth()->user()->rol == 'Administrador')
                                
                              <form method="POST">
                                @csrf 
                                <h3>Nombre del Sitio:</h3>
                                <input type="text" name="nombre" class="form-control" value="{{ $inicio->nombre }}" required="">

                                <h3>Telefono:</h3>
                                <input type="text" name="telefono" class="form-control" value="{{ $inicio->telefono }}" required="">

                                <h3>Email:</h3>
                                <input type="email" name="email" class="form-control" value="{{ $inicio->email }}" required="">

                                <h3>Direccion:</h3>
                                <input type="text" name="direccion" class="form-control" value="{{ $inicio->direccion }}" required="">
                                <br>
                                <button type="submit" class="btn btn-success">Cambiar</button>
                              </form>
                              
                              @else 
                              <h3>Nombre del Sitio: {{ $inicio -> nombre }}</h3>
                              <h3>Telefono: {{ $inicio -> telefono }}</h3>
                              <h3>Email: {{ $inicio -> email }}</h3>
                              <h3>Direccion: {{ $inicio -> direccion }}</h3>
                              @endif
                              
                            </div>
                        </div>
                                
                    </div>
                </div>
            </div>
          </div>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection