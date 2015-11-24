<?php

namespace Proxies\__CG__\DBORM\CSIBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tblfptflights extends \DBORM\CSIBundle\Entity\Tblfptflights implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'pkFlightnumber', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'pkFlightdate', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'pkVersion', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'edt', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'datecreation', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'datedflightinstruction', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'finalisation', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'prepointage', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'inratable', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'ponctualite', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'fkUser', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'fkAircrafttype');
        }

        return array('__isInitialized__', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'pkFlightnumber', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'pkFlightdate', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'pkVersion', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'edt', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'datecreation', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'datedflightinstruction', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'finalisation', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'prepointage', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'inratable', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'ponctualite', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'fkUser', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptflights' . "\0" . 'fkAircrafttype');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tblfptflights $proxy) {
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
    public function setPkFlightnumber($pkFlightnumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPkFlightnumber', array($pkFlightnumber));

        return parent::setPkFlightnumber($pkFlightnumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getPkFlightnumber()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getPkFlightnumber();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPkFlightnumber', array());

        return parent::getPkFlightnumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setPkFlightdate($pkFlightdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPkFlightdate', array($pkFlightdate));

        return parent::setPkFlightdate($pkFlightdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getPkFlightdate()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getPkFlightdate();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPkFlightdate', array());

        return parent::getPkFlightdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setPkVersion($pkVersion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPkVersion', array($pkVersion));

        return parent::setPkVersion($pkVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPkVersion()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getPkVersion();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPkVersion', array());

        return parent::getPkVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setEdt($edt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEdt', array($edt));

        return parent::setEdt($edt);
    }

    /**
     * {@inheritDoc}
     */
    public function getEdt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEdt', array());

        return parent::getEdt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatecreation($datecreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatecreation', array($datecreation));

        return parent::setDatecreation($datecreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatecreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatecreation', array());

        return parent::getDatecreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatedflightinstruction($datedflightinstruction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatedflightinstruction', array($datedflightinstruction));

        return parent::setDatedflightinstruction($datedflightinstruction);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatedflightinstruction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatedflightinstruction', array());

        return parent::getDatedflightinstruction();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinalisation($finalisation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinalisation', array($finalisation));

        return parent::setFinalisation($finalisation);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinalisation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinalisation', array());

        return parent::getFinalisation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrepointage($prepointage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrepointage', array($prepointage));

        return parent::setPrepointage($prepointage);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrepointage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrepointage', array());

        return parent::getPrepointage();
    }

    /**
     * {@inheritDoc}
     */
    public function setInratable($inratable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInratable', array($inratable));

        return parent::setInratable($inratable);
    }

    /**
     * {@inheritDoc}
     */
    public function getInratable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInratable', array());

        return parent::getInratable();
    }

    /**
     * {@inheritDoc}
     */
    public function setPonctualite($ponctualite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPonctualite', array($ponctualite));

        return parent::setPonctualite($ponctualite);
    }

    /**
     * {@inheritDoc}
     */
    public function getPonctualite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPonctualite', array());

        return parent::getPonctualite();
    }

    /**
     * {@inheritDoc}
     */
    public function setFkUser(\DBORM\CSIBundle\Entity\Tbluser $fkUser = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkUser', array($fkUser));

        return parent::setFkUser($fkUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkUser', array());

        return parent::getFkUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setFkAircrafttype(\DBORM\CSIBundle\Entity\Tblaircrafttype $fkAircrafttype = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkAircrafttype', array($fkAircrafttype));

        return parent::setFkAircrafttype($fkAircrafttype);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkAircrafttype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkAircrafttype', array());

        return parent::getFkAircrafttype();
    }

}