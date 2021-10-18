<?php

namespace DHLClient\Model;

class getReturnParams
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @param AuthData $authData
     */
    public function __construct($authData)
    {
      $this->authData = $authData;
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
     * @return \DHLClient\Model\getReturnParams
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

}
