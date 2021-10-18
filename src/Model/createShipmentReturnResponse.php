<?php

namespace DHLClient\Model;

class createShipmentReturnResponse
{

    /**
     * @var ArrayOfCreatereturnshipmentresponse $createShipmentReturnResult
     */
    protected $createShipmentReturnResult = null;

    /**
     * @param ArrayOfCreatereturnshipmentresponse $createShipmentReturnResult
     */
    public function __construct($createShipmentReturnResult)
    {
      $this->createShipmentReturnResult = $createShipmentReturnResult;
    }

    /**
     * @return ArrayOfCreatereturnshipmentresponse
     */
    public function getCreateShipmentReturnResult()
    {
      return $this->createShipmentReturnResult;
    }

    /**
     * @param ArrayOfCreatereturnshipmentresponse $createShipmentReturnResult
     * @return \DHLClient\Model\createShipmentReturnResponse
     */
    public function setCreateShipmentReturnResult($createShipmentReturnResult)
    {
      $this->createShipmentReturnResult = $createShipmentReturnResult;
      return $this;
    }

}
