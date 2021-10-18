<?php

namespace DHLClient\Model;

class ReturnShip
{

    /**
     * @var ReturnAddressat $shipper
     */
    protected $shipper = null;

    /**
     * @var ReturnAddressat $receiver
     */
    protected $receiver = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReturnAddressat
     */
    public function getShipper()
    {
      return $this->shipper;
    }

    /**
     * @param ReturnAddressat $shipper
     * @return \DHLClient\Model\ReturnShip
     */
    public function setShipper($shipper)
    {
      $this->shipper = $shipper;
      return $this;
    }

    /**
     * @return ReturnAddressat
     */
    public function getReceiver()
    {
      return $this->receiver;
    }

    /**
     * @param ReturnAddressat $receiver
     * @return \DHLClient\Model\ReturnShip
     */
    public function setReceiver($receiver)
    {
      $this->receiver = $receiver;
      return $this;
    }

}
