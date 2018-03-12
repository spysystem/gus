<?php

namespace GUS;

class materialDataDTO
{

	/**
	 * @var string $brugstarif
	 */
	protected $brugstarif = null;

	/**
	 * @var string $description
	 */
	protected $description = null;

	/**
	 * @var string $description2
	 */
	protected $description2 = null;

	/**
	 * @var string $eanNo
	 */
	protected $eanNo = null;

	/**
	 * @var string $itemID
	 */
	protected $itemID = null;

	/**
	 * @param string $description
	 * @param string $description2
	 * @param string $eanNo
	 * @param string $itemID
	 * @param string $brugstarif
	 */
	public function __construct($description, $description2, $eanNo, $itemID, $brugstarif)
	{
	$this->description	= $description;
	$this->description2	= $description2;
	$this->eanNo		= $eanNo;
	$this->itemID		= $itemID;
	$this->brugstarif	= $brugstarif;
	}

	/**
	 * @return string
	 */
	public function getBrugstarif()
	{
		return $this->brugstarif;
	}

	/**
	 * @param string $brugstarif
	 * @return \GUS\materialDataDTO
	 */
	public function setBrugstarif($brugstarif)
	{
		$this->brugstarif = $brugstarif;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return \GUS\materialDataDTO
	 */
	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription2()
	{
		return $this->description2;
	}

	/**
	 * @param string $description2
	 * @return \GUS\materialDataDTO
	 */
	public function setDescription2($description2)
	{
		$this->description2 = $description2;
		return $this;
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
	 * @return \GUS\materialDataDTO
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
	 * @return \GUS\materialDataDTO
	 */
	public function setItemID($itemID)
	{
		$this->itemID = $itemID;
		return $this;
	}

}
