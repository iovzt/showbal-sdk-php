<?php

/**
 * File for class ShowbalStructRunEndOfDay
 * @package Showbal
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */

/**
 * This class stands for ShowbalStructRunEndOfDay originally named RunEndOfDay
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://showbal.i-packexpress.com:8101/ShowbalWS.svc?singleWsdl}
 * @package Showbal
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */
class ShowbalStructRunEndOfDay extends ShowbalWsdlClass
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
     * The startDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $startDate;

    /**
     * Constructor method for RunEndOfDay
     * @see parent::__construct()
     * @param string $_userName
     * @param string $_password
     * @param dateTime $_startDate
     * @return ShowbalStructRunEndOfDay
     */
    public function __construct($_userName = NULL, $_password = NULL, $_startDate = NULL)
    {
        parent::__construct(array('userName' => $_userName, 'password' => $_password, 'startDate' => $_startDate), false);
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
     * Get startDate value
     * @return dateTime|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set startDate value
     * @param dateTime $_startDate the startDate
     * @return dateTime
     */
    public function setStartDate($_startDate)
    {
        return ($this->startDate = $_startDate);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ShowbalWsdlClass::__set_state()
     * @uses ShowbalWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ShowbalStructRunEndOfDay
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
