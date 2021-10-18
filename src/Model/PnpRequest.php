<?php

namespace DHLClient\Model;

class PnpRequest
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var string $type
     */
    protected $type = null;

    
    public function __construct()
    {
    
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
     * @return \DHLClient\Model\PnpRequest
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param string $date
     * @return \DHLClient\Model\PnpRequest
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \DHLClient\Model\PnpRequest
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
