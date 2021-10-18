<?php

namespace DHLClient\Model;

class ShipmentFullData
{

    /**
     * @var AddressData $shipper
     */
    protected $shipper = null;

    /**
     * @var ReceiverAddressData $receiver
     */
    protected $receiver = null;

    /**
     * @var NeighbourAddress $neighbour
     */
    protected $neighbour = null;

    /**
     * @var ArrayOfPiecedefinition $pieceList
     */
    protected $pieceList = null;

    /**
     * @var PaymentData $payment
     */
    protected $payment = null;

    /**
     * @var ServiceDefinition $service
     */
    protected $service = null;

    /**
     * @var string $shipmentDate
     */
    protected $shipmentDate = null;

    /**
     * @var boolean $skipRestrictionCheck
     */
    protected $skipRestrictionCheck = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $content
     */
    protected $content = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var int $shipmentId
     */
    protected $shipmentId = null;

    /**
     * @var string $created
     */
    protected $created = null;

    /**
     * @var string $orderStatus
     */
    protected $orderStatus = null;

    /**
     * @param boolean $skipRestrictionCheck
     */
    public function __construct($skipRestrictionCheck)
    {
      $this->skipRestrictionCheck = $skipRestrictionCheck;
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
     * @return \DHLClient\Model\ShipmentFullData
     */
    public function setShipper($shipper)
    {
      $this->shipper = $shipper;
      return $this;
    }

    /**
     * @return ReceiverAddressData
     */
    public function getReceiver()
    {
      return $this->receiver;
    }

    /**
     * @param ReceiverAddressData $receiver
     * @return \DHLClient\Model\ShipmentFullData
     */
    public function setReceiver($receiver)
    {
      $this->receiver = $receiver;
      return $this;
    }

    /**
     * @return NeighbourAddress
     */
    public function getNeighbour()
    {
      return $this->neighbour;
    }

    /**
     * @param NeighbourAddress $neighbour
     * @return \DHLClient\Model\ShipmentFullData
     */
    public function setNeighbour($neighbour)
    {
      $this->neighbour = $neighbour;
      return $this;
    }

    /**
     * @return ArrayOfPiecedefinition
     */
    public function getPieceList()
    {
      return $this->pieceList;
    }

    /**
     * @param ArrayOfPiecedefinition $pieceList
     * @return \DHLClient\Model\ShipmentFullData
     */
    public function setPieceList($pieceList)
    {
      $this->pieceList = $pieceList;
      return $this;
    }

    /**
     * @return PaymentData
     */
    public function getPayment()
    {
      return $this->payment;
    }

    /**
     * @param PaymentData $payment
     * @return \DHLClient\Model\ShipmentFullData
     */
    public function setPayment($payment)
    {
      $this->payment = $payment;
      return $this;
    }

    /**
     * @return ServiceDefinition
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param ServiceDefinition $service
     * @return \DHLClient\Model\ShipmentFullData
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentDate()
    {
      return $this->shipmentDate;
    }

    /**
     * @param string $shipmentDate
     * @return \DHLClient\Model\ShipmentFullData
     */
    public function setShipmentDate($shipmentDate)
    {
      $this->shipmentDate = $shipmentDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSkipRestrictionCheck()
    {
      return $this->skipRestrictionCheck;
    }

    /**
     * @param boolean $skipRestrictionCheck
     * @return \DHLClient\Model\ShipmentFullData
     */
    public function setSkipRestrictionCheck($skipRestrictionCheck)
    {
      $this->skipRestrictionCheck = $skipRestrictionCheck;
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
     * @return \DHLClient\Model\ShipmentFullData
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
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
     * @return \DHLClient\Model\ShipmentFullData
     */
    public function setContent($content)
    {
      $this->content = $content;
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
     * @return \DHLClient\Model\ShipmentFullData
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipmentId()
    {
      return $this->shipmentId;
    }

    /**
     * @param int $shipmentId
     * @return \DHLClient\Model\ShipmentFullData
     */
    public function setShipmentId($shipmentId)
    {
      $this->shipmentId = $shipmentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreated()
    {
      return $this->created;
    }

    /**
     * @param string $created
     * @return \DHLClient\Model\ShipmentFullData
     */
    public function setCreated($created)
    {
      $this->created = $created;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderStatus()
    {
      return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     * @return \DHLClient\Model\ShipmentFullData
     */
    public function setOrderStatus($orderStatus)
    {
      $this->orderStatus = $orderStatus;
      return $this;
    }

}
