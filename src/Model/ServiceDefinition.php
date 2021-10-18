<?php

namespace DHLClient\Model;

class ServiceDefinition
{

    /**
     * @var string $product
     */
    protected $product = null;

    /**
     * @var boolean $deliveryEvening
     */
    protected $deliveryEvening = null;

    /**
     * @var boolean $deliveryOnSaturday
     */
    protected $deliveryOnSaturday = null;

    /**
     * @var boolean $pickupOnSaturday
     */
    protected $pickupOnSaturday = null;

    /**
     * @var boolean $collectOnDelivery
     */
    protected $collectOnDelivery = null;

    /**
     * @var float $collectOnDeliveryValue
     */
    protected $collectOnDeliveryValue = null;

    /**
     * @var string $collectOnDeliveryForm
     */
    protected $collectOnDeliveryForm = null;

    /**
     * @var string $collectOnDeliveryReference
     */
    protected $collectOnDeliveryReference = null;

    /**
     * @var boolean $insurance
     */
    protected $insurance = null;

    /**
     * @var float $insuranceValue
     */
    protected $insuranceValue = null;

    /**
     * @var boolean $returnOnDelivery
     */
    protected $returnOnDelivery = null;

    /**
     * @var string $returnOnDeliveryReference
     */
    protected $returnOnDeliveryReference = null;

    /**
     * @var boolean $proofOfDelivery
     */
    protected $proofOfDelivery = null;

    /**
     * @var boolean $selfCollect
     */
    protected $selfCollect = null;

    /**
     * @var boolean $predeliveryInformation
     */
    protected $predeliveryInformation = null;

    /**
     * @var boolean $deliveryToNeighbour
     */
    protected $deliveryToNeighbour = null;

    /**
     * @var boolean $preaviso
     */
    protected $preaviso = null;

    /**
     * @var boolean $additionalService
     */
    protected $additionalService = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param string $product
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setProduct($product)
    {
      $this->product = $product;
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
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setDeliveryEvening($deliveryEvening)
    {
      $this->deliveryEvening = $deliveryEvening;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliveryOnSaturday()
    {
      return $this->deliveryOnSaturday;
    }

    /**
     * @param boolean $deliveryOnSaturday
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setDeliveryOnSaturday($deliveryOnSaturday)
    {
      $this->deliveryOnSaturday = $deliveryOnSaturday;
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
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setPickupOnSaturday($pickupOnSaturday)
    {
      $this->pickupOnSaturday = $pickupOnSaturday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCollectOnDelivery()
    {
      return $this->collectOnDelivery;
    }

    /**
     * @param boolean $collectOnDelivery
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setCollectOnDelivery($collectOnDelivery)
    {
      $this->collectOnDelivery = $collectOnDelivery;
      return $this;
    }

    /**
     * @return float
     */
    public function getCollectOnDeliveryValue()
    {
      return $this->collectOnDeliveryValue;
    }

    /**
     * @param float $collectOnDeliveryValue
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setCollectOnDeliveryValue($collectOnDeliveryValue)
    {
      $this->collectOnDeliveryValue = $collectOnDeliveryValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectOnDeliveryForm()
    {
      return $this->collectOnDeliveryForm;
    }

    /**
     * @param string $collectOnDeliveryForm
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setCollectOnDeliveryForm($collectOnDeliveryForm)
    {
      $this->collectOnDeliveryForm = $collectOnDeliveryForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectOnDeliveryReference()
    {
      return $this->collectOnDeliveryReference;
    }

    /**
     * @param string $collectOnDeliveryReference
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setCollectOnDeliveryReference($collectOnDeliveryReference)
    {
      $this->collectOnDeliveryReference = $collectOnDeliveryReference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInsurance()
    {
      return $this->insurance;
    }

    /**
     * @param boolean $insurance
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setInsurance($insurance)
    {
      $this->insurance = $insurance;
      return $this;
    }

    /**
     * @return float
     */
    public function getInsuranceValue()
    {
      return $this->insuranceValue;
    }

    /**
     * @param float $insuranceValue
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setInsuranceValue($insuranceValue)
    {
      $this->insuranceValue = $insuranceValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnOnDelivery()
    {
      return $this->returnOnDelivery;
    }

    /**
     * @param boolean $returnOnDelivery
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setReturnOnDelivery($returnOnDelivery)
    {
      $this->returnOnDelivery = $returnOnDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnOnDeliveryReference()
    {
      return $this->returnOnDeliveryReference;
    }

    /**
     * @param string $returnOnDeliveryReference
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setReturnOnDeliveryReference($returnOnDeliveryReference)
    {
      $this->returnOnDeliveryReference = $returnOnDeliveryReference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProofOfDelivery()
    {
      return $this->proofOfDelivery;
    }

    /**
     * @param boolean $proofOfDelivery
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setProofOfDelivery($proofOfDelivery)
    {
      $this->proofOfDelivery = $proofOfDelivery;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSelfCollect()
    {
      return $this->selfCollect;
    }

    /**
     * @param boolean $selfCollect
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setSelfCollect($selfCollect)
    {
      $this->selfCollect = $selfCollect;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPredeliveryInformation()
    {
      return $this->predeliveryInformation;
    }

    /**
     * @param boolean $predeliveryInformation
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setPredeliveryInformation($predeliveryInformation)
    {
      $this->predeliveryInformation = $predeliveryInformation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliveryToNeighbour()
    {
      return $this->deliveryToNeighbour;
    }

    /**
     * @param boolean $deliveryToNeighbour
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setDeliveryToNeighbour($deliveryToNeighbour)
    {
      $this->deliveryToNeighbour = $deliveryToNeighbour;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreaviso()
    {
      return $this->preaviso;
    }

    /**
     * @param boolean $preaviso
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setPreaviso($preaviso)
    {
      $this->preaviso = $preaviso;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdditionalService()
    {
      return $this->additionalService;
    }

    /**
     * @param boolean $additionalService
     * @return \DHLClient\Model\ServiceDefinition
     */
    public function setAdditionalService($additionalService)
    {
      $this->additionalService = $additionalService;
      return $this;
    }

}
