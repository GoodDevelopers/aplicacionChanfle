<?php

namespace UsuariosBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="clientes")
 * @ORM\Entity(repositoryClass="UsuariosBundle\Repository\ClienteRepository")
 */
class Cliente
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
     * @ORM\Column(name="nuip", type="string", length=11, unique=true)
     */
    private $nuip;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=40)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaDeNacimiento", type="datetime")
     */
    private $fechaDeNacimiento;

    /**
     * @var int
     *
     * @ORM\Column(name="puntosAcumulados", type="integer")
     */
    private $puntosAcumulados;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=40)
     */
    private $email;


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
     * Set nuip
     *
     * @param string $nuip
     * @return Cliente
     */
    public function setNuip($nuip)
    {
        $this->nuip = $nuip;
    
        return $this;
    }

    /**
     * Get nuip
     *
     * @return string 
     */
    public function getNuip()
    {
        return $this->nuip;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Cliente
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
     * Set fechaDeNacimiento
     *
     * @param \DateTime $fechaDeNacimiento
     * @return Cliente
     */
    public function setFechaDeNacimiento($fechaDeNacimiento)
    {
        $this->fechaDeNacimiento = $fechaDeNacimiento;
    
        return $this;
    }

    /**
     * Get fechaDeNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaDeNacimiento()
    {
        return $this->fechaDeNacimiento;
    }

    /**
     * Set puntosAcumulados
     *
     * @param integer $puntosAcumulados
     * @return Cliente
     */
    public function setPuntosAcumulados($puntosAcumulados)
    {
        $this->puntosAcumulados = $puntosAcumulados;
    
        return $this;
    }

    /**
     * Get puntosAcumulados
     *
     * @return integer 
     */
    public function getPuntosAcumulados()
    {
        return $this->puntosAcumulados;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="VentasBundle\Entity\Venta", mappedBy="cliente")
     */
    private $compras;
    
    function __construct() {
        $this->compras = new ArrayCollection();
    }


    /**
     * Add compras
     *
     * @param \VentasBundle\Entity\Venta $compras
     * @return Cliente
     */
    public function addCompra(\VentasBundle\Entity\Venta $compras)
    {
        $this->compras[] = $compras;
    
        return $this;
    }

    /**
     * Remove compras
     *
     * @param \VentasBundle\Entity\Venta $compras
     */
    public function removeCompra(\VentasBundle\Entity\Venta $compras)
    {
        $this->compras->removeElement($compras);
    }

    /**
     * Get compras
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCompras()
    {
        return $this->compras;
    }
}
