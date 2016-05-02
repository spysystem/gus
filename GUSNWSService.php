<?php

namespace GUS;

class GUSNWSService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'makeCorrectionObject' => 'GUS\\makeCorrectionObject',
      'correctionDTO' => 'GUS\\correctionDTO',
      'makeCorrectionObjectResponse' => 'GUS\\makeCorrectionObjectResponse',
      'makeAssortmentObject' => 'GUS\\makeAssortmentObject',
      'assortmentDTO' => 'GUS\\assortmentDTO',
      'makeAssortmentObjectResponse' => 'GUS\\makeAssortmentObjectResponse',
      'makeSaleObject' => 'GUS\\makeSaleObject',
      'saleDTO' => 'GUS\\saleDTO',
      'makeSaleObjectResponse' => 'GUS\\makeSaleObjectResponse',
      'makeMaterialDataObject' => 'GUS\\makeMaterialDataObject',
      'materialDataDTO' => 'GUS\\materialDataDTO',
      'makeMaterialDataObjectResponse' => 'GUS\\makeMaterialDataObjectResponse',
      'makeSpecificationObject' => 'GUS\\makeSpecificationObject',
      'specificationDTO' => 'GUS\\specificationDTO',
      'makeSpecificationObjectResponse' => 'GUS\\makeSpecificationObjectResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'GUS.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param makeSaleObject $parameters
     * @return makeSaleObjectResponse
     */
    public function makeSaleObject(makeSaleObject $parameters)
    {
      return $this->__soapCall('makeSaleObject', array($parameters));
    }

    /**
     * @param makeSpecificationObject $parameters
     * @return makeSpecificationObjectResponse
     */
    public function makeSpecificationObject(makeSpecificationObject $parameters)
    {
      return $this->__soapCall('makeSpecificationObject', array($parameters));
    }

    /**
     * @param makeCorrectionObject $parameters
     * @return makeCorrectionObjectResponse
     */
    public function makeCorrectionObject(makeCorrectionObject $parameters)
    {
      return $this->__soapCall('makeCorrectionObject', array($parameters));
    }

    /**
     * @param makeAssortmentObject $parameters
     * @return makeAssortmentObjectResponse
     */
    public function makeAssortmentObject(makeAssortmentObject $parameters)
    {
      return $this->__soapCall('makeAssortmentObject', array($parameters));
    }

    /**
     * @param makeMaterialDataObject $parameters
     * @return makeMaterialDataObjectResponse
     */
    public function makeMaterialDataObject(makeMaterialDataObject $parameters)
    {
      return $this->__soapCall('makeMaterialDataObject', array($parameters));
    }

}
