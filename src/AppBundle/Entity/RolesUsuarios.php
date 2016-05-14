<?php

namespace AppBundle\Entity;

/**
 * Description of RolesUsuarios
 *
 * @author arias
 */
class RolesUsuarios {

    const RolCliente = "ROLE_CLIENT";
    const RolEmpleado = "ROLE_USER";
    const RolAdmin = "ROLE_ADMIN";

    static function getRoles() {
        return array(
            RolesUsuarios::RolAdmin => "Administrador",
            RolesUsuarios::RolEmpleado => "Empleado"
        );
    }

}
