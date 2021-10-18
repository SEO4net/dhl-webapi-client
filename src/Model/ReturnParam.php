<?php

namespace DHLClient\Model;

class ReturnParam
{

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
     * @var boolean $courierAvailable
     */
    protected $courierAvailable = null;

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
     * @var boolean $courierNstAvailable
     */
    protected $courierNstAvailable = null;

    /**
     * @var int $maxNst
     */
    protected $maxNst = null;

    /**
     * @var int $maxGirth
     */
    protected $maxGirth = null;

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
     * @var boolean $packstationNstAvailable
     */
    protected $packstationNstAvailable = null;

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
     * @var boolean $postfilialeNstAvailable
     */
    protected $postfilialeNstAvailable = null;

    /**
     * @var int $postfilialeMaxLength
     */
    protected $postfilialeMaxLength = null;

    /**
     * @var string $zipFormat
     */
    protected $zipFormat = null;

    
    public function __construct()
    {
    
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
     */
    public function setCode2l($code2l)
    {
      $this->code2l = $code2l;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCourierAvailable()
    {
      return $this->courierAvailable;
    }

    /**
     * @param boolean $courierAvailable
     * @return \DHLClient\Model\ReturnParam
     */
    public function setCourierAvailable($courierAvailable)
    {
      $this->courierAvailable = $courierAvailable;
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
     */
    public function setCourierMaxCod($courierMaxCod)
    {
      $this->courierMaxCod = $courierMaxCod;
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
     * @return \DHLClient\Model\ReturnParam
     */
    public function setCourierNstAvailable($courierNstAvailable)
    {
      $this->courierNstAvailable = $courierNstAvailable;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNst()
    {
      return $this->maxNst;
    }

    /**
     * @param int $maxNst
     * @return \DHLClient\Model\ReturnParam
     */
    public function setMaxNst($maxNst)
    {
      $this->maxNst = $maxNst;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxGirth()
    {
      return $this->maxGirth;
    }

    /**
     * @param int $maxGirth
     * @return \DHLClient\Model\ReturnParam
     */
    public function setMaxGirth($maxGirth)
    {
      $this->maxGirth = $maxGirth;
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
     */
    public function setPackstationMaxHeight($packstationMaxHeight)
    {
      $this->packstationMaxHeight = $packstationMaxHeight;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPackstationNstAvailable()
    {
      return $this->packstationNstAvailable;
    }

    /**
     * @param boolean $packstationNstAvailable
     * @return \DHLClient\Model\ReturnParam
     */
    public function setPackstationNstAvailable($packstationNstAvailable)
    {
      $this->packstationNstAvailable = $packstationNstAvailable;
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
     */
    public function setPostfilialeMaxHeight($postfilialeMaxHeight)
    {
      $this->postfilialeMaxHeight = $postfilialeMaxHeight;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPostfilialeNstAvailable()
    {
      return $this->postfilialeNstAvailable;
    }

    /**
     * @param boolean $postfilialeNstAvailable
     * @return \DHLClient\Model\ReturnParam
     */
    public function setPostfilialeNstAvailable($postfilialeNstAvailable)
    {
      $this->postfilialeNstAvailable = $postfilialeNstAvailable;
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
     * @return \DHLClient\Model\ReturnParam
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
     * @return \DHLClient\Model\ReturnParam
     */
    public function setZipFormat($zipFormat)
    {
      $this->zipFormat = $zipFormat;
      return $this;
    }

}
