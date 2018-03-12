<?php

namespace GUS;

class specificationDTO
{

	/**
	 * @var string $eanNo
	 */
	protected $eanNo = null;

	/**
	 * @var string $itemID
	 */
	protected $itemID = null;

	/**
	 * @var string $itemType
	 */
	protected $itemType = null;

	/**
	 * @var string $location
	 */
	protected $location = null;

	/**
	 * @var string $orderNo
	 */
	protected $orderNo = null;

	/**
	 * @var string $orgCountry
	 */
	protected $orgCountry = null;

	/**
	 * @var string $procedureType
	 */
	protected $procedureType = null;

	/**
	 * @var string $quantityPCS
	 */
	protected $quantityPCS = null;

	/**
	 * @var string $transactionDate
	 */
	protected $transactionDate = null;

	/**
	 * @param string $eanNo
	 * @param string $itemID
	 * @param string $itemType
	 * @param string $orderNo
	 * @param string $orgCountry
	 * @param string $procedureType
	 * @param string $quantityPCS
	 * @param string $transactionDate
	 */
	public function __construct($eanNo, $itemID, $itemType, $orderNo, $orgCountry, $procedureType, $quantityPCS, $transactionDate, $location)
	{
		$this->eanNo			= $eanNo;
		$this->itemID			= $itemID;
		$this->itemType			= $itemType;
		$this->orderNo			= $orderNo;
		$this->orgCountry		= $orgCountry;
		$this->procedureType	= $procedureType;
		$this->quantityPCS		= $quantityPCS;
		$this->transactionDate	= $transactionDate;
		$this->location			= $location;
	}

	/**
	 * @return string
	 */
	public function getEanNo()
	{
		return $this->eanNo;
	}

	/**
	 * @param string $eanNo
	 * @return \GUS\specificationDTO
	 */
	public function setEanNo($eanNo)
	{
		$this->eanNo = $eanNo;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getItemID()
	{
		return $this->itemID;
	}

	/**
	 * @param string $itemID
	 * @return \GUS\specificationDTO
	 */
	public function setItemID($itemID)
	{
		$this->itemID = $itemID;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getItemType()
	{
		return $this->itemType;
	}

	/**
	 * @param string $itemType
	 * @return \GUS\specificationDTO
	 */
	public function setItemType($itemType)
	{
		$this->itemType = $itemType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLocation()
	{
		return $this->location;
	}

	/**
	 * @param string $location
	 * @return \GUS\specificationDTO
	 */
	public function setLocation($location)
	{
		$this->location = $location;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getOrderNo()
	{
		return $this->orderNo;
	}

	/**
	 * @param string $orderNo
	 * @return \GUS\specificationDTO
	 */
	public function setOrderNo($orderNo)
	{
		$this->orderNo = $orderNo;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getOrgCountry()
	{
		return $this->orgCountry;
	}

	/**
	 * @param string $orgCountry
	 * @return \GUS\specificationDTO
	 */
	public function setOrgCountry($orgCountry)
	{
		$this->orgCountry = $orgCountry;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getProcedureType()
	{
		return $this->procedureType;
	}

	/**
	 * @param string $procedureType
	 * @return \GUS\specificationDTO
	 */
	public function setProcedureType($procedureType)
	{
		$this->procedureType = $procedureType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getQuantityPCS()
	{
		return $this->quantityPCS;
	}

	/**
	 * @param string $quantityPCS
	 * @return \GUS\specificationDTO
	 */
	public function setQuantityPCS($quantityPCS)
	{
		$this->quantityPCS = $quantityPCS;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTransactionDate()
	{
		return $this->transactionDate;
	}

	/**
	 * @param string $transactionDate
	 * @return \GUS\specificationDTO
	 */
	public function setTransactionDate($transactionDate)
	{
		$this->transactionDate = $transactionDate;
		return $this;
	}

}
