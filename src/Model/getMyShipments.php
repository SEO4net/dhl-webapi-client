<?php

namespace DHLClient\Model;

class getMyShipments
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var string $createdFrom
     */
    protected $createdFrom = null;

    /**
     * @var string $createdTo
     */
    protected $createdTo = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @param AuthData $authData
     * @param string $createdFrom
     * @param string $createdTo
     * @param int $offset
     */
    public function __construct($authData, $createdFrom, $createdTo, $offset)
    {
      $this->authData = $authData;
      $this->createdFrom = $createdFrom;
      $this->createdTo = $createdTo;
      $this->offset = $offset;
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
     * @return \DHLClient\Model\getMyShipments
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedFrom()
    {
      return $this->createdFrom;
    }

    /**
     * @param string $createdFrom
     * @return \DHLClient\Model\getMyShipments
     */
    public function setCreatedFrom($createdFrom)
    {
      $this->createdFrom = $createdFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedTo()
    {
      return $this->createdTo;
    }

    /**
     * @param string $createdTo
     * @return \DHLClient\Model\getMyShipments
     */
    public function setCreatedTo($createdTo)
    {
      $this->createdTo = $createdTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
      return $this->offset;
    }

    /**
     * @param int $offset
     * @return \DHLClient\Model\getMyShipments
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

}
