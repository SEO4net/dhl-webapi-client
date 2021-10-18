<?php

namespace DHLClient\Model;

class ReturnService
{

    /**
     * @var string $serviceType
     */
    protected $serviceType = null;

    /**
     * @var float $serviceValue
     */
    protected $serviceValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
      return $this->serviceType;
    }

    /**
     * @param string $serviceType
     * @return \DHLClient\Model\ReturnService
     */
    public function setServiceType($serviceType)
    {
      $this->serviceType = $serviceType;
      return $this;
    }

    /**
     * @return float
     */
    public function getServiceValue()
    {
      return $this->serviceValue;
    }

    /**
     * @param float $serviceValue
     * @return \DHLClient\Model\ReturnService
     */
    public function setServiceValue($serviceValue)
    {
      $this->serviceValue = $serviceValue;
      return $this;
    }

}
