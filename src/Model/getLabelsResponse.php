<?php

namespace DHLClient\Model;

class getLabelsResponse
{

    /**
     * @var ArrayOfItemtoprintresponse $getLabelsResult
     */
    protected $getLabelsResult = null;

    /**
     * @param ArrayOfItemtoprintresponse $getLabelsResult
     */
    public function __construct($getLabelsResult)
    {
      $this->getLabelsResult = $getLabelsResult;
    }

    /**
     * @return ArrayOfItemtoprintresponse
     */
    public function getGetLabelsResult()
    {
      return $this->getLabelsResult;
    }

    /**
     * @param ArrayOfItemtoprintresponse $getLabelsResult
     * @return \DHLClient\Model\getLabelsResponse
     */
    public function setGetLabelsResult($getLabelsResult)
    {
      $this->getLabelsResult = $getLabelsResult;
      return $this;
    }

}
