@extends('template.template')
@section("contenido")
    <!-- aqui va el formulario -->
<form method="post">
  @csrf
  <div class="form-group row">
    <label for="nombre" class="col-4 col-form-label">Nombre</label> 
    <div class="col-8">
      <input id="nombre" name="nombre" type="text" class="form-control" value="{{$producto->nombre}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="precio" class="col-4 col-form-label">Precio</label> 
    <div class="col-8">
      <input id="precio" name="precio" type="text" class="form-control"  value="{{$producto->precio}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="cantidad" class="col-4 col-form-label">Cantidad</label> 
    <div class="col-8">
      <input id="cantidad" name="cantidad" type="text" class="form-control"  value="{{$producto->cantidad}}">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    <!-- fin del formulario -->
@endsection
@section("titulo","Formulario")
@section("menu")
@include("componente.menulateral")
@endsection