<?php

namespace DHLClient\Model;

class GetNearestServicepointsRequest
{

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $postcode
     */
    protected $postcode = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var int $radius
     */
    protected $radius = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \DHLClient\Model\GetNearestServicepointsRequest
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
      return $this->postcode;
    }

    /**
     * @param string $postcode
     * @return \DHLClient\Model\GetNearestServicepointsRequest
     */
    public function setPostcode($postcode)
    {
      $this->postcode = $postcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \DHLClient\Model\GetNearestServicepointsRequest
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
      return $this->radius;
    }

    /**
     * @param int $radius
     * @return \DHLClient\Model\GetNearestServicepointsRequest
     */
    public function setRadius($radius)
    {
      $this->radius = $radius;
      return $this;
    }

}
