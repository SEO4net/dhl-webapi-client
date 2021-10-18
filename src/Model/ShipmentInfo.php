<?php

namespace DHLClient\Model;

class ShipmentInfo
{

    /**
     * @var string $dropOffType
     */
    protected $dropOffType = null;

    /**
     * @var string $serviceType
     */
    protected $serviceType = null;

    /**
     * @var Billing $billing
     */
    protected $billing = null;

    /**
     * @var ArrayOfService $specialServices
     */
    protected $specialServices = null;

    /**
     * @var ShipmentTime $shipmentTime
     */
    protected $shipmentTime = null;

    /**
     * @var string $labelType
     */
    protected $labelType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDropOffType()
    {
      return $this->dropOffType;
    }

    /**
     * @param string $dropOffType
     * @return \DHLClient\Model\ShipmentInfo
     */
    public function setDropOffType($dropOffType)
    {
      $this->dropOffType = $dropOffType;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
      return $this->serviceType;
    }

    /**
     * @param string $serviceType
     * @return \DHLClient\Model\ShipmentInfo
     */
    public function setServiceType($serviceType)
    {
      $this->serviceType = $serviceType;
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
     * @return \DHLClient\Model\ShipmentInfo
     */
    public function setBilling($billing)
    {
      $this->billing = $billing;
      return $this;
    }

    /**
     * @return ArrayOfService
     */
    public function getSpecialServices()
    {
      return $this->specialServices;
    }

    /**
     * @param ArrayOfService $specialServices
     * @return \DHLClient\Model\ShipmentInfo
     */
    public function setSpecialServices($specialServices)
    {
      $this->specialServices = $specialServices;
      return $this;
    }

    /**
     * @return ShipmentTime
     */
    public function getShipmentTime()
    {
      return $this->shipmentTime;
    }

    /**
     * @param ShipmentTime $shipmentTime
     * @return \DHLClient\Model\ShipmentInfo
     */
    public function setShipmentTime($shipmentTime)
    {
      $this->shipmentTime = $shipmentTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelType()
    {
      return $this->labelType;
    }

    /**
     * @param string $labelType
     * @return \DHLClient\Model\ShipmentInfo
     */
    public function setLabelType($labelType)
    {
      $this->labelType = $labelType;
      return $this;
    }

}
