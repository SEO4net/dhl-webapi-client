<?php

namespace DHLClient\Model;

class PreavisoContact
{

    /**
     * @var string $personName
     */
    protected $personName = null;

    /**
     * @var string $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var string $emailAddress
     */
    protected $emailAddress = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPersonName()
    {
      return $this->personName;
    }

    /**
     * @param string $personName
     * @return \DHLClient\Model\PreavisoContact
     */
    public function setPersonName($personName)
    {
      $this->personName = $personName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return \DHLClient\Model\PreavisoContact
     */
    public function setPhoneNumber($phoneNumber)
    {
      $this->phoneNumber = $phoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
      return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return \DHLClient\Model\PreavisoContact
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

}
