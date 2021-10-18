<?php

namespace DHLClient\Model;

class getShipmentScanResponse
{

    /**
     * @var ScanToPrintResponse $getShipmentScanResult
     */
    protected $getShipmentScanResult = null;

    /**
     * @param ScanToPrintResponse $getShipmentScanResult
     */
    public function __construct($getShipmentScanResult)
    {
      $this->getShipmentScanResult = $getShipmentScanResult;
    }

    /**
     * @return ScanToPrintResponse
     */
    public function getGetShipmentScanResult()
    {
      return $this->getShipmentScanResult;
    }

    /**
     * @param ScanToPrintResponse $getShipmentScanResult
     * @return \DHLClient\Model\getShipmentScanResponse
     */
    public function setGetShipmentScanResult($getShipmentScanResult)
    {
      $this->getShipmentScanResult = $getShipmentScanResult;
      return $this;
    }

}
