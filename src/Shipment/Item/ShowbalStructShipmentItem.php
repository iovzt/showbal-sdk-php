<?php

/**
 * File for class ShowbalStructShipmentItem
 * @package Showbal
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */

/**
 * This class stands for ShowbalStructShipmentItem originally named ShipmentItem
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://showbal.i-packexpress.com:8101/ShowbalWS.svc?singleWsdl}
 * @package Showbal
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */
class ShowbalStructShipmentItem extends ShowbalWsdlClass
{

    /**
     * The ProductDescription
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $ProductDescription;

    /**
     * The ProductHarmonizedCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $ProductHarmonizedCode;

    /**
     * The ProductItemOrigin
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $ProductItemOrigin;

    /**
     * The ProductQuantity
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $ProductQuantity;

    /**
     * The ProductUnitValue
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $ProductUnitValue;

    /**
     * The ProductUnitWeight
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $ProductUnitWeight;

    /**
     * Constructor method for ShipmentItem
     * @see parent::__construct()
     * @param string $_productDescription
     * @param string $_productHarmonizedCode
     * @param string $_productItemOrigin
     * @param int $_productQuantity
     * @param decimal $_productUnitValue
     * @param decimal $_productUnitWeight
     * @return ShowbalStructShipmentItem
     */
    public function __construct($_productDescription = NULL, $_productHarmonizedCode = NULL, $_productItemOrigin = NULL, $_productQuantity = NULL, $_productUnitValue = NULL, $_productUnitWeight = NULL)
    {
        parent::__construct(array('ProductDescription' => $_productDescription, 'ProductHarmonizedCode' => $_productHarmonizedCode, 'ProductItemOrigin' => $_productItemOrigin, 'ProductQuantity' => $_productQuantity, 'ProductUnitValue' => $_productUnitValue, 'ProductUnitWeight' => $_productUnitWeight), false);
    }

    /**
     * Get ProductDescription value
     * @return string|null
     */
    public function getProductDescription()
    {
        return $this->ProductDescription;
    }

    /**
     * Set ProductDescription value
     * @param string $_productDescription the ProductDescription
     * @return string
     */
    public function setProductDescription($_productDescription)
    {
        return ($this->ProductDescription = $_productDescription);
    }

    /**
     * Get ProductHarmonizedCode value
     * @return string|null
     */
    public function getProductHarmonizedCode()
    {
        return $this->ProductHarmonizedCode;
    }

    /**
     * Set ProductHarmonizedCode value
     * @param string $_productHarmonizedCode the ProductHarmonizedCode
     * @return string
     */
    public function setProductHarmonizedCode($_productHarmonizedCode)
    {
        return ($this->ProductHarmonizedCode = $_productHarmonizedCode);
    }

    /**
     * Get ProductItemOrigin value
     * @return string|null
     */
    public function getProductItemOrigin()
    {
        return $this->ProductItemOrigin;
    }

    /**
     * Set ProductItemOrigin value
     * @param string $_productItemOrigin the ProductItemOrigin
     * @return string
     */
    public function setProductItemOrigin($_productItemOrigin)
    {
        return ($this->ProductItemOrigin = $_productItemOrigin);
    }

    /**
     * Get ProductQuantity value
     * @return int|null
     */
    public function getProductQuantity()
    {
        return $this->ProductQuantity;
    }

    /**
     * Set ProductQuantity value
     * @param int $_productQuantity the ProductQuantity
     * @return int
     */
    public function setProductQuantity($_productQuantity)
    {
        return ($this->ProductQuantity = $_productQuantity);
    }

    /**
     * Get ProductUnitValue value
     * @return decimal|null
     */
    public function getProductUnitValue()
    {
        return $this->ProductUnitValue;
    }

    /**
     * Set ProductUnitValue value
     * @param decimal $_productUnitValue the ProductUnitValue
     * @return decimal
     */
    public function setProductUnitValue($_productUnitValue)
    {
        return ($this->ProductUnitValue = $_productUnitValue);
    }

    /**
     * Get ProductUnitWeight value
     * @return decimal|null
     */
    public function getProductUnitWeight()
    {
        return $this->ProductUnitWeight;
    }

    /**
     * Set ProductUnitWeight value
     * @param decimal $_productUnitWeight the ProductUnitWeight
     * @return decimal
     */
    public function setProductUnitWeight($_productUnitWeight)
    {
        return ($this->ProductUnitWeight = $_productUnitWeight);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ShowbalWsdlClass::__set_state()
     * @uses ShowbalWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ShowbalStructShipmentItem
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
