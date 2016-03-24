<?php

namespace JornadasLaboralesBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Caja
 *
 * @ORM\Table(name="cajas")
 * @ORM\Entity(repositoryClass="JornadasLaboralesBundle\Repository\CajaRepository")
 */
class Caja
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
     * @var int
     *
     * @ORM\Column(name="cajaInicial", type="integer")
     */
    private $cajaInicial;

    /**
     * @var string
     *
     * @ORM\Column(name="cajaInicialJustificacion", type="string", length=200)
     */
    private $cajaInicialJustificacion;

    /**
     * @var int
     *
     * @ORM\Column(name="cajaFinal", type="integer")
     */
    private $cajaFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="cajaFinalJustificacion", type="string", length=200)
     */
    private $cajaFinalJustificacion;


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
     * @return Caja
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
     * Set cajaInicial
     *
     * @param integer $cajaInicial
     * @return Caja
     */
    public function setCajaInicial($cajaInicial)
    {
        $this->cajaInicial = $cajaInicial;
    
        return $this;
    }

    /**
     * Get cajaInicial
     *
     * @return integer 
     */
    public function getCajaInicial()
    {
        return $this->cajaInicial;
    }

    /**
     * Set cajaInicialJustificacion
     *
     * @param string $cajaInicialJustificacion
     * @return Caja
     */
    public function setCajaInicialJustificacion($cajaInicialJustificacion)
    {
        $this->cajaInicialJustificacion = $cajaInicialJustificacion;
    
        return $this;
    }

    /**
     * Get cajaInicialJustificacion
     *
     * @return string 
     */
    public function getCajaInicialJustificacion()
    {
        return $this->cajaInicialJustificacion;
    }

    /**
     * Set cajaFinal
     *
     * @param integer $cajaFinal
     * @return Caja
     */
    public function setCajaFinal($cajaFinal)
    {
        $this->cajaFinal = $cajaFinal;
    
        return $this;
    }

    /**
     * Get cajaFinal
     *
     * @return integer 
     */
    public function getCajaFinal()
    {
        return $this->cajaFinal;
    }

    /**
     * Set cajaFinalJustificacion
     *
     * @param string $cajaFinalJustificacion
     * @return Caja
     */
    public function setCajaFinalJustificacion($cajaFinalJustificacion)
    {
        $this->cajaFinalJustificacion = $cajaFinalJustificacion;
    
        return $this;
    }

    /**
     * Get cajaFinalJustificacion
     *
     * @return string 
     */
    public function getCajaFinalJustificacion()
    {
        return $this->cajaFinalJustificacion;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="TurnoLaboral", mappedBy="caja")
     */
    private $turnos;
    
    function __construct() {
        $this->turnos = new ArrayCollection();
    }


    /**
     * Add turnos
     *
     * @param \JornadasLaboralesBundle\Entity\TurnoLaboral $turnos
     * @return Caja
     */
    public function addTurno(\JornadasLaboralesBundle\Entity\TurnoLaboral $turnos)
    {
        $this->turnos[] = $turnos;
    
        return $this;
    }

    /**
     * Remove turnos
     *
     * @param \JornadasLaboralesBundle\Entity\TurnoLaboral $turnos
     */
    public function removeTurno(\JornadasLaboralesBundle\Entity\TurnoLaboral $turnos)
    {
        $this->turnos->removeElement($turnos);
    }

    /**
     * Get turnos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTurnos()
    {
        return $this->turnos;
    }
}
