<?php

namespace DHLClient\Model;

class ShipmentTimeLabelData
{

    /**
     * @var string $labelExpDate
     */
    protected $labelExpDate = null;

    /**
     * @var string $shipmentDate
     */
    protected $shipmentDate = null;

    /**
     * @var string $shipmentStartHour
     */
    protected $shipmentStartHour = null;

    /**
     * @var string $shipmentEndHour
     */
    protected $shipmentEndHour = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLabelExpDate()
    {
      return $this->labelExpDate;
    }

    /**
     * @param string $labelExpDate
     * @return \DHLClient\Model\ShipmentTimeLabelData
     */
    public function setLabelExpDate($labelExpDate)
    {
      $this->labelExpDate = $labelExpDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentDate()
    {
      return $this->shipmentDate;
    }

    /**
     * @param string $shipmentDate
     * @return \DHLClient\Model\ShipmentTimeLabelData
     */
    public function setShipmentDate($shipmentDate)
    {
      $this->shipmentDate = $shipmentDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentStartHour()
    {
      return $this->shipmentStartHour;
    }

    /**
     * @param string $shipmentStartHour
     * @return \DHLClient\Model\ShipmentTimeLabelData
     */
    public function setShipmentStartHour($shipmentStartHour)
    {
      $this->shipmentStartHour = $shipmentStartHour;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentEndHour()
    {
      return $this->shipmentEndHour;
    }

    /**
     * @param string $shipmentEndHour
     * @return \DHLClient\Model\ShipmentTimeLabelData
     */
    public function setShipmentEndHour($shipmentEndHour)
    {
      $this->shipmentEndHour = $shipmentEndHour;
      return $this;
    }

}
