<?php

namespace DHLClient\Model;

class AddressData
{

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

    /**
     * @var string $contactPerson
     */
    protected $contactPerson = null;

    /**
     * @var string $contactPhone
     */
    protected $contactPhone = null;

    /**
     * @var string $contactEmail
     */
    protected $contactEmail = null;

    
    public function __construct()
    {
    
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
     * @return \DHLClient\Model\AddressData
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
     * @return \DHLClient\Model\AddressData
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
     * @return \DHLClient\Model\AddressData
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
     * @return \DHLClient\Model\AddressData
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
     * @return \DHLClient\Model\AddressData
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
     * @return \DHLClient\Model\AddressData
     */
    public function setApartmentNumber($apartmentNumber)
    {
      $this->apartmentNumber = $apartmentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
      return $this->contactPerson;
    }

    /**
     * @param string $contactPerson
     * @return \DHLClient\Model\AddressData
     */
    public function setContactPerson($contactPerson)
    {
      $this->contactPerson = $contactPerson;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactPhone()
    {
      return $this->contactPhone;
    }

    /**
     * @param string $contactPhone
     * @return \DHLClient\Model\AddressData
     */
    public function setContactPhone($contactPhone)
    {
      $this->contactPhone = $contactPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
      return $this->contactEmail;
    }

    /**
     * @param string $contactEmail
     * @return \DHLClient\Model\AddressData
     */
    public function setContactEmail($contactEmail)
    {
      $this->contactEmail = $contactEmail;
      return $this;
    }

}
