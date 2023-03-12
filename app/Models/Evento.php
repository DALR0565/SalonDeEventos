<?php

namespace App\Models;


class Evento
{
    public $id;
    public $evento;
    public $precio;
    public $descripcion;
    public $imagen;

    static public function  all(){
        $arreglo = session('arregloEvento', []);
        return $arreglo;
    }

    public function save(){
        $arreglo = session('arregloEvento', []);
        $arreglo[$this->id][0]=$this->id;
        $arreglo[$this->id][1]=$this->evento;
        $arreglo[$this->id][2]=$this->precio;
        $arreglo[$this->id][3]=$this->descripcion;
        $arreglo[$this->id][4]=$this->imagen;
        session(['arregloEvento'=>$arreglo]);
        return true;
    }

    static public function  find($id){
        $arreglo = session('arregloEvento', []);
        if(isset($arreglo[$id][0])){
            $evento = new Evento();
            $evento->id = $id;
            $evento->evento = $arreglo[$id][1];
            $evento->precio = $arreglo[$id][2];
            $evento->descripcion = $arreglo[$id][3];
            $evento->imagen = $arreglo[$id][4];
            return $evento;
        }else{
            return null;
        }
    }
    public function delete(){
        $arreglo = session('arregloEvento', []);
        unset($arreglo[$this->id]);
        unset($arreglo[$this->id][0]);
        unset($arreglo[$this->id][1]);
        unset($arreglo[$this->id][2]);
        unset($arreglo[$this->id][3]);
        unset($arreglo[$this->id][4]);
        session(['arregloEvento'=>$arreglo]);
    }
}
