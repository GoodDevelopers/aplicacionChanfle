<?php

namespace JornadasLaboralesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurnoLaboral
 *
 * @ORM\Table(name="turnosLaborales")
 * @ORM\Entity(repositoryClass="JornadasLaboralesBundle\Repository\TurnoLaboralRepository")
 */
class TurnoLaboral
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="Caja", inversedBy="turnos")
     * @ORM\JoinColumn(name="idCaja", referencedColumnName="id")
     */
    private $caja;
    
    // --- Relacion Unidireccional ---
    /**
     * @ORM\ManyToOne(targetEntity="UsuariosBundle\Entity\Empleado")
     * @ORM\JoinColumn(name="idEmpleado", referencedColumnName="id")
     */
    private $empleado;
    
    // --- Relacion Unidireccional ---
    /**
     * @ORM\ManyToOne(targetEntity="Cargo")
     * @ORM\JoinColumn(name="idCargo", referencedColumnName="id")
     */
    private $cargo;
    

    /**
     * Set caja
     *
     * @param \JornadasLaboralesBundle\Entity\Caja $caja
     * @return TurnoLaboral
     */
    public function setCaja(\JornadasLaboralesBundle\Entity\Caja $caja = null)
    {
        $this->caja = $caja;
    
        return $this;
    }

    /**
     * Get caja
     *
     * @return \JornadasLaboralesBundle\Entity\Caja 
     */
    public function getCaja()
    {
        return $this->caja;
    }

    /**
     * Set empleado
     *
     * @param \UsuariosBundle\Entity\Empleado $empleado
     * @return TurnoLaboral
     */
    public function setEmpleado(\UsuariosBundle\Entity\Empleado $empleado = null)
    {
        $this->empleado = $empleado;
    
        return $this;
    }

    /**
     * Get empleado
     *
     * @return \UsuariosBundle\Entity\Empleado 
     */
    public function getEmpleado()
    {
        return $this->empleado;
    }

    /**
     * Set cargo
     *
     * @param \JornadasLaboralesBundle\Entity\Cargo $cargo
     * @return TurnoLaboral
     */
    public function setCargo(\JornadasLaboralesBundle\Entity\Cargo $cargo = null)
    {
        $this->cargo = $cargo;
    
        return $this;
    }

    /**
     * Get cargo
     *
     * @return \JornadasLaboralesBundle\Entity\Cargo 
     */
    public function getCargo()
    {
        return $this->cargo;
    }
}
