@extends('plantilla')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Crear Nueva Excursion</h1>
            
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
                        <form method="post" enctype="multipart/form-data">
                        @csrf 
                        <h2>Titulo</h2>
                        <input type="text" name="titulo" class="form-control">

                        <h2>Categoria</h2>
                        <select name="id_categoria" class="form-control" >

                            <option value="">Seleccionar...</option>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>

                        <h2>Portada</h2>
                        <input type="file" name="portada">

                        <h2>Descripcion</h2>
                        <textarea name="descripcion" class="form-control" cols="30" rows="10"></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary">Crear</button>    
                    </form>

                    </div>
                </div>
            </div>
          </div>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection