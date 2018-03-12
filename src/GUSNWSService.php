<?php

namespace GUS;

class GUSNWSService extends \SoapClient
{
	const WsdlUrl = 'http://5.179.89.118:8181/GUSNWS/services/GUSNWS?wsdl';


	/**
	 * @var array $arrClassMap The defined classes
	 */
	private static $arrClassMap = [
		'makeSaleObjectWithErrorDesc'					=> 'GUS\\makeSaleObjectWithErrorDesc',
		'saleDTO'										=> 'GUS\\saleDTO',
		'makeSaleObjectWithErrorDescResponse'			=> 'GUS\\makeSaleObjectWithErrorDescResponse',
		'makeSaleObject'								=> 'GUS\\makeSaleObject',
		'makeSaleObjectResponse'						=> 'GUS\\makeSaleObjectResponse',
		'makeAssortmentObjectWithErrorDesc'				=> 'GUS\\makeAssortmentObjectWithErrorDesc',
		'assortmentDTO'									=> 'GUS\\assortmentDTO',
		'makeAssortmentObjectWithErrorDescResponse'		=> 'GUS\\makeAssortmentObjectWithErrorDescResponse',
		'makeSpecificationObject'						=> 'GUS\\makeSpecificationObject',
		'specificationDTO'								=> 'GUS\\specificationDTO',
		'makeSpecificationObjectResponse'				=> 'GUS\\makeSpecificationObjectResponse',
		'makeAssortmentObject'							=> 'GUS\\makeAssortmentObject',
		'makeAssortmentObjectResponse'					=> 'GUS\\makeAssortmentObjectResponse',
		'makeMaterialDataObjectWithErrorDesc'			=> 'GUS\\makeMaterialDataObjectWithErrorDesc',
		'materialDataDTO'								=> 'GUS\\materialDataDTO',
		'makeMaterialDataObjectWithErrorDescResponse'	=> 'GUS\\makeMaterialDataObjectWithErrorDescResponse',
		'makeSpecificationObjectWithErrorDesc'			=> 'GUS\\makeSpecificationObjectWithErrorDesc',
		'makeSpecificationObjectWithErrorDescResponse'	=> 'GUS\\makeSpecificationObjectWithErrorDescResponse',
		'makeCorrectionObjectWithErrorDesc'				=> 'GUS\\makeCorrectionObjectWithErrorDesc',
		'correctionDTO'									=> 'GUS\\correctionDTO',
		'makeCorrectionObjectWithErrorDescResponse'		=> 'GUS\\makeCorrectionObjectWithErrorDescResponse',
		'makeCorrectionObject'							=> 'GUS\\makeCorrectionObject',
		'makeCorrectionObjectResponse'					=> 'GUS\\makeCorrectionObjectResponse',
		'makeMaterialDataObject'						=> 'GUS\\makeMaterialDataObject',
		'makeMaterialDataObjectResponse'				=> 'GUS\\makeMaterialDataObjectResponse',
	];

	/**
	 * @return GUSNWSService
	 */
	public function Create()
	{
		return new static([
			'trace'			=> true,
			'exceptions'	=> true,
			'soap_version'	=> 2,
			'encoding'		=> 'UTF-8',
			'features'		=> 1,
		]);
	}

	/**
	 * @param string $strWsdl The wsdl file to use
	 * @param array $arrOptions A array of config values
	 * @throws \Exception
	 */
	public function __construct(array $arrOptions = [], string $strWsdl = self::WsdlUrl)
	{
		if ($strWsdl === '')
		{
			throw new \Exception('Missing WSDL!');
		}
		foreach (self::$arrClassMap as $strKey => $mValue)
		{
			if (!isset($arrOptions['classmap'][$strKey]))
			{
				$arrOptions['classmap'][$strKey]	= $mValue;
			}
		}
		parent::__construct($strWsdl, $arrOptions);
	}

	/**
	 * @param makeSaleObject $parameters
	 * @return makeSaleObjectResponse
	 */
	public function makeSaleObject(makeSaleObject $parameters)
	{
		return $this->__soapCall('makeSaleObject', [$parameters]);
	}

	/**
	 * @param makeSpecificationObject $parameters
	 * @return makeSpecificationObjectResponse
	 */
	public function makeSpecificationObject(makeSpecificationObject $parameters)
	{
		return $this->__soapCall('makeSpecificationObject', [$parameters]);
	}

	/**
	 * @param makeAssortmentObject $parameters
	 * @return makeAssortmentObjectResponse
	 */
	public function makeAssortmentObject(makeAssortmentObject $parameters)
	{
		return $this->__soapCall('makeAssortmentObject', [$parameters]);
	}

	/**
	 * @param makeCorrectionObject $parameters
	 * @return makeCorrectionObjectResponse
	 */
	public function makeCorrectionObject(makeCorrectionObject $parameters)
	{
		return $this->__soapCall('makeCorrectionObject', [$parameters]);
	}

	/**
	 * @param makeMaterialDataObject $parameters
	 * @return makeMaterialDataObjectResponse
	 */
	public function makeMaterialDataObject(makeMaterialDataObject $parameters)
	{
		return $this->__soapCall('makeMaterialDataObject', [$parameters]);
	}

	/**
	 * @param makeSaleObjectWithErrorDesc $parameters
	 * @return makeSaleObjectWithErrorDescResponse
	 */
	public function makeSaleObjectWithErrorDesc(makeSaleObjectWithErrorDesc $parameters)
	{
		return $this->__soapCall('makeSaleObjectWithErrorDesc', [$parameters]);
	}

	/**
	 * @param makeMaterialDataObjectWithErrorDesc $parameters
	 * @return makeMaterialDataObjectWithErrorDescResponse
	 */
	public function makeMaterialDataObjectWithErrorDesc(makeMaterialDataObjectWithErrorDesc $parameters)
	{
		return $this->__soapCall('makeMaterialDataObjectWithErrorDesc', [$parameters]);
	}

	/**
	 * @param makeAssortmentObjectWithErrorDesc $parameters
	 * @return makeAssortmentObjectWithErrorDescResponse
	 */
	public function makeAssortmentObjectWithErrorDesc(makeAssortmentObjectWithErrorDesc $parameters)
	{
		return $this->__soapCall('makeAssortmentObjectWithErrorDesc', [$parameters]);
	}

	/**
	 * @param makeSpecificationObjectWithErrorDesc $parameters
	 * @return makeSpecificationObjectWithErrorDescResponse
	 */
	public function makeSpecificationObjectWithErrorDesc(makeSpecificationObjectWithErrorDesc $parameters)
	{
		return $this->__soapCall('makeSpecificationObjectWithErrorDesc', [$parameters]);
	}

	/**
	 * @param makeCorrectionObjectWithErrorDesc $parameters
	 * @return makeCorrectionObjectWithErrorDescResponse
	 */
	public function makeCorrectionObjectWithErrorDesc(makeCorrectionObjectWithErrorDesc $parameters)
	{
		return $this->__soapCall('makeCorrectionObjectWithErrorDesc', [$parameters]);
	}

}
