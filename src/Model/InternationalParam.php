<?php

namespace DHLClient\Model;

class InternationalParam
{

    /**
     * @var string $countryName
     */
    protected $countryName = null;

    /**
     * @var string $countryNameEn
     */
    protected $countryNameEn = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $product
     */
    protected $product = null;

    /**
     * @var string $pieceHeader
     */
    protected $pieceHeader = null;

    /**
     * @var string $routing
     */
    protected $routing = null;

    /**
     * @var string $code2l
     */
    protected $code2l = null;

    /**
     * @var int $pickupDays
     */
    protected $pickupDays = null;

    /**
     * @var float $courierMaxWeight
     */
    protected $courierMaxWeight = null;

    /**
     * @var int $courierMaxWidth
     */
    protected $courierMaxWidth = null;

    /**
     * @var int $courierMaxHeight
     */
    protected $courierMaxHeight = null;

    /**
     * @var int $courierMaxLength
     */
    protected $courierMaxLength = null;

    /**
     * @var int $courierMaxCod
     */
    protected $courierMaxCod = null;

    /**
     * @var string $courierCodCurrency
     */
    protected $courierCodCurrency = null;

    /**
     * @var float $courierExchrate
     */
    protected $courierExchrate = null;

    /**
     * @var boolean $courierNstAvailable
     */
    protected $courierNstAvailable = null;

    /**
     * @var int $courierMaxNst
     */
    protected $courierMaxNst = null;

    /**
     * @var int $courierMaxGirth
     */
    protected $courierMaxGirth = null;

    /**
     * @var boolean $packstationAvailable
     */
    protected $packstationAvailable = null;

    /**
     * @var float $packstationMaxWeight
     */
    protected $packstationMaxWeight = null;

    /**
     * @var int $packstationMaxWidth
     */
    protected $packstationMaxWidth = null;

    /**
     * @var int $packstationMaxHeight
     */
    protected $packstationMaxHeight = null;

    /**
     * @var int $packstationMaxLength
     */
    protected $packstationMaxLength = null;

    /**
     * @var boolean $postfilialeAvailable
     */
    protected $postfilialeAvailable = null;

    /**
     * @var float $postfilialeMaxWeight
     */
    protected $postfilialeMaxWeight = null;

    /**
     * @var int $postfilialeMaxWidth
     */
    protected $postfilialeMaxWidth = null;

    /**
     * @var int $postfilialeMaxHeight
     */
    protected $postfilialeMaxHeight = null;

    /**
     * @var int $postfilialeMaxLength
     */
    protected $postfilialeMaxLength = null;

    /**
     * @var string $zipFormat
     */
    protected $zipFormat = null;

    /**
     * @var string $identifier
     */
    protected $identifier = null;

