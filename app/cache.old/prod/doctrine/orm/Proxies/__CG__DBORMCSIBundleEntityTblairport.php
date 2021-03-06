<?php

namespace Proxies\__CG__\DBORM\CSIBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tblairport extends \DBORM\CSIBundle\Entity\Tblairport implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblairport' . "\0" . 'pkAirportCode', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblairport' . "\0" . 'airport', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblairport' . "\0" . 'fsczone', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblairport' . "\0" . 'fsczoneid1', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblairport' . "\0" . 'fsczoneid2', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblairport' . "\0" . 'fkCityCode', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblairport' . "\0" . 'fkCountryCode');
        }

        return array('__isInitialized__', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblairport' . "\0" . 'pkAirportCode', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblairport' . "\0" . 'airport', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblairport' . "\0" . 'fsczone', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblairport' . "\0" . 'fsczoneid1', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblairport' . "\0" . 'fsczoneid2', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblairport' . "\0" . 'fkCityCode', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblairport' . "\0" . 'fkCountryCode');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tblairport $proxy) {
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
    public function getPkAirportCode()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getPkAirportCode();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPkAirportCode', array());

        return parent::getPkAirportCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setAirport($airport)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAirport', array($airport));

        return parent::setAirport($airport);
    }

    /**
     * {@inheritDoc}
     */
    public function getAirport()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAirport', array());

        return parent::getAirport();
    }

    /**
     * {@inheritDoc}
     */
    public function setFsczone($fsczone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFsczone', array($fsczone));

        return parent::setFsczone($fsczone);
    }

    /**
     * {@inheritDoc}
     */
    public function getFsczone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFsczone', array());

        return parent::getFsczone();
    }

    /**
     * {@inheritDoc}
     */
    public function setFsczoneid1($fsczoneid1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFsczoneid1', array($fsczoneid1));

        return parent::setFsczoneid1($fsczoneid1);
    }

    /**
     * {@inheritDoc}
     */
    public function getFsczoneid1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFsczoneid1', array());

        return parent::getFsczoneid1();
    }

    /**
     * {@inheritDoc}
     */
    public function setFsczoneid2($fsczoneid2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFsczoneid2', array($fsczoneid2));

        return parent::setFsczoneid2($fsczoneid2);
    }

    /**
     * {@inheritDoc}
     */
    public function getFsczoneid2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFsczoneid2', array());

        return parent::getFsczoneid2();
    }

    /**
     * {@inheritDoc}
     */
    public function setFkCityCode(\DBORM\CSIBundle\Entity\Tblcity $fkCityCode = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkCityCode', array($fkCityCode));

        return parent::setFkCityCode($fkCityCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkCityCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkCityCode', array());

        return parent::getFkCityCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setFkCountryCode(\DBORM\CSIBundle\Entity\Tblcountry $fkCountryCode = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkCountryCode', array($fkCountryCode));

        return parent::setFkCountryCode($fkCountryCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkCountryCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkCountryCode', array());

        return parent::getFkCountryCode();
    }

}
