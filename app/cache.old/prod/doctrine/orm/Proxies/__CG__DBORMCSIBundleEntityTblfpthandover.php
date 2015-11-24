<?php

namespace Proxies\__CG__\DBORM\CSIBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tblfpthandover extends \DBORM\CSIBundle\Entity\Tblfpthandover implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfpthandover' . "\0" . 'pkId', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfpthandover' . "\0" . 'comment', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfpthandover' . "\0" . 'alreadytried', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfpthandover' . "\0" . 'starttimeevt', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfpthandover' . "\0" . 'fkFlightnumber', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfpthandover' . "\0" . 'fkStatus', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfpthandover' . "\0" . 'conn');
        }

        return array('__isInitialized__', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfpthandover' . "\0" . 'pkId', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfpthandover' . "\0" . 'comment', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfpthandover' . "\0" . 'alreadytried', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfpthandover' . "\0" . 'starttimeevt', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfpthandover' . "\0" . 'fkFlightnumber', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfpthandover' . "\0" . 'fkStatus', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tblfpthandover' . "\0" . 'conn');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tblfpthandover $proxy) {
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
    public function setComment($comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComment', array($comment));

        return parent::setComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function getComment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComment', array());

        return parent::getComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlreadytried($alreadytried)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlreadytried', array($alreadytried));

        return parent::setAlreadytried($alreadytried);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlreadytried()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlreadytried', array());

        return parent::getAlreadytried();
    }

    /**
     * {@inheritDoc}
     */
    public function setStarttimeevt($starttimeevt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStarttimeevt', array($starttimeevt));

        return parent::setStarttimeevt($starttimeevt);
    }

    /**
     * {@inheritDoc}
     */
    public function getStarttimeevt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStarttimeevt', array());

        return parent::getStarttimeevt();
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

    /**
     * {@inheritDoc}
     */
    public function setFkStatus(\DBORM\CSIBundle\Entity\Tblfptstatus $fkStatus = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkStatus', array($fkStatus));

        return parent::setFkStatus($fkStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkStatus', array());

        return parent::getFkStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function getDayHandoverDone($date, $hour1 = '00:00:00', $hour2 = '23:59:59')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDayHandoverDone', array($date, $hour1, $hour2));

        return parent::getDayHandoverDone($date, $hour1, $hour2);
    }

}