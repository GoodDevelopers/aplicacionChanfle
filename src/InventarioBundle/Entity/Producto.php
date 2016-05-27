<?php

namespace InventarioBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="productos")
 * @ORM\Entity(repositoryClass="InventarioBundle\Repository\ProductoRepository")
 */
class Producto
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=40, unique=true)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="precio", type="integer")
     */
    private $precio;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     * @return Producto
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    
        return $this;
    }

    /**
     * Get precio
     *
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="VentasBundle\Entity\DetalleVenta", mappedBy="producto")
     */
    private $detallesVentas;
    
    /**
     * @ORM\OneToMany(targetEntity="DetalleProducto", mappedBy="producto", cascade="all")
     */
    private $detallesProducto;
    
    /**
     * @ORM\ManyToOne(targetEntity="TipoProducto", inversedBy="productos")
     * @ORM\JoinColumn(name="tipoProducto", referencedColumnName="id")
     */
    private $tipoProducto;
    
    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="string", length=255)
     */
    private $ruta;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;
    
    function __construct() {
        $this->detallesVentas = new ArrayCollection();
        $this->detallesProducto = new ArrayCollection();
    }


    /**
     * Add detallesVentas
     *
     * @param \VentasBundle\Entity\DetalleVenta $detallesVentas
     * @return Producto
     */
    public function addDetallesVenta(\VentasBundle\Entity\DetalleVenta $detallesVentas)
    {
        $this->detallesVentas[] = $detallesVentas;
    
        return $this;
    }

    /**
     * Remove detallesVentas
     *
     * @param \VentasBundle\Entity\DetalleVenta $detallesVentas
     */
    public function removeDetallesVenta(\VentasBundle\Entity\DetalleVenta $detallesVentas)
    {
        $this->detallesVentas->removeElement($detallesVentas);
    }

    /**
     * Get detallesVentas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetallesVentas()
    {
        return $this->detallesVentas;
    }

    /**
     * Add detallesProducto
     *
     * @param \InventarioBundle\Entity\DetalleProducto $detallesProducto
     * @return Producto
     */
    public function addDetallesProducto(\InventarioBundle\Entity\DetalleProducto $detallesProducto)
    {
        $this->detallesProducto[] = $detallesProducto;
    
        return $this;
    }

    /**
     * Remove detallesProducto
     *
     * @param \InventarioBundle\Entity\DetalleProducto $detallesProducto
     */
    public function removeDetallesProducto(\InventarioBundle\Entity\DetalleProducto $detallesProducto)
    {
        $this->detallesProducto->removeElement($detallesProducto);
    }

    /**
     * Get detallesProducto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetallesProducto()
    {
        return $this->detallesProducto;
    }

    /**
     * Set tipoProducto
     *
     * @param \InventarioBundle\Entity\TipoProducto $tipoProducto
     * @return Producto
     */
    public function setTipoProducto(\InventarioBundle\Entity\TipoProducto $tipoProducto = null)
    {
        $this->tipoProducto = $tipoProducto;
    
        return $this;
    }

    /**
     * Get tipoProducto
     *
     * @return \InventarioBundle\Entity\TipoProducto 
     */
    public function getTipoProducto()
    {
        return $this->tipoProducto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Producto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set ruta
     *
     * @param string $ruta
     * @return Producto
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;
    
        return $this;
    }

    /**
     * Get ruta
     *
     * @return string 
     */
    public function getRuta()
    {
        return $this->ruta;
    }
}
