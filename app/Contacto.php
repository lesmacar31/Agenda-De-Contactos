<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
   protected $table= 'contacto';
    public $timestamps = false;
    protected $fillable = [
        'id_contacto', 'nombres', 'apellidos', 'direccion', 'celular', 'cumpleaños', 'facebook', 'web', 'id_usuario', 'url_foto'];
    protected $primaryKey = 'id_contacto';//
}
