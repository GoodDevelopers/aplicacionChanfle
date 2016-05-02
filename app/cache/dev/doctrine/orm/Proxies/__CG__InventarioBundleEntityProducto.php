<?php

namespace Proxies\__CG__\InventarioBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Producto extends \InventarioBundle\Entity\Producto implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'InventarioBundle\\Entity\\Producto' . "\0" . 'id', '' . "\0" . 'InventarioBundle\\Entity\\Producto' . "\0" . 'nombre', '' . "\0" . 'InventarioBundle\\Entity\\Producto' . "\0" . 'precio', '' . "\0" . 'InventarioBundle\\Entity\\Producto' . "\0" . 'detallesVentas', '' . "\0" . 'InventarioBundle\\Entity\\Producto' . "\0" . 'detallesProducto', '' . "\0" . 'InventarioBundle\\Entity\\Producto' . "\0" . 'tipoProducto');
        }

        return array('__isInitialized__', '' . "\0" . 'InventarioBundle\\Entity\\Producto' . "\0" . 'id', '' . "\0" . 'InventarioBundle\\Entity\\Producto' . "\0" . 'nombre', '' . "\0" . 'InventarioBundle\\Entity\\Producto' . "\0" . 'precio', '' . "\0" . 'InventarioBundle\\Entity\\Producto' . "\0" . 'detallesVentas', '' . "\0" . 'InventarioBundle\\Entity\\Producto' . "\0" . 'detallesProducto', '' . "\0" . 'InventarioBundle\\Entity\\Producto' . "\0" . 'tipoProducto');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Producto $proxy) {
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
    public function addDetallesVenta(\VentasBundle\Entity\DetalleVenta $detallesVentas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDetallesVenta', array($detallesVentas));

        return parent::addDetallesVenta($detallesVentas);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDetallesVenta(\VentasBundle\Entity\DetalleVenta $detallesVentas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDetallesVenta', array($detallesVentas));

        return parent::removeDetallesVenta($detallesVentas);
    }

    /**
     * {@inheritDoc}
     */
    public function getDetallesVentas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetallesVentas', array());

        return parent::getDetallesVentas();
    }

    /**
     * {@inheritDoc}
     */
    public function addDetallesProducto(\InventarioBundle\Entity\DetalleProducto $detallesProducto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDetallesProducto', array($detallesProducto));

        return parent::addDetallesProducto($detallesProducto);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDetallesProducto(\InventarioBundle\Entity\DetalleProducto $detallesProducto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDetallesProducto', array($detallesProducto));

        return parent::removeDetallesProducto($detallesProducto);
    }

    /**
     * {@inheritDoc}
     */
    public function getDetallesProducto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetallesProducto', array());

        return parent::getDetallesProducto();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoProducto(\InventarioBundle\Entity\TipoProducto $tipoProducto = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoProducto', array($tipoProducto));

        return parent::setTipoProducto($tipoProducto);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoProducto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoProducto', array());

        return parent::getTipoProducto();
    }

}
