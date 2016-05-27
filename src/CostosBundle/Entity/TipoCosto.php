<?php

namespace CostosBundle\Entity;

class TipoCosto {

    const Variable = "Variable";
    const Fijo = "Fijo";
    const Operacional = "Operacional";
    const NoOperacional = "No Operacional";

    static function getTiposCosto() {
        return array(
            TipoCosto::Fijo => "Fijo",
            TipoCosto::NoOperacional => "No Operacional",
            TipoCosto::Operacional => "Operacional",
            TipoCosto::Variable => "Variable",
        );
    }

}
