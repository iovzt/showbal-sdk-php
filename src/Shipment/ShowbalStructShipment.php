<?php

/**
 * File for class ShowbalStructShipment
 * @package Showbal
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */

/**
 * This class stands for ShowbalStructShipment originally named Shipment
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://showbal.i-packexpress.com:8101/ShowbalWS.svc?singleWsdl}
 * @package Showbal
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */
class ShowbalStructShipment extends ShowbalWsdlClass
{

    /**
     * The AddresLine2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $AddresLine2;

    /**
     * The AddressLine1
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $AddressLine1;

    /**
     * The AddressLine3City
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $AddressLine3City;

    /**
     * The AddressLine4State
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $AddressLine4State;

    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $CompanyName;

    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $CountryCode;

    /**
     * The EndContactEmail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $EndContactEmail;

    /**
     * The EndContactPhone
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $EndContactPhone;

    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $FirstName;

    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $Height;

    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $LastName;

    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $Length;

    /**
     * The OrderNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $OrderNumber;

    /**
     * The ParcelWeight
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $ParcelWeight;

    /**
     * The Postcode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Postcode;

    /**
     * The ShipmentItemsArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var ShowbalStructArrayOfShipmentItem
     */
    public $ShipmentItemsArray;

    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $Width;

    /**
     * Constructor method for Shipment
     * @see parent::__construct()
     * @param string $_addresLine2
     * @param string $_addressLine1
     * @param string $_addressLine3City
     * @param string $_addressLine4State
     * @param string $_companyName
     * @param string $_countryCode
     * @param string $_endContactEmail
     * @param string $_endContactPhone
     * @param string $_firstName
     * @param decimal $_height
     * @param string $_lastName
     * @param decimal $_length
     * @param string $_orderNumber
     * @param decimal $_parcelWeight
     * @param string $_postcode
     * @param ShowbalStructArrayOfShipmentItem $_shipmentItemsArray
     * @param decimal $_width
     * @return ShowbalStructShipment
     */
    public function __construct($_addresLine2 = NULL, $_addressLine1 = NULL, $_addressLine3City = NULL, $_addressLine4State = NULL, $_companyName = NULL, $_countryCode = NULL, $_endContactEmail = NULL, $_endContactPhone = NULL, $_firstName = NULL, $_height = NULL, $_lastName = NULL, $_length = NULL, $_orderNumber = NULL, $_parcelWeight = NULL, $_postcode = NULL, $_shipmentItemsArray = NULL, $_width = NULL)
    {
        parent::__construct(array('AddresLine2' => $_addresLine2, 'AddressLine1' => $_addressLine1, 'AddressLine3City' => $_addressLine3City, 'AddressLine4State' => $_addressLine4State, 'CompanyName' => $_companyName, 'CountryCode' => $_countryCode, 'EndContactEmail' => $_endContactEmail, 'EndContactPhone' => $_endContactPhone, 'FirstName' => $_firstName, 'Height' => $_height, 'LastName' => $_lastName, 'Length' => $_length, 'OrderNumber' => $_orderNumber, 'ParcelWeight' => $_parcelWeight, 'Postcode' => $_postcode, 'ShipmentItemsArray' => ($_shipmentItemsArray instanceof ShowbalStructArrayOfShipmentItem) ? $_shipmentItemsArray : new ShowbalStructArrayOfShipmentItem($_shipmentItemsArray), 'Width' => $_width), false);
    }

    /**
     * Get AddresLine2 value
     * @return string|null
     */
    public function getAddresLine2()
    {
        return $this->AddresLine2;
    }

    /**
     * Set AddresLine2 value
     * @param string $_addresLine2 the AddresLine2
     * @return string
     */
    public function setAddresLine2($_addresLine2)
    {
        return ($this->AddresLine2 = $_addresLine2);
    }

    /**
     * Get AddressLine1 value
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->AddressLine1;
    }

    /**
     * Set AddressLine1 value
     * @param string $_addressLine1 the AddressLine1
     * @return string
     */
    public function setAddressLine1($_addressLine1)
    {
        return ($this->AddressLine1 = $_addressLine1);
    }

    /**
     * Get AddressLine3City value
     * @return string|null
     */
    public function getAddressLine3City()
    {
        return $this->AddressLine3City;
    }

    /**
     * Set AddressLine3City value
     * @param string $_addressLine3City the AddressLine3City
     * @return string
     */
    public function setAddressLine3City($_addressLine3City)
    {
        return ($this->AddressLine3City = $_addressLine3City);
    }

