<?php

/**
 * File for class ShowbalServiceRun
 * @package Showbal
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */

/**
 * This class stands for ShowbalServiceRun originally named Run
 * @package Showbal
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */
class ShowbalServiceRun extends ShowbalWsdlClass
{

    /**
     * Method to call the operation originally named RunEndOfDay
     * @uses ShowbalWsdlClass::getSoapClient()
     * @uses ShowbalWsdlClass::setResult()
     * @uses ShowbalWsdlClass::saveLastError()
     * @param ShowbalStructRunEndOfDay $_showbalStructRunEndOfDay
     * @return ShowbalStructRunEndOfDayResponse
     */
    public function RunEndOfDay(ShowbalStructRunEndOfDay $_showbalStructRunEndOfDay)
    {
        try {
            return $this->setResult(self::getSoapClient()->RunEndOfDay($_showbalStructRunEndOfDay));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Returns the result
     * @see ShowbalWsdlClass::getResult()
     * @return ShowbalStructRunEndOfDayResponse
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
