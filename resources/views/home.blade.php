
@extends('layouts.app')

@section('content')
<style>
    .tamaño{font-size: 14px;
    }
</style>
<div class="container">
    <div class="text-center ">
       <h2>Contactos agregados</h2><br>
    </div>
    <div class="row">
        
   
    @foreach($contactos as $contacto)
    <div class="col-md-6 col-lg-6 mb-4">
    <div class="card text-center h-100 shadow-sm">
  <div class="card-header">
  <img src="storage/{{$contacto->url_foto}}" class="card-img-top rounded-circle w-25">
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$contacto->nombres}} {{$contacto->apellidos}}</h5>
    <span class="badge badge-secondary tamaño p-1">Celular: </span><br>{{$contacto->celular}}<br>
    <span class="badge badge-secondary tamaño p-1">Cumpleaños:</span><br> {{$contacto->cumpleaños}}<br>
     <span class="badge badge-secondary tamaño p-1">Direccion:</span><br> {{$contacto->direccion}}
  
  </div>
  <div class="card-footer text-muted">
    <a href="{{$contacto->facebook}}" class="fa fa-facebook"></a>
    <a href="{{$contacto->web}}" class="fa fa-hashtag"></a><br>
    <a href="{{route('modificar_contacto', $contacto->id_contacto)}}" class="btn btn-sm btn-info">Editar</a>
     <a href="{{route('eliminar_contacto', $contacto->id_contacto)}}" class="btn btn-sm btn-danger">Eliminar</a>
  </div>
  
</div>
   </div>
    @endforeach
</div>
</div>
@endsection
