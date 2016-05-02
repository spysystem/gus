<?php

namespace GUS;

class saleDTO
{

    /**
     * @var string $deliveryID
     */
    protected $deliveryID = null;

    /**
     * @var string $destCountry
     */
    protected $destCountry = null;

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
     * @var string $netWeight
     */
    protected $netWeight = null;

    /**
     * @var string $price
     */
    protected $price = null;

    /**
     * @var string $priceCurrency
     */
    protected $priceCurrency = null;

    /**
     * @var string $quantityPCS
     */
    protected $quantityPCS = null;

    /**
     * @var string $transactionDate
     */
    protected $transactionDate = null;

    /**
     * @param string $deliveryID
     * @param string $destCountry
     * @param string $eanNo
     * @param string $itemID
     * @param string $itemType
     * @param string $location
     * @param string $netWeight
     * @param string $price
     * @param string $priceCurrency
     * @param string $quantityPCS
     * @param string $transactionDate
     */
    public function __construct($deliveryID, $destCountry, $eanNo, $itemID, $itemType, $location, $netWeight, $price, $priceCurrency, $quantityPCS, $transactionDate)
    {
      $this->deliveryID = $deliveryID;
      $this->destCountry = $destCountry;
      $this->eanNo = $eanNo;
      $this->itemID = $itemID;
      $this->itemType = $itemType;
      $this->location = $location;
      $this->netWeight = $netWeight;
      $this->price = $price;
      $this->priceCurrency = $priceCurrency;
      $this->quantityPCS = $quantityPCS;
      $this->transactionDate = $transactionDate;
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
     * @return \GUS\saleDTO
     */
    public function setDeliveryID($deliveryID)
    {
      $this->deliveryID = $deliveryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestCountry()
    {
      return $this->destCountry;
    }

    /**
     * @param string $destCountry
     * @return \GUS\saleDTO
     */
    public function setDestCountry($destCountry)
    {
      $this->destCountry = $destCountry;
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
     * @return \GUS\saleDTO
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
     * @return \GUS\saleDTO
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
     * @return \GUS\saleDTO
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
     * @return \GUS\saleDTO
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return string
     */
    public function getNetWeight()
    {
      return $this->netWeight;
    }

    /**
     * @param string $netWeight
     * @return \GUS\saleDTO
     */
    public function setNetWeight($netWeight)
    {
      $this->netWeight = $netWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param string $price
     * @return \GUS\saleDTO
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceCurrency()
    {
      return $this->priceCurrency;
    }

    /**
     * @param string $priceCurrency
     * @return \GUS\saleDTO
     */
    public function setPriceCurrency($priceCurrency)
    {
      $this->priceCurrency = $priceCurrency;
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
     * @return \GUS\saleDTO
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
     * @return \GUS\saleDTO
     */
    public function setTransactionDate($transactionDate)
    {
      $this->transactionDate = $transactionDate;
      return $this;
    }

}
