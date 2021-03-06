<?php

namespace DoctrineProxy\__CG__\Jowy\P2bj\Domain\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Paket extends \Jowy\P2bj\Domain\Entity\Paket implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'id', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'user', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'infoPaket', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'dokumen', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'log', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'status', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'createdAt', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'updatedAt');
        }

        return array('__isInitialized__', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'id', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'user', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'infoPaket', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'dokumen', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'log', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'status', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'createdAt', '' . "\0" . 'Jowy\\P2bj\\Domain\\Entity\\Paket' . "\0" . 'updatedAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Paket $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getInfoPaket()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInfoPaket', array());

        return parent::getInfoPaket();
    }

    /**
     * {@inheritDoc}
     */
    public function setInfoPaket($infoPaket)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInfoPaket', array($infoPaket));

        return parent::setInfoPaket($infoPaket);
    }

    /**
     * {@inheritDoc}
     */
    public function getDokumen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDokumen', array());

        return parent::getDokumen();
    }

    /**
     * {@inheritDoc}
     */
    public function setDokumen($dokumen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDokumen', array($dokumen));

        return parent::setDokumen($dokumen);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($status));

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function timestampableCreateEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'timestampableCreateEvent', array());

        return parent::timestampableCreateEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function timestampableUpdateEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'timestampableUpdateEvent', array());

        return parent::timestampableUpdateEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function getLog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLog', array());

        return parent::getLog();
    }

    /**
     * {@inheritDoc}
     */
    public function setLog($log)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLog', array($log));

        return parent::setLog($log);
    }

    /**
     * {@inheritDoc}
     */
    public function addLog(\Jowy\P2bj\Domain\Entity\Log $log)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLog', array($log));

        return parent::addLog($log);
    }

}
