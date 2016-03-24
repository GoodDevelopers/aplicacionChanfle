<?php

namespace UsuariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table(name="empleados")
 * @ORM\Entity(repositoryClass="UsuariosBundle\Repository\EmpleadoRepository")
 */
class Empleado
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
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=45)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=11)
     */
    private $telefono;

    /**
     * @var bool
     *
     * @ORM\Column(name="esUsuario", type="boolean")
     */
    private $esUsuario;


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
     * @param integer $nuip
     * @return Empleado
     */
    public function setNuip($nuip)
    {
        $this->nuip = $nuip;
    
        return $this;
    }

    /**
     * Get nuip
     *
     * @return integer 
     */
    public function getNuip()
    {
        return $this->nuip;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Empleado
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
     * Set apellido
     *
     * @param string $apellido
     * @return Empleado
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Empleado
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
     * Set esUsuario
     *
     * @param boolean $esUsuario
     * @return Empleado
     */
    public function setEsUsuario($esUsuario)
    {
        $this->esUsuario = $esUsuario;
    
        return $this;
    }

    /**
     * Get esUsuario
     *
     * @return boolean 
     */
    public function getEsUsuario()
    {
        return $this->esUsuario;
    }

    
}
