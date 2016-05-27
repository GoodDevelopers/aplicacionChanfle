<?php

namespace VentasBundle\Entity;

class TipoVenta {
    const NORMAL = "normal";
    const PUNTOS = "puntos";
    const DOMICILIO = "domicilio";

    
    static function getTiposVenta(){
        return array(
            TipoVenta::NORMAL => "Normal",
            TipoVenta::PUNTOS => "Por Puntos",
            TipoVenta::DOMICILIO => "Domicilio",

        );
    }
}
