<?php

namespace Proxies\__CG__\DBORM\CSIBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tblfptalert extends \DBORM\CSIBundle\Entity\Tblfptalert implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'pkId', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertother', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertsensitive', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertdsk', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertavih', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertcho', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alerteco', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertoptiplus', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertoptiplustransit', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertuld', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'fkFlightnumber');
        }

        return array('__isInitialized__', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'pkId', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertother', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertsensitive', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertdsk', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertavih', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertcho', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alerteco', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertoptiplus', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertoptiplustransit', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'alertuld', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfptalert' . "\0" . 'fkFlightnumber');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tblfptalert $proxy) {
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
    public function getPkId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getPkId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPkId', array());

        return parent::getPkId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlertother($alertother)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlertother', array($alertother));

        return parent::setAlertother($alertother);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlertother()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlertother', array());

        return parent::getAlertother();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlertsensitive($alertsensitive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlertsensitive', array($alertsensitive));

        return parent::setAlertsensitive($alertsensitive);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlertsensitive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlertsensitive', array());

        return parent::getAlertsensitive();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlertdsk($alertdsk)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlertdsk', array($alertdsk));

        return parent::setAlertdsk($alertdsk);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlertdsk()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlertdsk', array());

        return parent::getAlertdsk();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlertavih($alertavih)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlertavih', array($alertavih));

        return parent::setAlertavih($alertavih);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlertavih()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlertavih', array());

        return parent::getAlertavih();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlertcho($alertcho)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlertcho', array($alertcho));

        return parent::setAlertcho($alertcho);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlertcho()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlertcho', array());

        return parent::getAlertcho();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlerteco($alerteco)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlerteco', array($alerteco));

        return parent::setAlerteco($alerteco);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlerteco()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlerteco', array());

        return parent::getAlerteco();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlertoptiplus($alertoptiplus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlertoptiplus', array($alertoptiplus));

        return parent::setAlertoptiplus($alertoptiplus);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlertoptiplus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlertoptiplus', array());

        return parent::getAlertoptiplus();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlertoptiplustransit($alertoptiplustransit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlertoptiplustransit', array($alertoptiplustransit));

        return parent::setAlertoptiplustransit($alertoptiplustransit);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlertoptiplustransit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlertoptiplustransit', array());

        return parent::getAlertoptiplustransit();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlertuld($alertuld)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlertuld', array($alertuld));

        return parent::setAlertuld($alertuld);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlertuld()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlertuld', array());

        return parent::getAlertuld();
    }

    /**
     * {@inheritDoc}
     */
    public function setFkFlightnumber(\DBORM\CSIBundle\Entity\Tblfptflights $fkFlightnumber = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkFlightnumber', array($fkFlightnumber));

        return parent::setFkFlightnumber($fkFlightnumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkFlightnumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkFlightnumber', array());

        return parent::getFkFlightnumber();
    }

}