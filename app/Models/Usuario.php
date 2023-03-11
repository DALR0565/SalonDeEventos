<?php

namespace App\Models;

class Usuario
{
    public $id;
    public $nombre;
    public $edad;
    public $sexo;

    static public function  all(){
        $arreglo = session('arregloUsuario', []);
        return $arreglo;
    }

    public function save(){
        $arreglo = session('arregloUsuario', []);
        $arreglo[$this->id][0]=$this->id;
        $arreglo[$this->id][1]=$this->nombre;
        $arreglo[$this->id][2]=$this->edad;
        $arreglo[$this->id][3]=$this->sexo;
        session(['arregloUsuario'=>$arreglo]);
        return true;
    }

    static public function  find($id){
        $arreglo = session('arregloUsuario', []);
        if(isset($arreglo[$id][0])){
            $usuario = new Usuario();
            $usuario->id = $id;
            $usuario->nombre = $arreglo[$id][1];
            $usuario->edad = $arreglo[$id][2];
            $usuario->sexo = $arreglo[$id][3];
            return $usuario;
        }else{
            return null;
        }
    }
    public function delete(){
        $arreglo = session('arregloUsuario', []);
        unset($arreglo[$this->id][0]);
        unset($arreglo[$this->id][1]);
        unset($arreglo[$this->id][2]);
        unset($arreglo[$this->id][3]);
        session(['arregloUsuario'=>$arreglo]);
    }
}
