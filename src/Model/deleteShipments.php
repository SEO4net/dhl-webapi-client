<?php

namespace DHLClient\Model;

class deleteShipments
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var ArrayOfString $shipments
     */
    protected $shipments = null;

    /**
     * @param AuthData $authData
     * @param ArrayOfString $shipments
     */
    public function __construct($authData, $shipments)
    {
      $this->authData = $authData;
      $this->shipments = $shipments;
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
     * @return \DHLClient\Model\deleteShipments
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getShipments()
    {
      return $this->shipments;
    }

    /**
     * @param ArrayOfString $shipments
     * @return \DHLClient\Model\deleteShipments
     */
    public function setShipments($shipments)
    {
      $this->shipments = $shipments;
      return $this;
    }

}
