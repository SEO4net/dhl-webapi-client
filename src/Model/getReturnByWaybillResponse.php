<?php

namespace DHLClient\Model;

class getReturnByWaybillResponse
{

    /**
     * @var ArrayOfCreateshipmentresponse $getReturnByWaybillResult
     */
    protected $getReturnByWaybillResult = null;

    /**
     * @param ArrayOfCreateshipmentresponse $getReturnByWaybillResult
     */
    public function __construct($getReturnByWaybillResult)
    {
      $this->getReturnByWaybillResult = $getReturnByWaybillResult;
    }

    /**
     * @return ArrayOfCreateshipmentresponse
     */
    public function getGetReturnByWaybillResult()
    {
      return $this->getReturnByWaybillResult;
    }

    /**
     * @param ArrayOfCreateshipmentresponse $getReturnByWaybillResult
     * @return \DHLClient\Model\getReturnByWaybillResponse
     */
    public function setGetReturnByWaybillResult($getReturnByWaybillResult)
    {
      $this->getReturnByWaybillResult = $getReturnByWaybillResult;
      return $this;
    }

}
