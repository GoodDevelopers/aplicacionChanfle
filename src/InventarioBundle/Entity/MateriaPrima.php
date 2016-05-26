<?php

namespace InventarioBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * MateriaPrima
 *
 * @ORM\Table(name="materiasPrima")
 * @ORM\Entity(repositoryClass="InventarioBundle\Repository\MateriaPrimaRepository")
 */
class MateriaPrima
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
     * @ORM\Column(name="nombre", type="string", length=30)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="UnidadDeMedida", type="string", length=15)
     */
    private $unidadDeMedida;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float")
     */
    private $cantidad;

    /**
     * @var int
     *
     * @ORM\Column(name="precio", type="integer")
     */
    private $precio;

    /**
     * @var int
     *
     * @ORM\Column(name="stockMinimo", type="integer")
     */
    private $stockMinimo;


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
     * @return MateriaPrima
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
     * Set unidadDeMedida
     *
     * @param string $unidadDeMedida
     * @return MateriaPrima
     */
    public function setUnidadDeMedida($unidadDeMedida)
    {
        $this->unidadDeMedida = $unidadDeMedida;
    
        return $this;
    }

    /**
     * Get unidadDeMedida
     *
     * @return string 
     */
    public function getUnidadDeMedida()
    {
        return $this->unidadDeMedida;
    }

    /**
     * Set cantidad
     *
     * @param float $cantidad
     * @return MateriaPrima
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return float 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     * @return MateriaPrima
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
     * Set stockMinimo
     *
     * @param integer $stockMinimo
     * @return MateriaPrima
     */
    public function setStockMinimo($stockMinimo)
    {
        $this->stockMinimo = $stockMinimo;
    
        return $this;
    }

    /**
     * Get stockMinimo
     *
     * @return integer 
     */
    public function getStockMinimo()
    {
        return $this->stockMinimo;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="IngresoMateriaPrima", mappedBy="materiaPrima")
     */
    private $ingresosMateriaPrima;
    
    /**
     * @ORM\OneToMany(targetEntity="DetalleProducto", mappedBy="materiaPrima")
     */
    private $detallesProductos;
    
    function __construct() {
        $this->ingresosMateriaPrima = new ArrayCollection();
        $this->detallesProductos = new ArrayCollection();
    }


    /**
     * Add ingresosMateriaPrima
     *
     * @param \InventarioBundle\Entity\IngresoMateriaPrima $ingresosMateriaPrima
     * @return MateriaPrima
     */
    public function addIngresosMateriaPrima(\InventarioBundle\Entity\IngresoMateriaPrima $ingresosMateriaPrima)
    {
        $this->ingresosMateriaPrima[] = $ingresosMateriaPrima;
    
        return $this;
    }

    /**
     * Remove ingresosMateriaPrima
     *
     * @param \InventarioBundle\Entity\IngresoMateriaPrima $ingresosMateriaPrima
     */
    public function removeIngresosMateriaPrima(\InventarioBundle\Entity\IngresoMateriaPrima $ingresosMateriaPrima)
    {
        $this->ingresosMateriaPrima->removeElement($ingresosMateriaPrima);
    }

    /**
     * Get ingresosMateriaPrima
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIngresosMateriaPrima()
    {
        return $this->ingresosMateriaPrima;
    }

    /**
     * Add detallesProductos
     *
     * @param \InventarioBundle\Entity\DetalleProducto $detallesProductos
     * @return MateriaPrima
     */
    public function addDetallesProducto(\InventarioBundle\Entity\DetalleProducto $detallesProductos)
    {
        $this->detallesProductos[] = $detallesProductos;
    
        return $this;
    }

    /**
     * Remove detallesProductos
     *
     * @param \InventarioBundle\Entity\DetalleProducto $detallesProductos
     */
    public function removeDetallesProducto(\InventarioBundle\Entity\DetalleProducto $detallesProductos)
    {
        $this->detallesProductos->removeElement($detallesProductos);
    }

    /**
     * Get detallesProductos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetallesProductos()
    {
        return $this->detallesProductos;
    }
}
