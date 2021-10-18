<?php

namespace DHLClient\Model;

class deleteShipment
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var DeleteShipmentRequest $shipment
     */
    protected $shipment = null;

    /**
     * @param AuthData $authData
     * @param DeleteShipmentRequest $shipment
     */
    public function __construct($authData, $shipment)
    {
      $this->authData = $authData;
      $this->shipment = $shipment;
    }

    /**
     * @return AuthData
     */
    public function getAuthData()
    {
      return $this->authData;
    }

    /**
     * @param AuthData $authData
     * @return \DHLClient\Model\deleteShipment
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return DeleteShipmentRequest
     */
    public function getShipment()
    {
      return $this->shipment;
    }

    /**
     * @param DeleteShipmentRequest $shipment
     * @return \DHLClient\Model\deleteShipment
     */
    public function setShipment($shipment)
    {
      $this->shipment = $shipment;
      return $this;
    }

}
