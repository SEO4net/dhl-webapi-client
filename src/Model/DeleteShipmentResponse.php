<?php

namespace DHLClient\Model;

class DeleteShipmentResponse
{

    /**
     * @var \DHLClient\Model\Response\DeleteShipmentResult $deleteShipmentResult
     */
    protected $deleteShipmentResult = null;

    /**
     * @param \DHLClient\Model\Response\DeleteShipmentResult $deleteShipmentResult
     */
    public function __construct($deleteShipmentResult)
    {
      $this->deleteShipmentResult = $deleteShipmentResult;
    }

    /**
     * @return \DHLClient\Model\Response\DeleteShipmentResult
     */
    public function getDeleteShipmentResult()
    {
      return $this->deleteShipmentResult;
    }

    /**
     * @param \DHLClient\Model\Response\DeleteShipmentResult $deleteShipmentResult
     * @return \DHLClient\Model\DeleteShipmentResponse
     */
    public function setDeleteShipmentResult($deleteShipmentResult)
    {
      $this->deleteShipmentResult = $deleteShipmentResult;
      return $this;
    }

}
