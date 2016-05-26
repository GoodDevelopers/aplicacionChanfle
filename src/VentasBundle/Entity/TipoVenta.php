<?php

namespace VentasBundle\Entity;

class TipoVenta {
    const NORMAL = "normal";
    const PUNTOS = "puntos";
    const DOMICILIO = "domicilio";

    
    static function getTiposCosto(){
        return array(
        TipoCosto::NORMAL => "Normal",
        TipoCosto::PUNTOS => "Por Puntos",
        TipoCosto::DOMICILIO => "Domicilio",

        );
    }
}
