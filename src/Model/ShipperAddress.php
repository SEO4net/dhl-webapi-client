<?php

namespace DHLClient\Model;

class ShipperAddress
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
     * @var string $postalCode
     */
    protected $postalCode = null;

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
     * @return \DHLClient\Model\ShipperAddress
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
     * @return \DHLClient\Model\ShipperAddress
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return \DHLClient\Model\ShipperAddress
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
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
     * @return \DHLClient\Model\ShipperAddress
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
     * @return \DHLClient\Model\ShipperAddress
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
     * @return \DHLClient\Model\ShipperAddress
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
     * @return \DHLClient\Model\ShipperAddress
     */
    public function setApartmentNumber($apartmentNumber)
    {
      $this->apartmentNumber = $apartmentNumber;
      return $this;
    }

}
