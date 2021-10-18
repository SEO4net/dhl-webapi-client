<?php

namespace DHLClient\Model;

class Addressat
{

    /**
     * @var PreavisoContact $preaviso
     */
    protected $preaviso = null;

    /**
     * @var PreavisoContact $contact
     */
    protected $contact = null;

    /**
     * @var Address $address
     */
    protected $address = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PreavisoContact
     */
    public function getPreaviso()
    {
      return $this->preaviso;
    }

    /**
     * @param PreavisoContact $preaviso
     * @return \DHLClient\Model\Addressat
     */
    public function setPreaviso($preaviso)
    {
      $this->preaviso = $preaviso;
      return $this;
    }

    /**
     * @return PreavisoContact
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param PreavisoContact $contact
     * @return \DHLClient\Model\Addressat
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param Address $address
     * @return \DHLClient\Model\Addressat
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

}
