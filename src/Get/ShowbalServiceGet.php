<?php

/**
 * File for class ShowbalServiceGet
 * @package Showbal
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */

/**
 * This class stands for ShowbalServiceGet originally named Get
 * @package Showbal
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */
class ShowbalServiceGet extends ShowbalWsdlClass
{

    /**
     * Method to call the operation originally named GetShipmentLabel
     * @uses ShowbalWsdlClass::getSoapClient()
     * @uses ShowbalWsdlClass::setResult()
     * @uses ShowbalWsdlClass::saveLastError()
     * @param ShowbalStructGetShipmentLabel $_showbalStructGetShipmentLabel
     * @return ShowbalStructGetShipmentLabelResponse
     */
    public function GetShipmentLabel(ShowbalStructGetShipmentLabel $_showbalStructGetShipmentLabel)
    {
        try {
            return $this->setResult(self::getSoapClient()->GetShipmentLabel($_showbalStructGetShipmentLabel));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Returns the result
     * @see ShowbalWsdlClass::getResult()
     * @return ShowbalStructGetShipmentLabelResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
