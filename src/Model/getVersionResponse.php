<?php

namespace DHLClient\Model;

class getVersionResponse
{

    /**
     * @var string $getVersionResult
     */
    protected $getVersionResult = null;

    /**
     * @param string $getVersionResult
     */
    public function __construct($getVersionResult)
    {
      $this->getVersionResult = $getVersionResult;
    }

    /**
     * @return string
     */
    public function getGetVersionResult()
    {
      return $this->getVersionResult;
    }

    /**
     * @param string $getVersionResult
     * @return \DHLClient\Model\getVersionResponse
     */
    public function setGetVersionResult($getVersionResult)
    {
      $this->getVersionResult = $getVersionResult;
      return $this;
    }

}
