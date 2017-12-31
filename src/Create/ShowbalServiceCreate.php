<?php

/**
 * File for class ShowbalServiceCreate
 * @package Showbal
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */

/**
 * This class stands for ShowbalServiceCreate originally named Create
 * @package Showbal
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */
class ShowbalServiceCreate extends ShowbalWsdlClass
{

    /**
     * Method to call the operation originally named CreateShipment
     * @uses ShowbalWsdlClass::getSoapClient()
     * @uses ShowbalWsdlClass::setResult()
     * @uses ShowbalWsdlClass::saveLastError()
     * @param ShowbalStructCreateShipment $_showbalStructCreateShipment
     * @return ShowbalStructCreateShipmentResponse
     */
    public function CreateShipment(ShowbalStructCreateShipment $_showbalStructCreateShipment)
    {
        try {
            return $this->setResult(self::getSoapClient()->CreateShipment($_showbalStructCreateShipment));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Returns the result
     * @see ShowbalWsdlClass::getResult()
     * @return ShowbalStructCreateShipmentResponse
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
