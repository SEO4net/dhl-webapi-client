<?php

namespace DHLClient\Model;

class Ship
{

    /**
     * @var Addressat $shipper
     */
    protected $shipper = null;

    /**
     * @var ReceiverAddressat $receiver
     */
    protected $receiver = null;

    /**
     * @var NeighbourAddress $neighbour
     */
    protected $neighbour = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Addressat
     */
    public function getShipper()
    {
      return $this->shipper;
    }

    /**
     * @param Addressat $shipper
     * @return \DHLClient\Model\Ship
     */
    public function setShipper($shipper)
    {
      $this->shipper = $shipper;
      return $this;
    }

    /**
     * @return ReceiverAddressat
     */
    public function getReceiver()
    {
      return $this->receiver;
    }

    /**
     * @param ReceiverAddressat $receiver
     * @return \DHLClient\Model\Ship
     */
    public function setReceiver($receiver)
    {
      $this->receiver = $receiver;
      return $this;
    }

    /**
     * @return NeighbourAddress
     */
    public function getNeighbour()
    {
      return $this->neighbour;
    }

    /**
     * @param NeighbourAddress $neighbour
     * @return \DHLClient\Model\Ship
     */
    public function setNeighbour($neighbour)
    {
      $this->neighbour = $neighbour;
      return $this;
    }

}
