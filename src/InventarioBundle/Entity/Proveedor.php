<?php

namespace InventarioBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedor
 *
 * @ORM\Table(name="proveedores")
 * @ORM\Entity(repositoryClass="InventarioBundle\Repository\ProveedorRepository")
 */
class Proveedor
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
     * @ORM\Column(name="nit", type="string", length=20, unique=true)
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=11)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=40)
     */
    private $correo;


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
     * Set nit
     *
     * @param string $nit
     * @return Proveedor
     */
    public function setNit($nit)
    {
        $this->nit = $nit;
    
        return $this;
    }

    /**
     * Get nit
     *
     * @return string 
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Proveedor
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
     * Set telefono
     *
     * @param string $telefono
     * @return Proveedor
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Proveedor
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    
        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="IngresoMateriaPrima", mappedBy="proveedor")
     */
    private $materiaPrimaProveida;
    
    function __construct() {
        $this->materiaPrimaProveida = new ArrayCollection();
    }

    

    /**
     * Add materiaPrimaProveida
     *
     * @param \InventarioBundle\Entity\IngresoMateriaPrima $materiaPrimaProveida
     * @return Proveedor
     */
    public function addMateriaPrimaProveida(\InventarioBundle\Entity\IngresoMateriaPrima $materiaPrimaProveida)
    {
        $this->materiaPrimaProveida[] = $materiaPrimaProveida;
    
        return $this;
    }

    /**
     * Remove materiaPrimaProveida
     *
     * @param \InventarioBundle\Entity\IngresoMateriaPrima $materiaPrimaProveida
     */
    public function removeMateriaPrimaProveida(\InventarioBundle\Entity\IngresoMateriaPrima $materiaPrimaProveida)
    {
        $this->materiaPrimaProveida->removeElement($materiaPrimaProveida);
    }

    /**
     * Get materiaPrimaProveida
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMateriaPrimaProveida()
    {
        return $this->materiaPrimaProveida;
    }
}
