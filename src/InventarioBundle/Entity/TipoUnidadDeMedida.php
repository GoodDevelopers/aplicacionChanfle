<?php

namespace InventarioBundle\Entity;

class TipoUnidadDeMedida {
    const KILO = "kilo";
    const LIBRA = "libra";
    const LITRO = "litro";
    const GRAMO = "gramo";
    const  UNIDAD = "unidad";
    
    static function getTipoUnidadDeMedida(){
        return array (
        TipoUnidadDeMedida::GRAMO => "gramo",
        TipoUnidadDeMedida::KILO => "kilo",
        TipoUnidadDeMedida::LIBRA => "libra",
        TipoUnidadDeMedida::LITRO => "litro",
        TipoUnidadDeMedida::UNIDAD => "unidad",
        );
    }
    
    
}
