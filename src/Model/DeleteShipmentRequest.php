<?php

namespace DHLClient\Model;

class DeleteShipmentRequest
{

    /**
     * @var string $shipmentIdentificationNumber
     */
    protected $shipmentIdentificationNumber = null;

    /**
     * @var string $dispatchIdentificationNumber
     */
    protected $dispatchIdentificationNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getShipmentIdentificationNumber()
    {
      return $this->shipmentIdentificationNumber;
    }

    /**
     * @param string $shipmentIdentificationNumber
     * @return \DHLClient\Model\DeleteShipmentRequest
     */
    public function setShipmentIdentificationNumber($shipmentIdentificationNumber)
    {
      $this->shipmentIdentificationNumber = $shipmentIdentificationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getDispatchIdentificationNumber()
    {
      return $this->dispatchIdentificationNumber;
    }

    /**
     * @param string $dispatchIdentificationNumber
     * @return \DHLClient\Model\DeleteShipmentRequest
     */
    public function setDispatchIdentificationNumber($dispatchIdentificationNumber)
    {
      $this->dispatchIdentificationNumber = $dispatchIdentificationNumber;
      return $this;
    }

}
