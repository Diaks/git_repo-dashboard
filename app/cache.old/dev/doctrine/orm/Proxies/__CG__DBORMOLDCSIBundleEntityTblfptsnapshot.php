<?php

namespace Proxies\__CG__\DBORM\OLDCSIBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tblfptsnapshot extends \DBORM\OLDCSIBundle\Entity\Tblfptsnapshot implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'flightnumber', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'flightdate', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'datecreation', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'analyst', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'handover', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'aircrafttype', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'routing', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'edt', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'opticofweight', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'opticofpmd', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'opticofpld', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'opticofake', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'totalweight', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'totalpmd', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'totalpld', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'totalake', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'dskpmd', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'dskpld', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'dskake', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertother', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertsensitive', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertdsk', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertavih', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertuld', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertcho', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alerteco', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'totalgrossweight', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'analystid', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'workorder', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertoptiplus', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'datedfltInstruct', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'pr�pointage', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'sdxake', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'sdxlooseWgt', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'sdxlooseVol', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'version', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'narWgt', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'onhWgt', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'naronhWgt', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'narPour', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'onhPour', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'naronhPour', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertoptiplusTransit', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'finalisation');
        }

        return array('__isInitialized__', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'flightnumber', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'flightdate', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'datecreation', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'analyst', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'handover', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'aircrafttype', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'routing', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'edt', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'opticofweight', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'opticofpmd', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'opticofpld', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'opticofake', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'totalweight', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'totalpmd', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'totalpld', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'totalake', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'dskpmd', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'dskpld', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'dskake', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertother', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertsensitive', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertdsk', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertavih', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertuld', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertcho', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alerteco', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'totalgrossweight', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'analystid', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'workorder', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertoptiplus', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'datedfltInstruct', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'pr�pointage', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'sdxake', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'sdxlooseWgt', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'sdxlooseVol', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'version', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'narWgt', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'onhWgt', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'naronhWgt', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'narPour', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'onhPour', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'naronhPour', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'alertoptiplusTransit', '' . "\0" . 'DBORM\\OLDCSIBundle\\Entity\\Tblfptsnapshot' . "\0" . 'finalisation');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tblfptsnapshot $proxy) {
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
    public function setFlightnumber($flightnumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFlightnumber', array($flightnumber));

        return parent::setFlightnumber($flightnumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getFlightnumber()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getFlightnumber();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFlightnumber', array());

        return parent::getFlightnumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setFlightdate($flightdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFlightdate', array($flightdate));

        return parent::setFlightdate($flightdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getFlightdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFlightdate', array());

        return parent::getFlightdate();
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
    public function setAnalyst($analyst)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnalyst', array($analyst));

        return parent::setAnalyst($analyst);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnalyst()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnalyst', array());

        return parent::getAnalyst();
    }

    /**
     * {@inheritDoc}
     */
    public function setHandover($handover)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHandover', array($handover));

        return parent::setHandover($handover);
    }

    /**
     * {@inheritDoc}
     */
    public function getHandover()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHandover', array());

        return parent::getHandover();
    }

    /**
     * {@inheritDoc}
     */
    public function setAircrafttype($aircrafttype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAircrafttype', array($aircrafttype));

        return parent::setAircrafttype($aircrafttype);
    }

    /**
     * {@inheritDoc}
     */
    public function getAircrafttype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAircrafttype', array());

        return parent::getAircrafttype();
    }

    /**
     * {@inheritDoc}
     */
    public function setRouting($routing)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRouting', array($routing));

        return parent::setRouting($routing);
    }

    /**
     * {@inheritDoc}
     */
    public function getRouting()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRouting', array());

        return parent::getRouting();
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
    public function setOpticofweight($opticofweight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpticofweight', array($opticofweight));

        return parent::setOpticofweight($opticofweight);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpticofweight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpticofweight', array());

        return parent::getOpticofweight();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpticofpmd($opticofpmd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpticofpmd', array($opticofpmd));

        return parent::setOpticofpmd($opticofpmd);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpticofpmd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpticofpmd', array());

        return parent::getOpticofpmd();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpticofpld($opticofpld)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpticofpld', array($opticofpld));

        return parent::setOpticofpld($opticofpld);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpticofpld()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpticofpld', array());

        return parent::getOpticofpld();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpticofake($opticofake)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpticofake', array($opticofake));

        return parent::setOpticofake($opticofake);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpticofake()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpticofake', array());

        return parent::getOpticofake();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalweight($totalweight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalweight', array($totalweight));

        return parent::setTotalweight($totalweight);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalweight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalweight', array());

        return parent::getTotalweight();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalpmd($totalpmd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalpmd', array($totalpmd));

        return parent::setTotalpmd($totalpmd);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalpmd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalpmd', array());

        return parent::getTotalpmd();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalpld($totalpld)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalpld', array($totalpld));

        return parent::setTotalpld($totalpld);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalpld()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalpld', array());

        return parent::getTotalpld();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalake($totalake)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalake', array($totalake));

        return parent::setTotalake($totalake);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalake()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalake', array());

        return parent::getTotalake();
    }

    /**
     * {@inheritDoc}
     */
    public function setDskpmd($dskpmd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDskpmd', array($dskpmd));

        return parent::setDskpmd($dskpmd);
    }

    /**
     * {@inheritDoc}
     */
    public function getDskpmd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDskpmd', array());

        return parent::getDskpmd();
    }

    /**
     * {@inheritDoc}
     */
    public function setDskpld($dskpld)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDskpld', array($dskpld));

        return parent::setDskpld($dskpld);
    }

    /**
     * {@inheritDoc}
     */
    public function getDskpld()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDskpld', array());

        return parent::getDskpld();
    }

    /**
     * {@inheritDoc}
     */
    public function setDskake($dskake)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDskake', array($dskake));

        return parent::setDskake($dskake);
    }

    /**
     * {@inheritDoc}
     */
    public function getDskake()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDskake', array());

        return parent::getDskake();
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
    public function setTotalgrossweight($totalgrossweight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalgrossweight', array($totalgrossweight));

        return parent::setTotalgrossweight($totalgrossweight);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalgrossweight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalgrossweight', array());

        return parent::getTotalgrossweight();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnalystid($analystid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnalystid', array($analystid));

        return parent::setAnalystid($analystid);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnalystid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnalystid', array());

        return parent::getAnalystid();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkorder($workorder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkorder', array($workorder));

        return parent::setWorkorder($workorder);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkorder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkorder', array());

        return parent::getWorkorder();
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
    public function setDatedfltInstruct($datedfltInstruct)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatedfltInstruct', array($datedfltInstruct));

        return parent::setDatedfltInstruct($datedfltInstruct);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatedfltInstruct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatedfltInstruct', array());

        return parent::getDatedfltInstruct();
    }

    /**
     * {@inheritDoc}
     */
    public function setPr�pointage($pr�pointage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPr�pointage', array($pr�pointage));

        return parent::setPr�pointage($pr�pointage);
    }

    /**
     * {@inheritDoc}
     */
    public function getPr�pointage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPr�pointage', array());

        return parent::getPr�pointage();
    }

    /**
     * {@inheritDoc}
     */
    public function setSdxake($sdxake)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSdxake', array($sdxake));

        return parent::setSdxake($sdxake);
    }

    /**
     * {@inheritDoc}
     */
    public function getSdxake()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSdxake', array());

        return parent::getSdxake();
    }

    /**
     * {@inheritDoc}
     */
    public function setSdxlooseWgt($sdxlooseWgt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSdxlooseWgt', array($sdxlooseWgt));

        return parent::setSdxlooseWgt($sdxlooseWgt);
    }

    /**
     * {@inheritDoc}
     */
    public function getSdxlooseWgt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSdxlooseWgt', array());

        return parent::getSdxlooseWgt();
    }

    /**
     * {@inheritDoc}
     */
    public function setSdxlooseVol($sdxlooseVol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSdxlooseVol', array($sdxlooseVol));

        return parent::setSdxlooseVol($sdxlooseVol);
    }

    /**
     * {@inheritDoc}
     */
    public function getSdxlooseVol()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSdxlooseVol', array());

        return parent::getSdxlooseVol();
    }

    /**
     * {@inheritDoc}
     */
    public function setVersion($version)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVersion', array($version));

        return parent::setVersion($version);
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersion', array());

        return parent::getVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setNarWgt($narWgt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNarWgt', array($narWgt));

        return parent::setNarWgt($narWgt);
    }

    /**
     * {@inheritDoc}
     */
    public function getNarWgt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNarWgt', array());

        return parent::getNarWgt();
    }

    /**
     * {@inheritDoc}
     */
    public function setOnhWgt($onhWgt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOnhWgt', array($onhWgt));

        return parent::setOnhWgt($onhWgt);
    }

    /**
     * {@inheritDoc}
     */
    public function getOnhWgt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOnhWgt', array());

        return parent::getOnhWgt();
    }

    /**
     * {@inheritDoc}
     */
    public function setNaronhWgt($naronhWgt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNaronhWgt', array($naronhWgt));

        return parent::setNaronhWgt($naronhWgt);
    }

    /**
     * {@inheritDoc}
     */
    public function getNaronhWgt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNaronhWgt', array());

        return parent::getNaronhWgt();
    }

    /**
     * {@inheritDoc}
     */
    public function setNarPour($narPour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNarPour', array($narPour));

        return parent::setNarPour($narPour);
    }

    /**
     * {@inheritDoc}
     */
    public function getNarPour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNarPour', array());

        return parent::getNarPour();
    }

    /**
     * {@inheritDoc}
     */
    public function setOnhPour($onhPour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOnhPour', array($onhPour));

        return parent::setOnhPour($onhPour);
    }

    /**
     * {@inheritDoc}
     */
    public function getOnhPour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOnhPour', array());

        return parent::getOnhPour();
    }

    /**
     * {@inheritDoc}
     */
    public function setNaronhPour($naronhPour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNaronhPour', array($naronhPour));

        return parent::setNaronhPour($naronhPour);
    }

    /**
     * {@inheritDoc}
     */
    public function getNaronhPour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNaronhPour', array());

        return parent::getNaronhPour();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlertoptiplusTransit($alertoptiplusTransit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlertoptiplusTransit', array($alertoptiplusTransit));

        return parent::setAlertoptiplusTransit($alertoptiplusTransit);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlertoptiplusTransit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlertoptiplusTransit', array());

        return parent::getAlertoptiplusTransit();
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

}
