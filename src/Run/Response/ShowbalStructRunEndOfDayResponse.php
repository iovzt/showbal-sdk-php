<?php

/**
 * File for class ShowbalStructRunEndOfDayResponse
 * @package Showbal
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */

/**
 * This class stands for ShowbalStructRunEndOfDayResponse originally named RunEndOfDayResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://showbal.i-packexpress.com:8101/ShowbalWS.svc?singleWsdl}
 * @package Showbal
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */
class ShowbalStructRunEndOfDayResponse extends ShowbalWsdlClass
{

    /**
     * The RunEndOfDayResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * - from schema : {@link https://showbal.i-packexpress.com:8101/ShowbalWS.svc?singleWsdl}
     * @var RunEndOfDayResponse
     */
    public $RunEndOfDayResult;

    /**
     * The Barcode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Barcode;

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
     * Constructor method for RunEndOfDayResponse
     * @see parent::__construct()
     * @param RunEndOfDayResponse $_runEndOfDayResult
     * @param string $_barcode
     * @param string $_base64Label
     * @param string $_errorMessage
     * @param boolean $_hasError
     * @return ShowbalStructRunEndOfDayResponse
     */
    public function __construct($_runEndOfDayResult = NULL, $_barcode = NULL, $_base64Label = NULL, $_errorMessage = NULL, $_hasError = NULL)
    {
        parent::__construct(array('RunEndOfDayResult' => $_runEndOfDayResult, 'Barcode' => $_barcode, 'Base64Label' => $_base64Label, 'ErrorMessage' => $_errorMessage, 'HasError' => $_hasError), false);
    }

    /**
     * Get RunEndOfDayResult value
     * @return RunEndOfDayResponse|null
     */
    public function getRunEndOfDayResult()
    {
        return $this->RunEndOfDayResult;
    }

    /**
     * Set RunEndOfDayResult value
     * @param RunEndOfDayResponse $_runEndOfDayResult the RunEndOfDayResult
     * @return RunEndOfDayResponse
     */
    public function setRunEndOfDayResult($_runEndOfDayResult)
    {
        return ($this->RunEndOfDayResult = $_runEndOfDayResult);
    }

    /**
     * Get Barcode value
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * Set Barcode value
     * @param string $_barcode the Barcode
     * @return string
     */
    public function setBarcode($_barcode)
    {
        return ($this->Barcode = $_barcode);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ShowbalWsdlClass::__set_state()
     * @uses ShowbalWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ShowbalStructRunEndOfDayResponse
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
