<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContactoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $contactos = Contacto::where ('id_usuario', '=', $id)->get();
        return view('home', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crearcontacto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_usuario = Auth::user()->id;
        $contacto = new Contacto;
        $contacto->nombres = $request->nombre;
        $contacto->apellidos = $request->apellido;
        $contacto->direccion = $request->direccion;
        $contacto->facebook = $request->facebook;
        $contacto->web= $request->web;
        $contacto->celular= $request->celular;
        $contacto->cumpleaños=$request->cumpleaños;
        $contacto->id_usuario=Auth::user()->id;
        
        
        $foto = $request->file('file');
        $nombreFoto = $request->file->getClientOriginalName();
        $ruta = $id_usuario . "/". $request->celular. "/". $nombreFoto;
        $contacto->url_foto = $ruta;
        Storage::putFileAs($id_usuario. "/". $request->celular, $foto, $nombreFoto);
        $contacto->save();
        
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacto = Contacto::find($id);
        return view('Editar_contacto', compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contacto = Contacto::find($id);
        $contacto->nombres = $request->nombre;
        $contacto->apellidos = $request->apellido;
        $contacto->cumpleaños = $request->cumpleaños;
        $contacto->celular = $request->celular;
        $contacto->facebook = $request->facebook;
        $contacto->direccion = $request->direccion;
        $contacto->web = $request->web;
        
        $contacto->save();
        
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacto = Contacto::destroy($id);
        return redirect()->route('home');
    }
    
    public function ayuda(){
        return view('ayuda');
    }
    

}

