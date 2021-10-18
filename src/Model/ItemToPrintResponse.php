<?php

namespace DHLClient\Model;

class ItemToPrintResponse
{

    /**
     * @var string $shipmentId
     */
    protected $shipmentId = null;

    /**
     * @var string $labelType
     */
    protected $labelType = null;

    /**
     * @var string $labelName
     */
    protected $labelName = null;

    /**
     * @var string $labelData
     */
    protected $labelData = null;

    /**
     * @var string $labelMimeType
     */
    protected $labelMimeType = null;

    
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
     * @return \DHLClient\Model\ItemToPrintResponse
     */
    public function setShipmentId($shipmentId)
    {
      $this->shipmentId = $shipmentId;
      return $this;
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
     * @return \DHLClient\Model\ItemToPrintResponse
     */
    public function setLabelType($labelType)
    {
      $this->labelType = $labelType;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelName()
    {
      return $this->labelName;
    }

    /**
     * @param string $labelName
     * @return \DHLClient\Model\ItemToPrintResponse
     */
    public function setLabelName($labelName)
    {
      $this->labelName = $labelName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelData()
    {
      return $this->labelData;
    }

    /**
     * @param string $labelData
     * @return \DHLClient\Model\ItemToPrintResponse
     */
    public function setLabelData($labelData)
    {
      $this->labelData = $labelData;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelMimeType()
    {
      return $this->labelMimeType;
    }

    /**
     * @param string $labelMimeType
     * @return \DHLClient\Model\ItemToPrintResponse
     */
    public function setLabelMimeType($labelMimeType)
    {
      $this->labelMimeType = $labelMimeType;
      return $this;
    }

}
