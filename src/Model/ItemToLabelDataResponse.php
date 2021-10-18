<?php

namespace DHLClient\Model;

class ItemToLabelDataResponse
{

    /**
     * @var string $shipmentId
     */
    protected $shipmentId = null;

    /**
     * @var string $primaryWaybillNumber
     */
    protected $primaryWaybillNumber = null;

    /**
     * @var string $dispatchNotificationNumber
     */
    protected $dispatchNotificationNumber = null;

    /**
     * @var string $labelHeader
     */
    protected $labelHeader = null;

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
     * @var Billing $billing
     */
    protected $billing = null;

    /**
     * @var ShipmentTimeLabelData $shipmentTime
     */
    protected $shipmentTime = null;

    /**
     * @var Routing $routing
     */
    protected $routing = null;

    /**
     * @var ShipperAddressLabelData $shipper
     */
    protected $shipper = null;

    /**
     * @var ReceiverAddressLabelData $receiver
     */
    protected $receiver = null;

    /**
     * @var NeighbourAddress $neighbour
     */
    protected $neighbour = null;

    /**
     * @var ServicePoint $servicepoint
     */
    protected $servicepoint = null;

    /**
     * @var LabelDataServiceDefinition $service
     */
    protected $service = null;

    /**
     * @var ArrayOfPiecedefinitionlabeldata $pieceList
     */
    protected $pieceList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getShipmentId()
    {
      return $this->shipmentId;
    }

    /**
     * @param string $shipmentId
     * @return \DHLClient\Model\ItemToLabelDataResponse
     */
    public function setShipmentId($shipmentId)
    {
      $this->shipmentId = $shipmentId;
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
     * @return \DHLClient\Model\ItemToLabelDataResponse
     */
    public function setPrimaryWaybillNumber($primaryWaybillNumber)
    {
      $this->primaryWaybillNumber = $primaryWaybillNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getDispatchNotificationNumber()
    {
      return $this->dispatchNotificationNumber;
    }

    /**
     * @param string $dispatchNotificationNumber
     * @return \DHLClient\Model\ItemToLabelDataResponse
     */
    public function setDispatchNotificationNumber($dispatchNotificationNumber)
    {
      $this->dispatchNotificationNumber = $dispatchNotificationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelHeader()
    {
      return $this->labelHeader;
    }

    /**
     * @param string $labelHeader
     * @return \DHLClient\Model\ItemToLabelDataResponse
     */
    public function setLabelHeader($labelHeader)
    {
      $this->labelHeader = $labelHeader;
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
     * @return \DHLClient\Model\ItemToLabelDataResponse
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
     * @return \DHLClient\Model\ItemToLabelDataResponse
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
     * @return \DHLClient\Model\ItemToLabelDataResponse
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return Billing
     */
    public function getBilling()
    {
      return $this->billing;
    }

    /**
     * @param Billing $billing
     * @return \DHLClient\Model\ItemToLabelDataResponse
     */
    public function setBilling($billing)
    {
      $this->billing = $billing;
      return $this;
    }

    /**
     * @return ShipmentTimeLabelData
     */
    public function getShipmentTime()
    {
      return $this->shipmentTime;
    }

    /**
     * @param ShipmentTimeLabelData $shipmentTime
     * @return \DHLClient\Model\ItemToLabelDataResponse
     */
    public function setShipmentTime($shipmentTime)
    {
      $this->shipmentTime = $shipmentTime;
      return $this;
    }

    /**
     * @return Routing
     */
    public function getRouting()
    {
      return $this->routing;
    }

    /**
     * @param Routing $routing
     * @return \DHLClient\Model\ItemToLabelDataResponse
     */
    public function setRouting($routing)
    {
      $this->routing = $routing;
      return $this;
    }

    /**
     * @return ShipperAddressLabelData
     */
    public function getShipper()
    {
      return $this->shipper;
    }

    /**
     * @param ShipperAddressLabelData $shipper
     * @return \DHLClient\Model\ItemToLabelDataResponse
     */
    public function setShipper($shipper)
    {
      $this->shipper = $shipper;
      return $this;
    }

    /**
     * @return ReceiverAddressLabelData
     */
    public function getReceiver()
    {
      return $this->receiver;
    }

    /**
     * @param ReceiverAddressLabelData $receiver
     * @return \DHLClient\Model\ItemToLabelDataResponse
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
     * @return \DHLClient\Model\ItemToLabelDataResponse
     */
    public function setNeighbour($neighbour)
    {
      $this->neighbour = $neighbour;
      return $this;
    }

    /**
     * @return ServicePoint
     */
    public function getServicepoint()
    {
      return $this->servicepoint;
    }

    /**
     * @param ServicePoint $servicepoint
     * @return \DHLClient\Model\ItemToLabelDataResponse
     */
    public function setServicepoint($servicepoint)
    {
      $this->servicepoint = $servicepoint;
      return $this;
    }

    /**
     * @return LabelDataServiceDefinition
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param LabelDataServiceDefinition $service
     * @return \DHLClient\Model\ItemToLabelDataResponse
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @return ArrayOfPiecedefinitionlabeldata
     */
    public function getPieceList()
    {
      return $this->pieceList;
    }

    /**
     * @param ArrayOfPiecedefinitionlabeldata $pieceList
     * @return \DHLClient\Model\ItemToLabelDataResponse
     */
    public function setPieceList($pieceList)
    {
      $this->pieceList = $pieceList;
      return $this;
    }

}
