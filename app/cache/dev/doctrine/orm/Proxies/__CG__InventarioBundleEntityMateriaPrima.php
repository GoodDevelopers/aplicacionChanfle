<?php

namespace Proxies\__CG__\InventarioBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MateriaPrima extends \InventarioBundle\Entity\MateriaPrima implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'id', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'nombre', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'unidadDeMedida', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'cantidad', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'precio', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'stockMinimo', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'ingresosMateriaPrima', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'detallesProductos');
        }

        return array('__isInitialized__', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'id', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'nombre', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'unidadDeMedida', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'cantidad', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'precio', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'stockMinimo', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'ingresosMateriaPrima', '' . "\0" . 'InventarioBundle\\Entity\\MateriaPrima' . "\0" . 'detallesProductos');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MateriaPrima $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnidadDeMedida($unidadDeMedida)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnidadDeMedida', array($unidadDeMedida));

        return parent::setUnidadDeMedida($unidadDeMedida);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnidadDeMedida()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnidadDeMedida', array());

        return parent::getUnidadDeMedida();
    }

    /**
     * {@inheritDoc}
     */
    public function setCantidad($cantidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCantidad', array($cantidad));

        return parent::setCantidad($cantidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getCantidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCantidad', array());

        return parent::getCantidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrecio($precio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrecio', array($precio));

        return parent::setPrecio($precio);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrecio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrecio', array());

        return parent::getPrecio();
    }

    /**
     * {@inheritDoc}
     */
    public function setStockMinimo($stockMinimo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStockMinimo', array($stockMinimo));

        return parent::setStockMinimo($stockMinimo);
    }

    /**
     * {@inheritDoc}
     */
    public function getStockMinimo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockMinimo', array());

        return parent::getStockMinimo();
    }

    /**
     * {@inheritDoc}
     */
    public function addIngresosMateriaPrima(\InventarioBundle\Entity\IngresoMateriaPrima $ingresosMateriaPrima)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIngresosMateriaPrima', array($ingresosMateriaPrima));

        return parent::addIngresosMateriaPrima($ingresosMateriaPrima);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIngresosMateriaPrima(\InventarioBundle\Entity\IngresoMateriaPrima $ingresosMateriaPrima)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIngresosMateriaPrima', array($ingresosMateriaPrima));

        return parent::removeIngresosMateriaPrima($ingresosMateriaPrima);
    }

    /**
     * {@inheritDoc}
     */
    public function getIngresosMateriaPrima()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIngresosMateriaPrima', array());

        return parent::getIngresosMateriaPrima();
    }

    /**
     * {@inheritDoc}
     */
    public function addDetallesProducto(\InventarioBundle\Entity\DetalleProducto $detallesProductos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDetallesProducto', array($detallesProductos));

        return parent::addDetallesProducto($detallesProductos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDetallesProducto(\InventarioBundle\Entity\DetalleProducto $detallesProductos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDetallesProducto', array($detallesProductos));

        return parent::removeDetallesProducto($detallesProductos);
    }

    /**
     * {@inheritDoc}
     */
    public function getDetallesProductos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetallesProductos', array());

        return parent::getDetallesProductos();
    }

}
