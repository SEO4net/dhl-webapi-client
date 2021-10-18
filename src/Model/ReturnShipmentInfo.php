<?php

namespace DHLClient\Model;

class ReturnShipmentInfo
{

    /**
     * @var string $serviceType
     */
    protected $serviceType = null;

    /**
     * @var boolean $bookCourier
     */
    protected $bookCourier = null;

    /**
     * @var Billing $billing
     */
    protected $billing = null;

    /**
     * @var ArrayOfReturnservice $specialServices
     */
    protected $specialServices = null;

    /**
     * @var ReturnShipmentTime $shipmentTime
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
    public function getServiceType()
    {
      return $this->serviceType;
    }

    /**
     * @param string $serviceType
     * @return \DHLClient\Model\ReturnShipmentInfo
     */
    public function setServiceType($serviceType)
    {
      $this->serviceType = $serviceType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBookCourier()
    {
      return $this->bookCourier;
    }

    /**
     * @param boolean $bookCourier
     * @return \DHLClient\Model\ReturnShipmentInfo
     */
    public function setBookCourier($bookCourier)
    {
      $this->bookCourier = $bookCourier;
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
     * @return \DHLClient\Model\ReturnShipmentInfo
     */
    public function setBilling($billing)
    {
      $this->billing = $billing;
      return $this;
    }

    /**
     * @return ArrayOfReturnservice
     */
    public function getSpecialServices()
    {
      return $this->specialServices;
    }

    /**
     * @param ArrayOfReturnservice $specialServices
     * @return \DHLClient\Model\ReturnShipmentInfo
     */
    public function setSpecialServices($specialServices)
    {
      $this->specialServices = $specialServices;
      return $this;
    }

    /**
     * @return ReturnShipmentTime
     */
    public function getShipmentTime()
    {
      return $this->shipmentTime;
    }

    /**
     * @param ReturnShipmentTime $shipmentTime
     * @return \DHLClient\Model\ReturnShipmentInfo
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
     * @return \DHLClient\Model\ReturnShipmentInfo
     */
    public function setLabelType($labelType)
    {
      $this->labelType = $labelType;
      return $this;
    }

}
