<?php

namespace Proxies\__CG__\DBORM\CSIBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tbluser extends \DBORM\CSIBundle\Entity\Tbluser implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'pkId', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'firstname', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'lastname', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'departement', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'userstartdate', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'userenddate', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'password', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'fkSector', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'fkTypeprofil', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'conn');
        }

        return array('__isInitialized__', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'pkId', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'firstname', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'lastname', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'departement', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'userstartdate', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'userenddate', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'password', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'fkSector', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'fkTypeprofil', '' . "\0" . 'DBORM\\CSIBundle\\Entity\\Tbluser' . "\0" . 'conn');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tbluser $proxy) {
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
            return  parent::getPkId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPkId', array());

        return parent::getPkId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserstartdate($userstartdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserstartdate', array($userstartdate));

        return parent::setUserstartdate($userstartdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserstartdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserstartdate', array());

        return parent::getUserstartdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserenddate($userenddate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserenddate', array($userenddate));

        return parent::setUserenddate($userenddate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserenddate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserenddate', array());

        return parent::getUserenddate();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeProfil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeProfil', array());

        return parent::getTypeProfil();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeProfil($var)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeProfil', array($var));

        return parent::setTypeProfil($var);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser($id, $password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array($id, $password));

        return parent::getUser($id, $password);
    }

    /**
     * {@inheritDoc}
     */
    public function findUser($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'findUser', array($id));

        return parent::findUser($id);
    }

    /**
     * {@inheritDoc}
     */
    public function findUsersByAttribute($id = NULL, $firstname = NULL, $lastname = NULL, $type = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'findUsersByAttribute', array($id, $firstname, $lastname, $type));

        return parent::findUsersByAttribute($id, $firstname, $lastname, $type);
    }

    /**
     * {@inheritDoc}
     */
    public function getAll()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAll', array());

        return parent::getAll();
    }

    /**
     * {@inheritDoc}
     */
    public function deleteUser($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deleteUser', array($id));

        return parent::deleteUser($id);
    }

    /**
     * {@inheritDoc}
     */
    public function addUser($Matricule, $firstname, $lastname, $password, $Typeprofil)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUser', array($Matricule, $firstname, $lastname, $password, $Typeprofil));

        return parent::addUser($Matricule, $firstname, $lastname, $password, $Typeprofil);
    }

    /**
     * {@inheritDoc}
     */
    public function updateUser($Matricule, $firstname, $lastname, $password, $Typeprofil, $departement, $sector)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateUser', array($Matricule, $firstname, $lastname, $password, $Typeprofil, $departement, $sector));

        return parent::updateUser($Matricule, $firstname, $lastname, $password, $Typeprofil, $departement, $sector);
    }

    /**
     * {@inheritDoc}
     */
    public function encodePassword($pass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'encodePassword', array($pass));

        return parent::encodePassword($pass);
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
    public function setMatricule($Matricule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatricule', array($Matricule));

        return parent::setMatricule($Matricule);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($Password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($Password));

        return parent::setPassword($Password);
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartement($departement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartement', array($departement));

        return parent::setDepartement($departement);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartement', array());

        return parent::getDepartement();
    }

    /**
     * {@inheritDoc}
     */
    public function setSector($sector)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSector', array($sector));

        return parent::setSector($sector);
    }

    /**
     * {@inheritDoc}
     */
    public function getSector()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSector', array());

        return parent::getSector();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', array($firstname));

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', array());

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', array($lastname));

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', array());

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setFkSector(\DBORM\CSIBundle\Entity\Tblsector $fkSector = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkSector', array($fkSector));

        return parent::setFkSector($fkSector);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkSector()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkSector', array());

        return parent::getFkSector();
    }

    /**
     * {@inheritDoc}
     */
    public function setFkTypeprofil(\DBORM\CSIBundle\Entity\Tbltypeprofil $fkTypeprofil = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFkTypeprofil', array($fkTypeprofil));

        return parent::setFkTypeprofil($fkTypeprofil);
    }

    /**
     * {@inheritDoc}
     */
    public function getFkTypeprofil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFkTypeprofil', array());

        return parent::getFkTypeprofil();
    }

}
