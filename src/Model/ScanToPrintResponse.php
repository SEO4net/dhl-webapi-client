<?php

namespace DHLClient\Model;

class ScanToPrintResponse
{

    /**
     * @var string $scanData
     */
    protected $scanData = null;

    /**
     * @var string $scanMimeType
     */
    protected $scanMimeType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getScanData()
    {
      return $this->scanData;
    }

    /**
     * @param string $scanData
     * @return \DHLClient\Model\ScanToPrintResponse
     */
    public function setScanData($scanData)
    {
      $this->scanData = $scanData;
      return $this;
    }

    /**
     * @return string
     */
    public function getScanMimeType()
    {
      return $this->scanMimeType;
    }

    /**
     * @param string $scanMimeType
     * @return \DHLClient\Model\ScanToPrintResponse
     */
    public function setScanMimeType($scanMimeType)
    {
      $this->scanMimeType = $scanMimeType;
      return $this;
    }

}
