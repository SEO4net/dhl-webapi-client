<?php

namespace DHLClient\Model;

class getTrackAndTraceInfo
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var string $shipmentId
     */
    protected $shipmentId = null;

    /**
     * @param AuthData $authData
     * @param string $shipmentId
     */
    public function __construct($authData, $shipmentId)
    {
      $this->authData = $authData;
      $this->shipmentId = $shipmentId;
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
     * @return \DHLClient\Model\getTrackAndTraceInfo
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
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
     * @return \DHLClient\Model\getTrackAndTraceInfo
     */
    public function setShipmentId($shipmentId)
    {
      $this->shipmentId = $shipmentId;
      return $this;
    }

}
