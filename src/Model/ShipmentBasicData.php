<?php

namespace DHLClient\Model;

class ShipmentBasicData
{

    /**
     * @var string $shipmentId
     */
    protected $shipmentId = null;

    /**
     * @var string $created
     */
    protected $created = null;

    /**
     * @var AddressData $shipper
     */
    protected $shipper = null;

    /**
     * @var AddressData $receiver
     */
    protected $receiver = null;

    /**
     * @var string $orderStatus
     */
    protected $orderStatus = null;

    
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
     * @return \DHLClient\Model\ShipmentBasicData
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
     * @return \DHLClient\Model\ShipmentBasicData
     */
    public function setCreated($created)
    {
      $this->created = $created;
      return $this;
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
     * @return \DHLClient\Model\ShipmentBasicData
     */
    public function setShipper($shipper)
    {
      $this->shipper = $shipper;
      return $this;
    }

    /**
     * @return AddressData
     */
    public function getReceiver()
    {
      return $this->receiver;
    }

    /**
     * @param AddressData $receiver
     * @return \DHLClient\Model\ShipmentBasicData
     */
    public function setReceiver($receiver)
    {
      $this->receiver = $receiver;
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
     * @return \DHLClient\Model\ShipmentBasicData
     */
    public function setOrderStatus($orderStatus)
    {
      $this->orderStatus = $orderStatus;
      return $this;
    }

}
