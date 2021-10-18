<?php

namespace DHLClient\Model;

class ReceiverAddressLabelData
{

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

    /**
     * @var string $preavisoPhone
     */
    protected $preavisoPhone = null;

    /**
     * @var string $preavisoEmail
     */
    protected $preavisoEmail = null;

    /**
     * @var string $preavisoPerson
     */
    protected $preavisoPerson = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var boolean $isPackstation
     */
    protected $isPackstation = null;

    /**
     * @var boolean $isPostfiliale
     */
    protected $isPostfiliale = null;

    /**
     * @var string $postnummer
     */
    protected $postnummer = null;

    /**
     * @var string $addressType
     */
    protected $addressType = null;

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
    public function getContactPerson()
    {
      return $this->contactPerson;
    }

    /**
     * @param string $contactPerson
     * @return \DHLClient\Model\ReceiverAddressLabelData
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
     * @return \DHLClient\Model\ReceiverAddressLabelData
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
     * @return \DHLClient\Model\ReceiverAddressLabelData
     */
    public function setContactEmail($contactEmail)
    {
      $this->contactEmail = $contactEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreavisoPhone()
    {
      return $this->preavisoPhone;
    }

    /**
     * @param string $preavisoPhone
     * @return \DHLClient\Model\ReceiverAddressLabelData
     */
    public function setPreavisoPhone($preavisoPhone)
    {
      $this->preavisoPhone = $preavisoPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreavisoEmail()
    {
      return $this->preavisoEmail;
    }

    /**
     * @param string $preavisoEmail
     * @return \DHLClient\Model\ReceiverAddressLabelData
     */
    public function setPreavisoEmail($preavisoEmail)
    {
      $this->preavisoEmail = $preavisoEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreavisoPerson()
    {
      return $this->preavisoPerson;
    }

    /**
     * @param string $preavisoPerson
     * @return \DHLClient\Model\ReceiverAddressLabelData
     */
    public function setPreavisoPerson($preavisoPerson)
    {
      $this->preavisoPerson = $preavisoPerson;
      return $this;
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
     * @return \DHLClient\Model\ReceiverAddressLabelData
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPackstation()
    {
      return $this->isPackstation;
    }

    /**
     * @param boolean $isPackstation
     * @return \DHLClient\Model\ReceiverAddressLabelData
     */
    public function setIsPackstation($isPackstation)
    {
      $this->isPackstation = $isPackstation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPostfiliale()
    {
      return $this->isPostfiliale;
    }

    /**
     * @param boolean $isPostfiliale
     * @return \DHLClient\Model\ReceiverAddressLabelData
     */
    public function setIsPostfiliale($isPostfiliale)
    {
      $this->isPostfiliale = $isPostfiliale;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostnummer()
    {
      return $this->postnummer;
    }

    /**
     * @param string $postnummer
     * @return \DHLClient\Model\ReceiverAddressLabelData
     */
    public function setPostnummer($postnummer)
    {
      $this->postnummer = $postnummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressType()
    {
      return $this->addressType;
    }

    /**
     * @param string $addressType
     * @return \DHLClient\Model\ReceiverAddressLabelData
     */
    public function setAddressType($addressType)
    {
      $this->addressType = $addressType;
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
     * @return \DHLClient\Model\ReceiverAddressLabelData
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
     * @return \DHLClient\Model\ReceiverAddressLabelData
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
     * @return \DHLClient\Model\ReceiverAddressLabelData
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
     * @return \DHLClient\Model\ReceiverAddressLabelData
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
     * @return \DHLClient\Model\ReceiverAddressLabelData
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
     * @return \DHLClient\Model\ReceiverAddressLabelData
     */
    public function setApartmentNumber($apartmentNumber)
    {
      $this->apartmentNumber = $apartmentNumber;
      return $this;
    }

}
