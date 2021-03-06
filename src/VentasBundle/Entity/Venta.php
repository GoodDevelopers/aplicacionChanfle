<?php

namespace VentasBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Venta
 *
 * @ORM\Table(name="ventas")
 * @ORM\Entity(repositoryClass="VentasBundle\Repository\VentaRepository")
 */
class Venta {

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
     * @ORM\Column(name="valorTotal", type="integer")
     */
    private $valorTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoVenta", type="string", length=30)
     */
    private $tipoVenta;

    /**
     * @var int
     *
     * @ORM\Column(name="puntosVenta", type="integer", nullable=true)
     */
    private $puntosVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="mesa", type="string", length=15)
     */
    private $mesa;

    /**
     * @var int
     *
     * @ORM\Column(name="personasPorMesa", type="integer", nullable=true)
     */
    private $personasPorMesa;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Venta
     */
    public function setFecha($fecha) {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha() {
        return $this->fecha;
    }

    /**
     * Set valorTotal
     *
     * @param integer $valorTotal
     * @return Venta
     */
    public function setValorTotal($valorTotal) {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    /**
     * Get valorTotal
     *
     * @return integer 
     */
    public function getValorTotal() {
        return $this->valorTotal;
    }

    /**
     * Set tipoVenta
     *
     * @param string $tipoVenta
     * @return Venta
     */
    public function setTipoVenta($tipoVenta) {
        $this->tipoVenta = $tipoVenta;

        return $this;
    }

    /**
     * Get tipoVenta
     *
     * @return string 
     */
    public function getTipoVenta() {
        return $this->tipoVenta;
    }

    /**
     * Set puntosVenta
     *
     * @param integer $puntosVenta
     * @return Venta
     */
    public function setPuntosVenta($puntosVenta) {
        $this->puntosVenta = $puntosVenta;

        return $this;
    }

    /**
     * Get puntosVenta
     *
     * @return integer 
     */
    public function getPuntosVenta() {
        return $this->puntosVenta;
    }

    /**
     * Set mesa
     *
     * @param string $mesa
     * @return Venta
     */
    public function setMesa($mesa) {
        $this->mesa = $mesa;

        return $this;
    }

    /**
     * Get mesa
     *
     * @return string 
     */
    public function getMesa() {
        return $this->mesa;
    }

    /**
     * Set personasPorMesa
     *
     * @param integer $personasPorMesa
     * @return Venta
     */
    public function setPersonasPorMesa($personasPorMesa) {
        $this->personasPorMesa = $personasPorMesa;

        return $this;
    }

    /**
     * Get personasPorMesa
     *
     * @return integer 
     */
    public function getPersonasPorMesa() {
        return $this->personasPorMesa;
    }

    /**
     * @ORM\OneToMany(targetEntity="DetalleVenta", mappedBy="venta",  cascade="all")
     */
    private $detalles;
    
    // --- Relacion Unidireccional ---
    /**
     * @ORM\ManyToOne(targetEntity="UsuariosBundle\Entity\Empleado")
     * @ORM\JoinColumn(name="idEmpleado", referencedColumnName="id")
     */
    private $empleado;
    
    /**
     * @ORM\ManyToOne(targetEntity="UsuariosBundle\Entity\Cliente", inversedBy="compras")
     * @ORM\JoinColumn(name="idCliente", referencedColumnName="id")
     */
    private $cliente;
    
    function __construct() {
        $this->detalles = new ArrayCollection();
    }


    /**
     * Add detalles
     *
     * @param \VentasBundle\Entity\DetalleVenta $detalles
     * @return Venta
     */
    public function addDetalle(\VentasBundle\Entity\DetalleVenta $detalles)
    {
        $this->detalles[] = $detalles;
    
        return $this;
    }

    /**
     * Remove detalles
     *
     * @param \VentasBundle\Entity\DetalleVenta $detalles
     */
    public function removeDetalle(\VentasBundle\Entity\DetalleVenta $detalles)
    {
        $this->detalles->removeElement($detalles);
    }

    /**
     * Get detalles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetalles()
    {
        return $this->detalles;
    }

    /**
     * Set empleado
     *
     * @param \UsuariosBundle\Entity\Empleado $empleado
     * @return Venta
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
     * Set cliente
     *
     * @param \UsuariosBundle\Entity\Cliente $cliente
     * @return Venta
     */
    public function setCliente(\UsuariosBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    /**
     * Get cliente
     *
     * @return \UsuariosBundle\Entity\Cliente 
     */
    public function getCliente()
    {
        return $this->cliente;
    }
}