    /**
     * Get AddressLine4State value
     * @return string|null
     */
    public function getAddressLine4State()
    {
        return $this->AddressLine4State;
    }

    /**
     * Set AddressLine4State value
     * @param string $_addressLine4State the AddressLine4State
     * @return string
     */
    public function setAddressLine4State($_addressLine4State)
    {
        return ($this->AddressLine4State = $_addressLine4State);
    }

    /**
     * Get CompanyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * Set CompanyName value
     * @param string $_companyName the CompanyName
     * @return string
     */
    public function setCompanyName($_companyName)
    {
        return ($this->CompanyName = $_companyName);
    }

    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * Set CountryCode value
     * @param string $_countryCode the CountryCode
     * @return string
     */
    public function setCountryCode($_countryCode)
    {
        return ($this->CountryCode = $_countryCode);
    }

    /**
     * Get EndContactEmail value
     * @return string|null
     */
    public function getEndContactEmail()
    {
        return $this->EndContactEmail;
    }

    /**
     * Set EndContactEmail value
     * @param string $_endContactEmail the EndContactEmail
     * @return string
     */
    public function setEndContactEmail($_endContactEmail)
    {
        return ($this->EndContactEmail = $_endContactEmail);
    }

    /**
     * Get EndContactPhone value
     * @return string|null
     */
    public function getEndContactPhone()
    {
        return $this->EndContactPhone;
    }

    /**
     * Set EndContactPhone value
     * @param string $_endContactPhone the EndContactPhone
     * @return string
     */
    public function setEndContactPhone($_endContactPhone)
    {
        return ($this->EndContactPhone = $_endContactPhone);
    }

    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Set FirstName value
     * @param string $_firstName the FirstName
     * @return string
     */
    public function setFirstName($_firstName)
    {
        return ($this->FirstName = $_firstName);
    }

    /**
     * Get Height value
     * @return decimal|null
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * Set Height value
     * @param decimal $_height the Height
     * @return decimal
     */
    public function setHeight($_height)
    {
        return ($this->Height = $_height);
    }

    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * Set LastName value
     * @param string $_lastName the LastName
     * @return string
     */
    public function setLastName($_lastName)
    {
        return ($this->LastName = $_lastName);
    }

    /**
     * Get Length value
     * @return decimal|null
     */
    public function getLength()
    {
        return $this->Length;
    }

    /**
     * Set Length value
     * @param decimal $_length the Length
     * @return decimal
     */
    public function setLength($_length)
    {
        return ($this->Length = $_length);
    }

    /**
     * Get OrderNumber value
     * @return string|null
     */
    public function getOrderNumber()
    {
        return $this->OrderNumber;
    }

    /**
     * Set OrderNumber value
     * @param string $_orderNumber the OrderNumber
     * @return string
     */
    public function setOrderNumber($_orderNumber)
    {
        return ($this->OrderNumber = $_orderNumber);
    }

    /**
     * Get ParcelWeight value
     * @return decimal|null
     */
    public function getParcelWeight()
    {
        return $this->ParcelWeight;
    }

    /**
     * Set ParcelWeight value
     * @param decimal $_parcelWeight the ParcelWeight
     * @return decimal
     */
    public function setParcelWeight($_parcelWeight)
    {
        return ($this->ParcelWeight = $_parcelWeight);
    }

    /**
     * Get Postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->Postcode;
    }

    /**
     * Set Postcode value
     * @param string $_postcode the Postcode
     * @return string
     */
    public function setPostcode($_postcode)
    {
        return ($this->Postcode = $_postcode);
    }

    /**
     * Get ShipmentItemsArray value
     * @return ShowbalStructArrayOfShipmentItem|null
     */
    public function getShipmentItemsArray()
    {
        return $this->ShipmentItemsArray;
    }

    /**
     * Set ShipmentItemsArray value
     * @param ShowbalStructArrayOfShipmentItem $_shipmentItemsArray the ShipmentItemsArray
     * @return ShowbalStructArrayOfShipmentItem
     */
    public function setShipmentItemsArray($_shipmentItemsArray)
    {
        return ($this->ShipmentItemsArray = $_shipmentItemsArray);
    }

    /**
     * Get Width value
     * @return decimal|null
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * Set Width value
     * @param decimal $_width the Width
     * @return decimal
     */
    public function setWidth($_width)
    {
        return ($this->Width = $_width);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ShowbalWsdlClass::__set_state()
     * @uses ShowbalWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ShowbalStructShipment
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
