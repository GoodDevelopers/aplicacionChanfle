<?php

namespace CostosBundle\Entity;

class TipoCosto {
    const Variable = "Variable";
    const Fijo = "Fijo";

    
    static function getTiposCosto(){
        return array(
        TipoCosto::Variable => "Variable",
        TipoCosto::Fijo=> "Fijo",

        );
    }
}
