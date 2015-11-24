<?php

namespace Proxies\__CG__\DBORM\OLDCSIBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tblfdverror extends \DBORM\OLDCSIBundle\Entity\Tblfdverror implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfdverror' . "\0" . 'ref', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfdverror' . "\0" . 'flight', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfdverror' . "\0" . 'evtdate', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfdverror' . "\0" . 'desc', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfdverror' . "\0" . 'formatError', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfdverror' . "\0" . 'matricule', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfdverror' . "\0" . 'conn');
        }

        return array('__isInitialized__', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfdverror' . "\0" . 'ref', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfdverror' . "\0" . 'flight', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfdverror' . "\0" . 'evtdate', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfdverror' . "\0" . 'desc', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfdverror' . "\0" . 'formatError', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfdverror' . "\0" . 'matricule', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfdverror' . "\0" . 'conn');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tblfdverror $proxy) {
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
    public function setFlight($flight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFlight', array($flight));

        return parent::setFlight($flight);
    }

    /**
     * {@inheritDoc}
     */
    public function getFlight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFlight', array());

        return parent::getFlight();
    }

    /**
     * {@inheritDoc}
     */
    public function setEvtdate($evtdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEvtdate', array($evtdate));

        return parent::setEvtdate($evtdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvtdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvtdate', array());

        return parent::getEvtdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setRef($ref)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRef', array($ref));

        return parent::setRef($ref);
    }

    /**
     * {@inheritDoc}
     */
    public function getRef()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getRef();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRef', array());

        return parent::getRef();
    }

    /**
     * {@inheritDoc}
     */
    public function setDesc($desc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDesc', array($desc));

        return parent::setDesc($desc);
    }

    /**
     * {@inheritDoc}
     */
    public function getDesc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDesc', array());

        return parent::getDesc();
    }

    /**
     * {@inheritDoc}
     */
    public function setFormatError($formatError)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFormatError', array($formatError));

        return parent::setFormatError($formatError);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormatError()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormatError', array());

        return parent::getFormatError();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatricule($matricule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatricule', array($matricule));

        return parent::setMatricule($matricule);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatricule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatricule', array());

        return parent::getMatricule();
    }

    /**
     * {@inheritDoc}
     */
    public function getDayCriticalError($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDayCriticalError', array($date));

        return parent::getDayCriticalError($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDayCriticalErrorMsg($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDayCriticalErrorMsg', array($date));

        return parent::getDayCriticalErrorMsg($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getCritErrorMsgHistoDays($nbHistoDays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCritErrorMsgHistoDays', array($nbHistoDays));

        return parent::getCritErrorMsgHistoDays($nbHistoDays);
    }

}
