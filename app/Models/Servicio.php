<?php

namespace App\Models;


class Servicio
{
    public $id;
    public $servicio;
    public $precio;

    static public function  all(){
        $arreglo = session('arregloServicio', []);
        return $arreglo;
    }

    public function save(){
        $arreglo = session('arregloServicio', []);
        $arreglo[$this->id][0]=$this->id;
        $arreglo[$this->id][1]=$this->servicio;
        $arreglo[$this->id][2]=$this->precio;
        session(['arregloServicio'=>$arreglo]);
        return true;
    }

    static public function  find($id){
        $arreglo = session('arregloServicio', []);
        if(isset($arreglo[$id][0])){
            $servicio = new Servicio();
            $servicio->id = $id;
            $servicio->servicio = $arreglo[$id][1];
            $servicio->precio = $arreglo[$id][2];
            return $servicio;
        }else{
            return null;
        }
    }
    public function delete(){
        $arreglo = session('arregloServicio', []);
        unset($arreglo[$this->id]);
        unset($arreglo[$this->id][0]);
        unset($arreglo[$this->id][1]);
        unset($arreglo[$this->id][2]);
        session(['arregloServicio'=>$arreglo]);
    }
    
}
