<?php

namespace DHLClient\Model;

class ItemToLabelData
{

    /**
     * @var string $shipmentId
     */
    protected $shipmentId = null;

    
    public function __construct()
    {
    
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
     * @return \DHLClient\Model\ItemToLabelData
     */
    public function setShipmentId($shipmentId)
    {
      $this->shipmentId = $shipmentId;
      return $this;
    }

}
