<?php

namespace DHLClient\Model;

class createShipmentReturn
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var CreateReturnShipmentRequest $shipment
     */
    protected $shipment = null;

    /**
     * @param AuthData $authData
     * @param CreateReturnShipmentRequest $shipment
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
     * @return \DHLClient\Model\createShipmentReturn
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return CreateReturnShipmentRequest
     */
    public function getShipment()
    {
      return $this->shipment;
    }

    /**
     * @param CreateReturnShipmentRequest $shipment
     * @return \DHLClient\Model\createShipmentReturn
     */
    public function setShipment($shipment)
    {
      $this->shipment = $shipment;
      return $this;
    }

}
