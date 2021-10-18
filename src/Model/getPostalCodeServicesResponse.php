<?php

namespace DHLClient\Model;

class getPostalCodeServicesResponse
{

    /**
     * @var PostalCodeServicesResponse $getPostalCodeServicesResult
     */
    protected $getPostalCodeServicesResult = null;

    /**
     * @param PostalCodeServicesResponse $getPostalCodeServicesResult
     */
    public function __construct($getPostalCodeServicesResult)
    {
      $this->getPostalCodeServicesResult = $getPostalCodeServicesResult;
    }

    /**
     * @return PostalCodeServicesResponse
     */
    public function getGetPostalCodeServicesResult()
    {
      return $this->getPostalCodeServicesResult;
    }

    /**
     * @param PostalCodeServicesResponse $getPostalCodeServicesResult
     * @return \DHLClient\Model\getPostalCodeServicesResponse
     */
    public function setGetPostalCodeServicesResult($getPostalCodeServicesResult)
    {
      $this->getPostalCodeServicesResult = $getPostalCodeServicesResult;
      return $this;
    }

}
