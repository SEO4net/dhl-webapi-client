<?php

namespace DHLClient\Model;

class getReturnByWaybill
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var ArrayOfReturnitemtoprint $itemsToPrint
     */
    protected $itemsToPrint = null;

    /**
     * @param AuthData $authData
     * @param ArrayOfReturnitemtoprint $itemsToPrint
     */
    public function __construct($authData, $itemsToPrint)
    {
      $this->authData = $authData;
      $this->itemsToPrint = $itemsToPrint;
    }

    /**
     * @return AuthData
     */
    public function getAuthData()
    {
      return $this->authData;
    }

    /**
     * @param AuthData $authData
     * @return \DHLClient\Model\getReturnByWaybill
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return ArrayOfReturnitemtoprint
     */
    public function getItemsToPrint()
    {
      return $this->itemsToPrint;
    }

    /**
     * @param ArrayOfReturnitemtoprint $itemsToPrint
     * @return \DHLClient\Model\getReturnByWaybill
     */
    public function setItemsToPrint($itemsToPrint)
    {
      $this->itemsToPrint = $itemsToPrint;
      return $this;
    }

}
