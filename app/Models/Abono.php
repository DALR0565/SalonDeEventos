<?php

namespace App\Models;


class Abono
{
    public $id;
    public $servicio;
    public $precio;
    public $cantidad_abonada;

    static public function  all(){
        $arreglo = session('arregloAbono', []);
        return $arreglo;
    }

    public function save(){
        $arreglo = session('arregloAbono', []);
        $arreglo[$this->id][0]=$this->id;
        $arreglo[$this->id][1]=$this->servicio;
        $arreglo[$this->id][2]=$this->precio;
        $arreglo[$this->id][3]=$this->cantidad_abonada;
        session(['arregloAbono'=>$arreglo]);
        return true;
    }

    static public function  find($id){
        $arreglo = session('arregloAbono', []);
        if(isset($arreglo[$id][0])){
            $abono = new Abono();
            $abono->id = $id;
            $abono->servicio = $arreglo[$id][1];
            $abono->precio = $arreglo[$id][2];
            $abono->cantidad_abonada = $arreglo[$id][3];
            return $abono;
        }else{
            return null;
        }
    }
    public function delete(){
        $arreglo = session('arregloAbono', []);
        unset($arreglo[$this->id]);
        unset($arreglo[$this->id][0]);
        unset($arreglo[$this->id][1]);
        unset($arreglo[$this->id][2]);
        unset($arreglo[$this->id][3]);
        unset($arreglo[$this->id][4]);
        session(['arregloAbono'=>$arreglo]);
    }

}
