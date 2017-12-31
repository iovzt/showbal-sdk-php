<?php

/**
 * File for the class which returns the class map definition
 * @package Showbal
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */

/**
 * Class which returns the class map definition by the static method ShowbalClassMap::classMap()
 * @package Showbal
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */
class ShowbalClassMap
{

    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array(
            'ArrayOfShipmentItem' => 'ShowbalStructArrayOfShipmentItem',
            'CreateShipment' => 'ShowbalStructCreateShipment',
            'CreateShipmentResponse' => 'ShowbalStructCreateShipmentResponse',
            'GetShipmentLabel' => 'ShowbalStructGetShipmentLabel',
            'GetShipmentLabelResponse' => 'ShowbalStructGetShipmentLabelResponse',
            'RunEndOfDay' => 'ShowbalStructRunEndOfDay',
            'RunEndOfDayResponse' => 'ShowbalStructRunEndOfDayResponse',
            'Shipment' => 'ShowbalStructShipment',
            'ShipmentItem' => 'ShowbalStructShipmentItem',
        );
    }

}