    /**
     * @var int $emailRequired
     */
    protected $emailRequired = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
      return $this->countryName;
    }

    /**
     * @param string $countryName
     * @return \DHLClient\Model\InternationalParam
     */
    public function setCountryName($countryName)
    {
      $this->countryName = $countryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryNameEn()
    {
      return $this->countryNameEn;
    }

    /**
     * @param string $countryNameEn
     * @return \DHLClient\Model\InternationalParam
     */
    public function setCountryNameEn($countryNameEn)
    {
      $this->countryNameEn = $countryNameEn;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return \DHLClient\Model\InternationalParam
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
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
     * @return \DHLClient\Model\InternationalParam
     */
    public function setProduct($product)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return string
     */
    public function getPieceHeader()
    {
      return $this->pieceHeader;
    }

    /**
     * @param string $pieceHeader
     * @return \DHLClient\Model\InternationalParam
     */
    public function setPieceHeader($pieceHeader)
    {
      $this->pieceHeader = $pieceHeader;
      return $this;
    }

    /**
     * @return string
     */
    public function getRouting()
    {
      return $this->routing;
    }

    /**
     * @param string $routing
     * @return \DHLClient\Model\InternationalParam
     */
    public function setRouting($routing)
    {
      $this->routing = $routing;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode2l()
    {
      return $this->code2l;
    }

    /**
     * @param string $code2l
     * @return \DHLClient\Model\InternationalParam
     */
    public function setCode2l($code2l)
    {
      $this->code2l = $code2l;
      return $this;
    }

    /**
     * @return int
     */
    public function getPickupDays()
    {
      return $this->pickupDays;
    }

    /**
     * @param int $pickupDays
     * @return \DHLClient\Model\InternationalParam
     */
    public function setPickupDays($pickupDays)
    {
      $this->pickupDays = $pickupDays;
      return $this;
    }

    /**
     * @return float
     */
    public function getCourierMaxWeight()
    {
      return $this->courierMaxWeight;
    }

    /**
     * @param float $courierMaxWeight
     * @return \DHLClient\Model\InternationalParam
     */
    public function setCourierMaxWeight($courierMaxWeight)
    {
      $this->courierMaxWeight = $courierMaxWeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getCourierMaxWidth()
    {
      return $this->courierMaxWidth;
    }

    /**
     * @param int $courierMaxWidth
     * @return \DHLClient\Model\InternationalParam
     */
    public function setCourierMaxWidth($courierMaxWidth)
    {
      $this->courierMaxWidth = $courierMaxWidth;
      return $this;
    }

    /**
     * @return int
     */
    public function getCourierMaxHeight()
    {
      return $this->courierMaxHeight;
    }

    /**
     * @param int $courierMaxHeight
     * @return \DHLClient\Model\InternationalParam
     */
    public function setCourierMaxHeight($courierMaxHeight)
    {
      $this->courierMaxHeight = $courierMaxHeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getCourierMaxLength()
    {
      return $this->courierMaxLength;
    }

    /**
     * @param int $courierMaxLength
     * @return \DHLClient\Model\InternationalParam
     */
    public function setCourierMaxLength($courierMaxLength)
    {
      $this->courierMaxLength = $courierMaxLength;
      return $this;
    }

    /**
     * @return int
     */
    public function getCourierMaxCod()
    {
      return $this->courierMaxCod;
    }

    /**
     * @param int $courierMaxCod
     * @return \DHLClient\Model\InternationalParam
     */
    public function setCourierMaxCod($courierMaxCod)
    {
      $this->courierMaxCod = $courierMaxCod;
      return $this;
    }

    /**
     * @return string
     */
    public function getCourierCodCurrency()
    {
      return $this->courierCodCurrency;
    }

    /**
     * @param string $courierCodCurrency
     * @return \DHLClient\Model\InternationalParam
     */
    public function setCourierCodCurrency($courierCodCurrency)
    {
      $this->courierCodCurrency = $courierCodCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getCourierExchrate()
    {
      return $this->courierExchrate;
    }

    /**
     * @param float $courierExchrate
     * @return \DHLClient\Model\InternationalParam
     */
    public function setCourierExchrate($courierExchrate)
    {
      $this->courierExchrate = $courierExchrate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCourierNstAvailable()
    {
      return $this->courierNstAvailable;
    }

    /**
     * @param boolean $courierNstAvailable
     * @return \DHLClient\Model\InternationalParam
     */
    public function setCourierNstAvailable($courierNstAvailable)
    {
      $this->courierNstAvailable = $courierNstAvailable;
      return $this;
    }

    /**
     * @return int
     */
    public function getCourierMaxNst()
    {
      return $this->courierMaxNst;
    }

    /**
     * @param int $courierMaxNst
     * @return \DHLClient\Model\InternationalParam
     */
    public function setCourierMaxNst($courierMaxNst)
    {
      $this->courierMaxNst = $courierMaxNst;
      return $this;
    }

    /**
     * @return int
     */
    public function getCourierMaxGirth()
    {
      return $this->courierMaxGirth;
    }

    /**
     * @param int $courierMaxGirth
     * @return \DHLClient\Model\InternationalParam
     */
    public function setCourierMaxGirth($courierMaxGirth)
    {
      $this->courierMaxGirth = $courierMaxGirth;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPackstationAvailable()
    {
      return $this->packstationAvailable;
    }

    /**
     * @param boolean $packstationAvailable
     * @return \DHLClient\Model\InternationalParam
     */
    public function setPackstationAvailable($packstationAvailable)
    {
      $this->packstationAvailable = $packstationAvailable;
      return $this;
    }

    /**
     * @return float
     */
    public function getPackstationMaxWeight()
    {
      return $this->packstationMaxWeight;
    }

    /**
     * @param float $packstationMaxWeight
     * @return \DHLClient\Model\InternationalParam
     */
    public function setPackstationMaxWeight($packstationMaxWeight)
    {
      $this->packstationMaxWeight = $packstationMaxWeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackstationMaxWidth()
    {
      return $this->packstationMaxWidth;
    }

    /**
     * @param int $packstationMaxWidth
     * @return \DHLClient\Model\InternationalParam
     */
    public function setPackstationMaxWidth($packstationMaxWidth)
    {
      $this->packstationMaxWidth = $packstationMaxWidth;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackstationMaxHeight()
    {
      return $this->packstationMaxHeight;
    }

    /**
     * @param int $packstationMaxHeight
     * @return \DHLClient\Model\InternationalParam
     */
    public function setPackstationMaxHeight($packstationMaxHeight)
    {
      $this->packstationMaxHeight = $packstationMaxHeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackstationMaxLength()
    {
      return $this->packstationMaxLength;
    }

    /**
     * @param int $packstationMaxLength
     * @return \DHLClient\Model\InternationalParam
     */
    public function setPackstationMaxLength($packstationMaxLength)
    {
      $this->packstationMaxLength = $packstationMaxLength;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPostfilialeAvailable()
    {
      return $this->postfilialeAvailable;
    }

    /**
     * @param boolean $postfilialeAvailable
     * @return \DHLClient\Model\InternationalParam
     */
    public function setPostfilialeAvailable($postfilialeAvailable)
    {
      $this->postfilialeAvailable = $postfilialeAvailable;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostfilialeMaxWeight()
    {
      return $this->postfilialeMaxWeight;
    }

    /**
     * @param float $postfilialeMaxWeight
     * @return \DHLClient\Model\InternationalParam
     */
    public function setPostfilialeMaxWeight($postfilialeMaxWeight)
    {
      $this->postfilialeMaxWeight = $postfilialeMaxWeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostfilialeMaxWidth()
    {
      return $this->postfilialeMaxWidth;
    }

    /**
     * @param int $postfilialeMaxWidth
     * @return \DHLClient\Model\InternationalParam
     */
    public function setPostfilialeMaxWidth($postfilialeMaxWidth)
    {
      $this->postfilialeMaxWidth = $postfilialeMaxWidth;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostfilialeMaxHeight()
    {
      return $this->postfilialeMaxHeight;
    }

    /**
     * @param int $postfilialeMaxHeight
     * @return \DHLClient\Model\InternationalParam
     */
    public function setPostfilialeMaxHeight($postfilialeMaxHeight)
    {
      $this->postfilialeMaxHeight = $postfilialeMaxHeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostfilialeMaxLength()
    {
      return $this->postfilialeMaxLength;
    }

    /**
     * @param int $postfilialeMaxLength
     * @return \DHLClient\Model\InternationalParam
     */
    public function setPostfilialeMaxLength($postfilialeMaxLength)
    {
      $this->postfilialeMaxLength = $postfilialeMaxLength;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipFormat()
    {
      return $this->zipFormat;
    }

    /**
     * @param string $zipFormat
     * @return \DHLClient\Model\InternationalParam
     */
    public function setZipFormat($zipFormat)
    {
      $this->zipFormat = $zipFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
      return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return \DHLClient\Model\InternationalParam
     */
    public function setIdentifier($identifier)
    {
      $this->identifier = $identifier;
      return $this;
    }

    /**
     * @return int
     */
    public function getEmailRequired()
    {
      return $this->emailRequired;
    }

    /**
     * @param int $emailRequired
     * @return \DHLClient\Model\InternationalParam
     */
    public function setEmailRequired($emailRequired)
    {
      $this->emailRequired = $emailRequired;
      return $this;
    }

}
