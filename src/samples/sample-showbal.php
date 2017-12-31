<?php

/**
 * Test with Showbal for 'https://showbal.i-packexpress.com:8101/ShowbalWS.svc?singleWsdl'
 * @package Showbal
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-12-25
 */
ini_set('memory_limit', '512M');
ini_set('display_errors', true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/ShowbalAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a ShowbalWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[ShowbalWsdlClass::WSDL_URL] = 'https://showbal.i-packexpress.com:8101/ShowbalWS.svc?singleWsdl';
 * $wsdl[ShowbalWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[ShowbalWsdlClass::WSDL_TRACE] = true;
 * $wsdl[ShowbalWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[ShowbalWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new ShowbalWsdlClass($wsdl);
 */
/**
 * Examples
 */
/* * ********************************
 * Example for ShowbalServiceCreate
 */
$showbalServiceCreate = new ShowbalServiceCreate();
// sample call for ShowbalServiceCreate::CreateShipment()
if ($showbalServiceCreate->CreateShipment(new ShowbalStructCreateShipment(/*                 * * update parameters list ** */)))
    print_r($showbalServiceCreate->getResult());
else
    print_r($showbalServiceCreate->getLastError());

/* * *****************************
 * Example for ShowbalServiceGet
 */
$showbalServiceGet = new ShowbalServiceGet();
// sample call for ShowbalServiceGet::GetShipmentLabel()
if ($showbalServiceGet->GetShipmentLabel(new ShowbalStructGetShipmentLabel(/*                 * * update parameters list ** */)))
    print_r($showbalServiceGet->getResult());
else
    print_r($showbalServiceGet->getLastError());

/* * *****************************
 * Example for ShowbalServiceRun
 */
$showbalServiceRun = new ShowbalServiceRun();
// sample call for ShowbalServiceRun::RunEndOfDay()
if ($showbalServiceRun->RunEndOfDay(new ShowbalStructRunEndOfDay(/*                 * * update parameters list ** */)))
    print_r($showbalServiceRun->getResult());
else
    print_r($showbalServiceRun->getLastError());
