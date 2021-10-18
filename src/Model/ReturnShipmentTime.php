<?php

namespace DHLClient\Model;

class ReturnShipmentTime
{

    /**
     * @var string $labelExpDate
     */
    protected $labelExpDate = null;

    
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
     * @return \DHLClient\Model\ReturnShipmentTime
     */
    public function setLabelExpDate($labelExpDate)
    {
      $this->labelExpDate = $labelExpDate;
      return $this;
    }

}
