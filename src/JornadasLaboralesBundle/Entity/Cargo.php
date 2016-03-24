<?php

namespace JornadasLaboralesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cargo
 *
 * @ORM\Table(name="cargos")
 * @ORM\Entity(repositoryClass="JornadasLaboralesBundle\Repository\CargoRepository")
 */
class Cargo {

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
     * @ORM\Column(name="nombre", type="string", length=50, unique=true)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="salario", type="integer")
     */
    private $salario;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Cargo
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set salario
     *
     * @param integer $salario
     * @return Cargo
     */
    public function setSalario($salario) {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get salario
     *
     * @return integer 
     */
    public function getSalario() {
        return $this->salario;
    }

}
