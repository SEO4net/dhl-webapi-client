<?php

namespace DHLClient\Model;

class deleteShipmentsResponse
{

    /**
     * @var ArrayOfDeletenotification $deleteShipmentsResult
     */
    protected $deleteShipmentsResult = null;

    /**
     * @param ArrayOfDeletenotification $deleteShipmentsResult
     */
    public function __construct($deleteShipmentsResult)
    {
      $this->deleteShipmentsResult = $deleteShipmentsResult;
    }

    /**
     * @return ArrayOfDeletenotification
     */
    public function getDeleteShipmentsResult()
    {
      return $this->deleteShipmentsResult;
    }

    /**
     * @param ArrayOfDeletenotification $deleteShipmentsResult
     * @return \DHLClient\Model\deleteShipmentsResponse
     */
    public function setDeleteShipmentsResult($deleteShipmentsResult)
    {
      $this->deleteShipmentsResult = $deleteShipmentsResult;
      return $this;
    }

}
