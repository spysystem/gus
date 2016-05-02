<?php

namespace GUS;

class correctionDTO
{

    /**
     * @var string $deliveryID
     */
    protected $deliveryID = null;

    /**
     * @var string $eanNo
     */
    protected $eanNo = null;

    /**
     * @var string $isead
     */
    protected $isead = null;

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
     * @var string $movementDate
     */
    protected $movementDate = null;

    /**
     * @var string $movementType
     */
    protected $movementType = null;

    /**
     * @var string $quantityPCS
     */
    protected $quantityPCS = null;

    /**
     * @var string $returningCountry
     */
    protected $returningCountry = null;

    /**
     * @param string $deliveryID
     * @param string $eanNo
     * @param string $isead
     * @param string $itemID
     * @param string $itemType
     * @param string $location
     * @param string $movementDate
     * @param string $movementType
     * @param string $quantityPCS
     * @param string $returningCountry
     */
    public function __construct($deliveryID, $eanNo, $isead, $itemID, $itemType, $location, $movementDate, $movementType, $quantityPCS, $returningCountry)
    {
      $this->deliveryID = $deliveryID;
      $this->eanNo = $eanNo;
      $this->isead = $isead;
      $this->itemID = $itemID;
      $this->itemType = $itemType;
      $this->location = $location;
      $this->movementDate = $movementDate;
      $this->movementType = $movementType;
      $this->quantityPCS = $quantityPCS;
      $this->returningCountry = $returningCountry;
    }

    /**
     * @return string
     */
    public function getDeliveryID()
    {
      return $this->deliveryID;
    }

    /**
     * @param string $deliveryID
     * @return \GUS\correctionDTO
     */
    public function setDeliveryID($deliveryID)
    {
      $this->deliveryID = $deliveryID;
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
     * @return \GUS\correctionDTO
     */
    public function setEanNo($eanNo)
    {
      $this->eanNo = $eanNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getIsead()
    {
      return $this->isead;
    }

    /**
     * @param string $isead
     * @return \GUS\correctionDTO
     */
    public function setIsead($isead)
    {
      $this->isead = $isead;
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
     * @return \GUS\correctionDTO
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
     * @return \GUS\correctionDTO
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
     * @return \GUS\correctionDTO
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return string
     */
    public function getMovementDate()
    {
      return $this->movementDate;
    }

    /**
     * @param string $movementDate
     * @return \GUS\correctionDTO
     */
    public function setMovementDate($movementDate)
    {
      $this->movementDate = $movementDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getMovementType()
    {
      return $this->movementType;
    }

    /**
     * @param string $movementType
     * @return \GUS\correctionDTO
     */
    public function setMovementType($movementType)
    {
      $this->movementType = $movementType;
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
     * @return \GUS\correctionDTO
     */
    public function setQuantityPCS($quantityPCS)
    {
      $this->quantityPCS = $quantityPCS;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturningCountry()
    {
      return $this->returningCountry;
    }

    /**
     * @param string $returningCountry
     * @return \GUS\correctionDTO
     */
    public function setReturningCountry($returningCountry)
    {
      $this->returningCountry = $returningCountry;
      return $this;
    }

}
