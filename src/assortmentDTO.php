<?php

namespace GUS;

class assortmentDTO
{

	/**
	 * @var string $assortmentNo
	 */
	protected $assortmentNo = null;

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
	 * @var string $quantityPCS
	 */
	protected $quantityPCS = null;

	/**
	 * @param string $assortmentNo
	 * @param string $description
	 * @param string $description2
	 * @param string $eanNo
	 * @param string $itemID
	 * @param string $quantityPCS
	 */
	public function __construct($assortmentNo, $description, $description2, $eanNo, $itemID, $quantityPCS)
	{
		$this->assortmentNo	= $assortmentNo;
		$this->description	= $description;
		$this->description2	= $description2;
		$this->eanNo		= $eanNo;
		$this->itemID		= $itemID;
		$this->quantityPCS	= $quantityPCS;
	}

	/**
	 * @return string
	 */
	public function getAssortmentNo()
	{
		return $this->assortmentNo;
	}

	/**
	 * @param string $assortmentNo
	 * @return \GUS\assortmentDTO
	 */
	public function setAssortmentNo($assortmentNo)
	{
		$this->assortmentNo = $assortmentNo;
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
	 * @return \GUS\assortmentDTO
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
	 * @return \GUS\assortmentDTO
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
	 * @return \GUS\assortmentDTO
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
	 * @return \GUS\assortmentDTO
	 */
	public function setItemID($itemID)
	{
		$this->itemID = $itemID;
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
	 * @return \GUS\assortmentDTO
	 */
	public function setQuantityPCS($quantityPCS)
	{
		$this->quantityPCS = $quantityPCS;
		return $this;
	}

}
