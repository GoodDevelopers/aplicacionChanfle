<?php

namespace VentasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleVenta
 *
 * @ORM\Table(name="detallesVentas")
 * @ORM\Entity(repositoryClass="VentasBundle\Repository\DetalleVentaRepository")
 */
class DetalleVenta {

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
     * @ORM\Column(name="fecha", type="datetime", unique=false)
     */
    private $fecha;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var int
     *
     * @ORM\Column(name="valorDetalle", type="integer")
     */
    private $valorDetalle;

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
     * @return DetalleVenta
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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return DetalleVenta
     */
    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad() {
        return $this->cantidad;
    }

    /**
     * Set valorDetalle
     *
     * @param integer $valorDetalle
     * @return DetalleVenta
     */
    public function setValorDetalle() {
       $this->valorDetalle = $this->getProducto()->getPrecio() * $this->getCantidad();

        return $this;
    }

    /**
     * Get valorDetalle
     *
     * @return integer 
     */
    public function getValorDetalle() {
        return $this->valorDetalle;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Venta", inversedBy="detalles")
     * @ORM\JoinColumn(name="venta", referencedColumnName="id")
     */
    private $venta;
    
    /**
     * @ORM\ManyToOne(targetEntity="InventarioBundle\Entity\Producto", inversedBy="detallesVentas")
     * @ORM\JoinColumn(name="producto", referencedColumnName="id")
     */
    private $producto;
    

    /**
     * Set venta
     *
     * @param \VentasBundle\Entity\Venta $venta
     * @return DetalleVenta
     */
    public function setVenta(\VentasBundle\Entity\Venta $venta = null)
    {
        $this->venta = $venta;
    
        return $this;
    }

    /**
     * Get venta
     *
     * @return \VentasBundle\Entity\Venta 
     */
    public function getVenta()
    {
        return $this->venta;
    }

    /**
     * Set producto
     *
     * @param \InventarioBundle\Entity\Producto $producto
     * @return DetalleVenta
     */
    public function setProducto(\InventarioBundle\Entity\Producto $producto = null)
    {
        $this->producto = $producto;
    
        return $this;
    }

    /**
     * Get producto
     *
     * @return \InventarioBundle\Entity\Producto 
     */
    public function getProducto()
    {
        return $this->producto;
    }
}
