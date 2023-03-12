<?php

namespace App\Models;


class Paquete
{
    public $id;
    public $paquete;
    public $precio;

    static public function  all(){
        $arreglo = session('arregloPaquete', []);
        return $arreglo;
    }

    public function save(){
        $arreglo = session('arregloPaquete', []);
        $arreglo[$this->id][0]=$this->id;
        $arreglo[$this->id][1]=$this->paquete;
        $arreglo[$this->id][2]=$this->precio;
        session(['arregloPaquete'=>$arreglo]);
        return true;
    }

    static public function  find($id){
        $arreglo = session('arregloPaquete', []);
        if(isset($arreglo[$id][0])){
            $paquete = new Paquete();
            $paquete->id = $id;
            $paquete->paquete = $arreglo[$id][1];
            $paquete->precio = $arreglo[$id][2];
            return $paquete;
        }else{
            return null;
        }
    }
    public function delete(){
        $arreglo = session('arregloPaquete', []);
        unset($arreglo[$this->id]);
        unset($arreglo[$this->id][0]);
        unset($arreglo[$this->id][1]);
        unset($arreglo[$this->id][2]);
        session(['arregloPaquete'=>$arreglo]);
    }
}
