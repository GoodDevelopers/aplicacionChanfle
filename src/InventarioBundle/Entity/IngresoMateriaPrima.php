<?php

namespace InventarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IngresoMateriaPrima
 *
 * @ORM\Table(name="ingresosMateriaPrima")
 * @ORM\Entity(repositoryClass="InventarioBundle\Repository\IngresoMateriaPrimaRepository")
 */
class IngresoMateriaPrima {

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
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

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
    public function getId() {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return IngresoMateriaPrima
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
     * @return IngresoMateriaPrima
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
     * Set valor
     *
     * @param integer $valor
     * @return IngresoMateriaPrima
     */
    public function setValor($valor) {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return integer 
     */
    public function getValor() {
        return $this->valor;
    }

    /**
     * @ORM\ManyToOne(targetEntity="MateriaPrima", inversedBy="ingresosMateriaPrima")
     * @ORM\JoinColumn(name="idMateriaPrima", referencedColumnName="id")
     */
    private $materiaPrima;
    
    // --- Relacion Unidireccional ---
    /**
     * @ORM\ManyToOne(targetEntity="UsuariosBundle\Entity\Empleado")
     * @ORM\JoinColumn(name="idEmpleado", referencedColumnName="id")
     */
    private $empleado;
    
    /**
     * @ORM\ManyToOne(targetEntity="Proveedor", inversedBy="materiaPrimaProveida")
     * @ORM\JoinColumn(name="idProveedor", referencedColumnName="id")
     */
    private $proveedor;


    /**
     * Set materiaPrima
     *
     * @param \InventarioBundle\Entity\MateriaPrima $materiaPrima
     * @return IngresoMateriaPrima
     */
    public function setMateriaPrima(\InventarioBundle\Entity\MateriaPrima $materiaPrima = null)
    {
        $this->materiaPrima = $materiaPrima;
    
        return $this;
    }

    /**
     * Get materiaPrima
     *
     * @return \InventarioBundle\Entity\MateriaPrima 
     */
    public function getMateriaPrima()
    {
        return $this->materiaPrima;
    }

    /**
     * Set empleado
     *
     * @param \UsuariosBundle\Entity\Empleado $empleado
     * @return IngresoMateriaPrima
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
     * Set proveedor
     *
     * @param \InventarioBundle\Entity\Proveedor $proveedor
     * @return IngresoMateriaPrima
     */
    public function setProveedor(\InventarioBundle\Entity\Proveedor $proveedor = null)
    {
        $this->proveedor = $proveedor;
    
        return $this;
    }

    /**
     * Get proveedor
     *
     * @return \InventarioBundle\Entity\Proveedor 
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }
}
