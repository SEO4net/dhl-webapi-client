<?php

namespace DHLClient\Model;

class CreateReturnShipmentRequest
{

    /**
     * @var ReturnShipmentInfo $shipmentInfo
     */
    protected $shipmentInfo = null;

    /**
     * @var string $content
     */
    protected $content = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var string $primaryWaybillNumber
     */
    protected $primaryWaybillNumber = null;

    /**
     * @var ReturnShip $ship
     */
    protected $ship = null;

    /**
     * @var ArrayOfReturnpackage $pieceList
     */
    protected $pieceList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReturnShipmentInfo
     */
    public function getShipmentInfo()
    {
      return $this->shipmentInfo;
    }

    /**
     * @param ReturnShipmentInfo $shipmentInfo
     * @return \DHLClient\Model\CreateReturnShipmentRequest
     */
    public function setShipmentInfo($shipmentInfo)
    {
      $this->shipmentInfo = $shipmentInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param string $content
     * @return \DHLClient\Model\CreateReturnShipmentRequest
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return \DHLClient\Model\CreateReturnShipmentRequest
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param string $reference
     * @return \DHLClient\Model\CreateReturnShipmentRequest
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrimaryWaybillNumber()
    {
      return $this->primaryWaybillNumber;
    }

    /**
     * @param string $primaryWaybillNumber
     * @return \DHLClient\Model\CreateReturnShipmentRequest
     */
    public function setPrimaryWaybillNumber($primaryWaybillNumber)
    {
      $this->primaryWaybillNumber = $primaryWaybillNumber;
      return $this;
    }

    /**
     * @return ReturnShip
     */
    public function getShip()
    {
      return $this->ship;
    }

    /**
     * @param ReturnShip $ship
     * @return \DHLClient\Model\CreateReturnShipmentRequest
     */
    public function setShip($ship)
    {
      $this->ship = $ship;
      return $this;
    }

    /**
     * @return ArrayOfReturnpackage
     */
    public function getPieceList()
    {
      return $this->pieceList;
    }

    /**
     * @param ArrayOfReturnpackage $pieceList
     * @return \DHLClient\Model\CreateReturnShipmentRequest
     */
    public function setPieceList($pieceList)
    {
      $this->pieceList = $pieceList;
      return $this;
    }

}
