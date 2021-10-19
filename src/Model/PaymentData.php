<?php

namespace DHLClient\Model;

class PaymentData
{

    /**
     * @var string|PaymentMethod $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var string|PaymentType $payerType
     */
    protected $payerType = null;

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var string $costsCenter
     */
    protected $costsCenter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string|PaymentMethod
     */
    public function getPaymentMethod()
    {
      return $this->paymentMethod;
    }

    /**
     * @param string|PaymentMethod $paymentMethod
     * @return \DHLClient\Model\PaymentData
     */
    public function setPaymentMethod($paymentMethod)
    {
      $this->paymentMethod = $paymentMethod;
      return $this;
    }

    /**
     * @return string|PaymentType
     */
    public function getPayerType()
    {
      return $this->payerType;
    }

    /**
     * @param string|PaymentType $payerType
     * @return \DHLClient\Model\PaymentData
     */
    public function setPayerType($payerType)
    {
      $this->payerType = $payerType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return \DHLClient\Model\PaymentData
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostsCenter()
    {
      return $this->costsCenter;
    }

    /**
     * @param string $costsCenter
     * @return \DHLClient\Model\PaymentData
     */
    public function setCostsCenter($costsCenter)
    {
      $this->costsCenter = $costsCenter;
      return $this;
    }

}
