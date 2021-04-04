@extends('plantilla')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Mensajes</h1>
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
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Mensaje</th>
                                    <th>Fecha</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mensajes as $mensaje)

                                @if($mensaje -> leido == 'no')
                                    <tr class="bg-primary">                                                                    
                                @else
                                    <tr>
                                @endif                                
                                    <td>{{ $mensaje -> nombre }}</td>
                                    <td>{{ $mensaje -> email }}</td>
                                    <td>{{ $mensaje -> mensaje }}</td>
                                    <td>{{ $mensaje -> created_at }}</td>
                                    <td>
                                        <a href="{{ url('leer-mensaje/'.$mensaje->id) }}">
                                            <button class="btn btn-warning">Leer</button>
                                        </a>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
          </div>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection