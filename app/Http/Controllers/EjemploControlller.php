<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploControlller extends Controller
{
    //
    public function index(){
        return "Hola esto es usuarios controlador";
    }

    public function create(){
        return "Hola esto es usuarios crear controlador";
    }

    public function show($idusuario, $nombreusuario=null){
        // if($nombreusuario){
        //     return "Hola usuario " .$nombreusuario ." tu id es " .$idusuario;
        // }
        // else{
        //     return "Hola tu id es: " .$idusuario;
        // }
        return view('show',['IDusuario'=>$idusuario,'nombreusuario'=>$nombreusuario]);
    }
}