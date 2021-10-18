<?php

namespace DHLClient\Model;

class ReturnAddressat
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
     * @var ShipperAddress $address
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
     * @return \DHLClient\Model\ReturnAddressat
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
     * @return \DHLClient\Model\ReturnAddressat
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return ShipperAddress
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param ShipperAddress $address
     * @return \DHLClient\Model\ReturnAddressat
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

}
