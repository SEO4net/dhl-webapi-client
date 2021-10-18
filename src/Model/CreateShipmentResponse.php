<?php

namespace DHLClient\Model;

class CreateShipmentResponse
{

    /**
     * @var \DHLClient\Model\Response\CreateShipmentResult $createShipmentResult
     */
    protected $createShipmentResult = null;

    /**
     * @param \DHLClient\Model\Response\CreateShipmentResult $createShipmentResult
     */
    public function __construct($createShipmentResult)
    {
      $this->createShipmentResult = $createShipmentResult;
    }

    /**
     * @return \DHLClient\Model\Response\CreateShipmentResult
     */
    public function getCreateShipmentResult()
    {
      return $this->createShipmentResult;
    }

    /**
     * @param \DHLClient\Model\Response\CreateShipmentResult $createShipmentResult
     * @return \DHLClient\Model\CreateShipmentResponse
     */
    public function setCreateShipmentResult($createShipmentResult)
    {
      $this->createShipmentResult = $createShipmentResult;
      return $this;
    }

}
