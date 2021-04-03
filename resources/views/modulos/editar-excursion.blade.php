@extends('plantilla')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Editar Excursion: {{ $excursiones->titulo }}</h1>
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
                        <form method="POST" action="{{ route('actualizar-excursion', ['excursiones' => $excursiones->id]) }}" enctype="multipart/form-data">
                        @csrf 
                        @method('put')
                        <h2>Titulo:</h2>
                        <input type="text" class="form-control" name="titulo" value="{{ $excursiones->titulo }}">

                        <h2>Categoria</h2>
                        <select name="id_categoria" class="form-control">

                            <option value="{{ $excursiones->id_categoria }}">
                                Actual: {{ $excursiones->categoria->nombre}}
                            </option>

                            @foreach($categorias as $categoria)
                            
                                <option value="{{ $categoria->id}}">
                                    {{ $categoria->nombre}}
                                </option>

                            @endforeach

                        </select>

                        <h2>Portada Actual:</h2>
                        <img src="http://localhost:8080/project-cms/public/storage/{{ $excursiones->portada }}" class="w-50" alt="foto">
                        
                        <input type="hidden" name="portadaActual" value="{{ $excursiones->portada }}">
                        
                        <input type="file" name="portadaNueva">

                        <h2>Descripcion:</h2>
                        <textarea name="descripcion"  class="form-control">{{ $excursiones->descripcion }}</textarea>

                        <br>
                        <button type="submit" class="btn btn-success">Guardar</button>
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