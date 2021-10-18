<?php

namespace DHLClient\Model;

class PostalCodeServicesResponse
{

    /**
     * @var boolean $domesticExpress9
     */
    protected $domesticExpress9 = null;

    /**
     * @var boolean $domesticExpress12
     */
    protected $domesticExpress12 = null;

    /**
     * @var boolean $deliveryEvening
     */
    protected $deliveryEvening = null;

    /**
     * @var boolean $pickupOnSaturday
     */
    protected $pickupOnSaturday = null;

    /**
     * @var boolean $deliverySaturday
     */
    protected $deliverySaturday = null;

    /**
     * @var string $exPickupFrom
     */
    protected $exPickupFrom = null;

    /**
     * @var string $exPickupTo
     */
    protected $exPickupTo = null;

    /**
     * @var string $drPickupFrom
     */
    protected $drPickupFrom = null;

    /**
     * @var string $drPickupTo
     */
    protected $drPickupTo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getDomesticExpress9()
    {
      return $this->domesticExpress9;
    }

    /**
     * @param boolean $domesticExpress9
     * @return \DHLClient\Model\PostalCodeServicesResponse
     */
    public function setDomesticExpress9($domesticExpress9)
    {
      $this->domesticExpress9 = $domesticExpress9;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDomesticExpress12()
    {
      return $this->domesticExpress12;
    }

    /**
     * @param boolean $domesticExpress12
     * @return \DHLClient\Model\PostalCodeServicesResponse
     */
    public function setDomesticExpress12($domesticExpress12)
    {
      $this->domesticExpress12 = $domesticExpress12;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliveryEvening()
    {
      return $this->deliveryEvening;
    }

    /**
     * @param boolean $deliveryEvening
     * @return \DHLClient\Model\PostalCodeServicesResponse
     */
    public function setDeliveryEvening($deliveryEvening)
    {
      $this->deliveryEvening = $deliveryEvening;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPickupOnSaturday()
    {
      return $this->pickupOnSaturday;
    }

    /**
     * @param boolean $pickupOnSaturday
     * @return \DHLClient\Model\PostalCodeServicesResponse
     */
    public function setPickupOnSaturday($pickupOnSaturday)
    {
      $this->pickupOnSaturday = $pickupOnSaturday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliverySaturday()
    {
      return $this->deliverySaturday;
    }

    /**
     * @param boolean $deliverySaturday
     * @return \DHLClient\Model\PostalCodeServicesResponse
     */
    public function setDeliverySaturday($deliverySaturday)
    {
      $this->deliverySaturday = $deliverySaturday;
      return $this;
    }

    /**
     * @return string
     */
    public function getExPickupFrom()
    {
      return $this->exPickupFrom;
    }

    /**
     * @param string $exPickupFrom
     * @return \DHLClient\Model\PostalCodeServicesResponse
     */
    public function setExPickupFrom($exPickupFrom)
    {
      $this->exPickupFrom = $exPickupFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getExPickupTo()
    {
      return $this->exPickupTo;
    }

    /**
     * @param string $exPickupTo
     * @return \DHLClient\Model\PostalCodeServicesResponse
     */
    public function setExPickupTo($exPickupTo)
    {
      $this->exPickupTo = $exPickupTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getDrPickupFrom()
    {
      return $this->drPickupFrom;
    }

    /**
     * @param string $drPickupFrom
     * @return \DHLClient\Model\PostalCodeServicesResponse
     */
    public function setDrPickupFrom($drPickupFrom)
    {
      $this->drPickupFrom = $drPickupFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getDrPickupTo()
    {
      return $this->drPickupTo;
    }

    /**
     * @param string $drPickupTo
     * @return \DHLClient\Model\PostalCodeServicesResponse
     */
    public function setDrPickupTo($drPickupTo)
    {
      $this->drPickupTo = $drPickupTo;
      return $this;
    }

}
