<?php

namespace DHLClient\Model;

class getLabelsDataResponse
{

    /**
     * @var ArrayOfItemtolabeldataresponse $getLabelsDataResult
     */
    protected $getLabelsDataResult = null;

    /**
     * @param ArrayOfItemtolabeldataresponse $getLabelsDataResult
     */
    public function __construct($getLabelsDataResult)
    {
      $this->getLabelsDataResult = $getLabelsDataResult;
    }

    /**
     * @return ArrayOfItemtolabeldataresponse
     */
    public function getGetLabelsDataResult()
    {
      return $this->getLabelsDataResult;
    }

    /**
     * @param ArrayOfItemtolabeldataresponse $getLabelsDataResult
     * @return \DHLClient\Model\getLabelsDataResponse
     */
    public function setGetLabelsDataResult($getLabelsDataResult)
    {
      $this->getLabelsDataResult = $getLabelsDataResult;
      return $this;
    }

}
