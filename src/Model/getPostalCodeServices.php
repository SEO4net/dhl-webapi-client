<?php

namespace DHLClient\Model;

class getPostalCodeServices
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var string $postCode
     */
    protected $postCode = null;

    /**
     * @var string $pickupDate
     */
    protected $pickupDate = null;

    /**
     * @param AuthData $authData
     * @param string $postCode
     * @param string $pickupDate
     */
    public function __construct($authData, $postCode, $pickupDate)
    {
      $this->authData = $authData;
      $this->postCode = $postCode;
      $this->pickupDate = $pickupDate;
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
     * @return \DHLClient\Model\getPostalCodeServices
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
      return $this->postCode;
    }

    /**
     * @param string $postCode
     * @return \DHLClient\Model\getPostalCodeServices
     */
    public function setPostCode($postCode)
    {
      $this->postCode = $postCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupDate()
    {
      return $this->pickupDate;
    }

    /**
     * @param string $pickupDate
     * @return \DHLClient\Model\getPostalCodeServices
     */
    public function setPickupDate($pickupDate)
    {
      $this->pickupDate = $pickupDate;
      return $this;
    }

}
