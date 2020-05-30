@extends('layouts.app')

@section('content')

<div class="container bg-light  rounded shadow-sm">
    <form action="{{route('guardar_contacto')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
    @csrf 
  <div class="row mt-4">
    <div class="col-md-6 mb-2 mt-4">
      <input type="text" class="form-control" name="nombre" placeholder=" Nombre">
    </div>
    <div class="col-md-6 mb-2 mt-4">
      <input type="text" class="form-control" name="apellido" placeholder="Apellido">
    </div>
    <div class="col-md-6 mb-2">
      <input type="text" class="form-control" name="celular" placeholder="Celular">
    </div>
    <div class="col-md-6 mb-4">
        <div class="custom-file">
            <input type="file" id="foto" name="file" class="custom-file-input">
            <label for="foto" class="custom-file-label">Subir foto</label>
        </div>
    </div>
    <div class="col-md-6 mb-2">
      <input type="text" class="form-control" name="direccion" placeholder="direccion">
    </div>
    <div class="col-md-6 mb-2">
      <input type="date" class="form-control" name="cumpleaños" placeholder="cumpleaños">
    </div>
    <div class="col-md-6 mb-2">
      <input type="text" class="form-control" name="facebook" placeholder="Facebook">
    </div>
    <div class="col-md-6 mb-2">
      <input type="text" class="form-control" name="web" placeholder="Web">
    </div>
  </div>
  <div class="row">
      <div class="col-md-6 offset-5 mb-4">
           <button class="btn btn-primary" type="submit">Registrar</button>
      </div>
  </div>
 
  
</form>
</div>

@endsection