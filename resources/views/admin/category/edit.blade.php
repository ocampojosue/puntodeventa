@extends('layouts.admin')
@section('title','Registrar Categorías')
@section('styles')
<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
      }
</style>

@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Editar Categorías
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categorias</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Categorías</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">registro de Categorías</h4>
                    </div>

                    {!! Form::model($category,['route'=>['categories.update',$category],'method'=>'PUT']) !!}
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" value="{{$category->name}}" class="form-control" placeholder="Nombre" required>
                      </Div>
                      <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" name="description" value="{{$category->description}}" id="description" rows="3"></textarea>
                      </div>

                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <a class="btn btn-light mr-2" href="{{route('categories.index')}}">Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection