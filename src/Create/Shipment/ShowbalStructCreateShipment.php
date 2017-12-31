<?php

/**
 * File for class ShowbalStructCreateShipment
 * @package Showbal
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */

/**
 * This class stands for ShowbalStructCreateShipment originally named CreateShipment
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://showbal.i-packexpress.com:8101/ShowbalWS.svc?singleWsdl}
 * @package Showbal
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */
class ShowbalStructCreateShipment extends ShowbalWsdlClass
{

    /**
     * The userName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $userName;

    /**
     * The password
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $password;

    /**
     * The s
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var ShowbalStructShipment
     */
    public $s;

    /**
     * Constructor method for CreateShipment
     * @see parent::__construct()
     * @param string $_userName
     * @param string $_password
     * @param ShowbalStructShipment $_s
     * @return ShowbalStructCreateShipment
     */
    public function __construct($_userName = NULL, $_password = NULL, $_s = NULL)
    {
        parent::__construct(array('userName' => $_userName, 'password' => $_password, 's' => $_s), false);
    }

    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userName value
     * @param string $_userName the userName
     * @return string
     */
    public function setUserName($_userName)
    {
        return ($this->userName = $_userName);
    }

    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password value
     * @param string $_password the password
     * @return string
     */
    public function setPassword($_password)
    {
        return ($this->password = $_password);
    }

    /**
     * Get s value
     * @return ShowbalStructShipment|null
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * Set s value
     * @param ShowbalStructShipment $_s the s
     * @return ShowbalStructShipment
     */
    public function setS($_s)
    {
        return ($this->s = $_s);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ShowbalWsdlClass::__set_state()
     * @uses ShowbalWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ShowbalStructCreateShipment
     */
    public static function __set_state(array $_array, $_className = __CLASS__)
    {
        return parent::__set_state($_array, $_className);
    }

    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }

}
