<?php

/**
 * File for class ShowbalStructArrayOfShipmentItem
 * @package Showbal
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */

/**
 * This class stands for ShowbalStructArrayOfShipmentItem originally named ArrayOfShipmentItem
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://showbal.i-packexpress.com:8101/ShowbalWS.svc?singleWsdl}
 * @package Showbal
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */
class ShowbalStructArrayOfShipmentItem extends ShowbalWsdlClass
{

    /**
     * The ShipmentItem
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var ShowbalStructShipmentItem
     */
    public $ShipmentItem;

    /**
     * Constructor method for ArrayOfShipmentItem
     * @see parent::__construct()
     * @param ShowbalStructShipmentItem $_shipmentItem
     * @return ShowbalStructArrayOfShipmentItem
     */
    public function __construct($_shipmentItem = NULL)
    {
        parent::__construct(array('ShipmentItem' => $_shipmentItem), false);
    }

    /**
     * Get ShipmentItem value
     * @return ShowbalStructShipmentItem|null
     */
    public function getShipmentItem()
    {
        return $this->ShipmentItem;
    }

    /**
     * Set ShipmentItem value
     * @param ShowbalStructShipmentItem $_shipmentItem the ShipmentItem
     * @return ShowbalStructShipmentItem
     */
    public function setShipmentItem($_shipmentItem)
    {
        return ($this->ShipmentItem = $_shipmentItem);
    }

    /**
     * Returns the current element
     * @see ShowbalWsdlClass::current()
     * @return ShowbalStructShipmentItem
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     * @see ShowbalWsdlClass::item()
     * @param int $_index
     * @return ShowbalStructShipmentItem
     */
    public function item($_index)
    {
        return parent::item($_index);
    }

    /**
     * Returns the first element
     * @see ShowbalWsdlClass::first()
     * @return ShowbalStructShipmentItem
     */
    public function first()
    {
        return parent::first();
    }

    /**
     * Returns the last element
     * @see ShowbalWsdlClass::last()
     * @return ShowbalStructShipmentItem
     */
    public function last()
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     * @see ShowbalWsdlClass::last()
     * @param int $_offset
     * @return ShowbalStructShipmentItem
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }

    /**
     * Returns the attribute name
     * @see ShowbalWsdlClass::getAttributeName()
     * @return string ShipmentItem
     */
    public function getAttributeName()
    {
        return 'ShipmentItem';
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ShowbalWsdlClass::__set_state()
     * @uses ShowbalWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ShowbalStructArrayOfShipmentItem
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
