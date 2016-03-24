<?php

namespace CostosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Costo
 *
 * @ORM\Table(name="costos")
 * @ORM\Entity(repositoryClass="CostosBundle\Repository\CostoRepository")
 */
class Costo
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", unique=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoCosto", type="string", length=20)
     */
    private $tipoCosto;

    /**
     * @var int
     *
     * @ORM\Column(name="valor", type="integer")
     */
    private $valor;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Costo
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set tipoCosto
     *
     * @param string $tipoCosto
     * @return Costo
     */
    public function setTipoCosto($tipoCosto)
    {
        $this->tipoCosto = $tipoCosto;
    
        return $this;
    }

    /**
     * Get tipoCosto
     *
     * @return string 
     */
    public function getTipoCosto()
    {
        return $this->tipoCosto;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     * @return Costo
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    
        return $this;
    }

    /**
     * Get valor
     *
     * @return integer 
     */
    public function getValor()
    {
        return $this->valor;
    }
    
    // --- Relacion Unidireccional ---
    /**
     * @ORM\ManyToOne(targetEntity="UsuariosBundle\Entity\Empleado")
     * @ORM\JoinColumn(name="idEmpleado", referencedColumnName="id")
     */
    private $empleado;
    

    /**
     * Set empleado
     *
     * @param \UsuariosBundle\Entity\Empleado $empleado
     * @return Costo
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
}
