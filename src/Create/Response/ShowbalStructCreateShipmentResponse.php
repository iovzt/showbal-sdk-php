<?php

/**
 * File for class ShowbalStructCreateShipmentResponse
 * @package Showbal
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */

/**
 * This class stands for ShowbalStructCreateShipmentResponse originally named CreateShipmentResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://showbal.i-packexpress.com:8101/ShowbalWS.svc?singleWsdl}
 * @package Showbal
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */
class ShowbalStructCreateShipmentResponse extends ShowbalWsdlClass
{

    /**
     * The CreateShipmentResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * - from schema : {@link https://showbal.i-packexpress.com:8101/ShowbalWS.svc?singleWsdl}
     * @var CreateShipmentResponse
     */
    public $CreateShipmentResult;

    /**
     * The Base64Label
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Base64Label;

    /**
     * The ErrorMessage
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $ErrorMessage;

    /**
     * The HasError
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $HasError;

    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $ServiceType;

    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $TrackingNumber;

    /**
     * Constructor method for CreateShipmentResponse
     * @see parent::__construct()
     * @param CreateShipmentResponse $_createShipmentResult
     * @param string $_base64Label
     * @param string $_errorMessage
     * @param boolean $_hasError
     * @param string $_serviceType
     * @param string $_trackingNumber
     * @return ShowbalStructCreateShipmentResponse
     */
    public function __construct($_createShipmentResult = NULL, $_base64Label = NULL, $_errorMessage = NULL, $_hasError = NULL, $_serviceType = NULL, $_trackingNumber = NULL)
    {
        parent::__construct(array('CreateShipmentResult' => $_createShipmentResult, 'Base64Label' => $_base64Label, 'ErrorMessage' => $_errorMessage, 'HasError' => $_hasError, 'ServiceType' => $_serviceType, 'TrackingNumber' => $_trackingNumber), false);
    }

    /**
     * Get CreateShipmentResult value
     * @return CreateShipmentResponse|null
     */
    public function getCreateShipmentResult()
    {
        return $this->CreateShipmentResult;
    }

    /**
     * Set CreateShipmentResult value
     * @param CreateShipmentResponse $_createShipmentResult the CreateShipmentResult
     * @return CreateShipmentResponse
     */
    public function setCreateShipmentResult($_createShipmentResult)
    {
        return ($this->CreateShipmentResult = $_createShipmentResult);
    }

    /**
     * Get Base64Label value
     * @return string|null
     */
    public function getBase64Label()
    {
        return $this->Base64Label;
    }

    /**
     * Set Base64Label value
     * @param string $_base64Label the Base64Label
     * @return string
     */
    public function setBase64Label($_base64Label)
    {
        return ($this->Base64Label = $_base64Label);
    }

    /**
     * Get ErrorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }

    /**
     * Set ErrorMessage value
     * @param string $_errorMessage the ErrorMessage
     * @return string
     */
    public function setErrorMessage($_errorMessage)
    {
        return ($this->ErrorMessage = $_errorMessage);
    }

    /**
     * Get HasError value
     * @return boolean|null
     */
    public function getHasError()
    {
        return $this->HasError;
    }

    /**
     * Set HasError value
     * @param boolean $_hasError the HasError
     * @return boolean
     */
    public function setHasError($_hasError)
    {
        return ($this->HasError = $_hasError);
    }

    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }

    /**
     * Set ServiceType value
     * @param string $_serviceType the ServiceType
     * @return string
     */
    public function setServiceType($_serviceType)
    {
        return ($this->ServiceType = $_serviceType);
    }

    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }

    /**
     * Set TrackingNumber value
     * @param string $_trackingNumber the TrackingNumber
     * @return string
     */
    public function setTrackingNumber($_trackingNumber)
    {
        return ($this->TrackingNumber = $_trackingNumber);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ShowbalWsdlClass::__set_state()
     * @uses ShowbalWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ShowbalStructCreateShipmentResponse
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
