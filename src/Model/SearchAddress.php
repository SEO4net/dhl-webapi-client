<?php

namespace DHLClient\Model;

class SearchAddress
{

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $postcode
     */
    protected $postcode = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $houseNumber
     */
    protected $houseNumber = null;

    /**
     * @var string $apartmentNumber
     */
    protected $apartmentNumber = null;

    
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
     * @return \DHLClient\Model\SearchAddress
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \DHLClient\Model\SearchAddress
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \DHLClient\Model\SearchAddress
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
     * @return \DHLClient\Model\SearchAddress
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->street;
    }

    /**
     * @param string $street
     * @return \DHLClient\Model\SearchAddress
     */
    public function setStreet($street)
    {
      $this->street = $street;
      return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumber()
    {
      return $this->houseNumber;
    }

    /**
     * @param string $houseNumber
     * @return \DHLClient\Model\SearchAddress
     */
    public function setHouseNumber($houseNumber)
    {
      $this->houseNumber = $houseNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getApartmentNumber()
    {
      return $this->apartmentNumber;
    }

    /**
     * @param string $apartmentNumber
     * @return \DHLClient\Model\SearchAddress
     */
    public function setApartmentNumber($apartmentNumber)
    {
      $this->apartmentNumber = $apartmentNumber;
      return $this;
    }

}
