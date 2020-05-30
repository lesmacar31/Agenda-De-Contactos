@extends('layouts.app')

@section('content')

<div class="container bg-light  rounded shadow-sm">
    <form action="{{route('actualizar_contacto', $contacto->id_contacto)}}" method="post">
    @csrf 
  <div class="row mt-4">
    <div class="col-md-6 mb-2 mt-4">
      <input type="text" class="form-control" value="{{$contacto->nombres}}" name="nombre" placeholder=" Nombre">
    </div>
    <div class="col-md-6 mb-2 mt-4">
      <input type="text" class="form-control" value="{{$contacto->apellidos}}" name="apellido" placeholder="Apellido">
    </div>
    <div class="col-md-6 mb-2">
      <input type="text" class="form-control" value="{{$contacto->celular}}" name="celular" placeholder="Celular">
    </div>
    <div class="col-md-6 mb-2">
      <input type="text" class="form-control" value="{{$contacto->direccion}}" name="direccion" placeholder="direccion">
    </div>
    <div class="col-md-6 mb-2">
      <input type="date" class="form-control" value="{{$contacto->cumpleaños}}" name="cumpleaños" placeholder="cumpleaños">
    </div>
    <div class="col-md-6 mb-2">
      <input type="text" class="form-control" value="{{$contacto->facebook}}" name="facebook" placeholder="Facebook">
    </div>
    <div class="col-md-6 mb-2">
      <input type="text" class="form-control" value="{{$contacto->web}}" name="web" placeholder="Web">
    </div>
  </div>
  <div class="row">
      <div class="col-md-6 offset-5 mb-4">
           <button class="btn btn-primary" type="submit">Actualizar Contacto</button>
      </div>
  </div>
 
  
</form>
</div>
@endsection