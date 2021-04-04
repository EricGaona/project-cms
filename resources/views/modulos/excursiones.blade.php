@extends('plantilla')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Gestor de Excursiones</h1>
            <a href="{{ url('crear-excursion') }}">
                <button class="btn btn-primary">Agregar Nueva Excursion</button>
             </a>
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
                              <th>Titutlo</th>
                              <th>Categoria</th>
                              <th>Portada</th>
                              <th>Descripcion</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($excursiones as $excursion)
                            <tr>
                              <td>{{ $excursion->titulo }}</td>
                              <td>{{ $excursion->categoria->nombre }}</td>
                              <td><img src="storage/{{ $excursion->portada }}" alt="foto" class="w-50"></td>
                              <td>{{ $excursion->descripcion }}</td>
                              <td>
                                <a href="{{ url('galeria/'.$excursion->id) }}">
                                  <button class="btn btn-primary"><i class="fa fa-image"></i></button>
                                </a>

                                <a href="{{ url('excursion/'.$excursion->id.'/edit') }}">
                                  <button class="btn btn-success"><i class="fa fa-pen"></i></button>
                                </a>

                                <form method="POST" action="{{ route('eliminar-excursion', ['excursiones' => $excursion->id]) }}">
                                  @csrf 
                                  @method('delete')

                                  <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>

                                </form>
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