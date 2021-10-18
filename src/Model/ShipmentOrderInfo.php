<?php

namespace DHLClient\Model;

class ShipmentOrderInfo
{

    /**
     * @var AddressData $shipper
     */
    protected $shipper = null;

    /**
     * @var int $numberOfExPieces
     */
    protected $numberOfExPieces = null;

    /**
     * @var int $numberOfDrPieces
     */
    protected $numberOfDrPieces = null;

    /**
     * @var int $totalWeight
     */
    protected $totalWeight = null;

    /**
     * @var int $heaviestPieceWeight
     */
    protected $heaviestPieceWeight = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AddressData
     */
    public function getShipper()
    {
      return $this->shipper;
    }

    /**
     * @param AddressData $shipper
     * @return \DHLClient\Model\ShipmentOrderInfo
     */
    public function setShipper($shipper)
    {
      $this->shipper = $shipper;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfExPieces()
    {
      return $this->numberOfExPieces;
    }

    /**
     * @param int $numberOfExPieces
     * @return \DHLClient\Model\ShipmentOrderInfo
     */
    public function setNumberOfExPieces($numberOfExPieces)
    {
      $this->numberOfExPieces = $numberOfExPieces;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfDrPieces()
    {
      return $this->numberOfDrPieces;
    }

    /**
     * @param int $numberOfDrPieces
     * @return \DHLClient\Model\ShipmentOrderInfo
     */
    public function setNumberOfDrPieces($numberOfDrPieces)
    {
      $this->numberOfDrPieces = $numberOfDrPieces;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalWeight()
    {
      return $this->totalWeight;
    }

    /**
     * @param int $totalWeight
     * @return \DHLClient\Model\ShipmentOrderInfo
     */
    public function setTotalWeight($totalWeight)
    {
      $this->totalWeight = $totalWeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeaviestPieceWeight()
    {
      return $this->heaviestPieceWeight;
    }

    /**
     * @param int $heaviestPieceWeight
     * @return \DHLClient\Model\ShipmentOrderInfo
     */
    public function setHeaviestPieceWeight($heaviestPieceWeight)
    {
      $this->heaviestPieceWeight = $heaviestPieceWeight;
      return $this;
    }

}
