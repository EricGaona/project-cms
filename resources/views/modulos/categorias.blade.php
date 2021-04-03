@extends('plantilla')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Gestor de Categorias</h1>
            <br>
            <form method="post">
                @csrf 
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="nombre" placeholder="Categoria" required="">
                    
                  </div>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                  </div>

                </div>

            </form>

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
                      @foreach($categorias as $categoria)                      
                        
                        <form method="post" action="{{ url('categoria/'.$categoria->id) }}">
                           @csrf 
                           @method('put') 
                          <div class="row">
                            <div class="col-md-4">
                              <input type="text" class="form-control" name="nombre" value="{{ $categoria->nombre }}">
                            </div>
                            <div class="col-md-1">
                              <button type="submit" class="btn btn-success">Editar</button>
                            </div>
                          </form>

                            <div class="col-md-1">
                              <form method="post" action="{{ url('ctg/'.$categoria->id) }}">
                                @csrf 
                                @method('delete') 
                                <button type="submit" class="btn btn-danger">Borrar</button>
                              </form>                              
                            </div>

                          </div>
                        
                        <br>
                        @endforeach
                    </div>
                </div>
            </div>
          </div>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection