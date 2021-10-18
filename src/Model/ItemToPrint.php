<?php

namespace DHLClient\Model;

class ItemToPrint
{

    /**
     * @var string $labelType
     */
    protected $labelType = null;

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
    public function getLabelType()
    {
      return $this->labelType;
    }

    /**
     * @param string $labelType
     * @return \DHLClient\Model\ItemToPrint
     */
    public function setLabelType($labelType)
    {
      $this->labelType = $labelType;
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
     * @return \DHLClient\Model\ItemToPrint
     */
    public function setShipmentId($shipmentId)
    {
      $this->shipmentId = $shipmentId;
      return $this;
    }

}
