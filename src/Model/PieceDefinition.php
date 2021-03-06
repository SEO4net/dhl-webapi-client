<?php

namespace DHLClient\Model;

class PieceDefinition
{
    /**
     * @var string|PackageType $type
     */
    protected $type = null;

    /**
     * @var int $width
     */
    protected $width = null;

    /**
     * @var int $height
     */
    protected $height = null;

    /**
     * @var int $length
     */
    protected $length = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @var boolean $nonStandard
     */
    protected $nonStandard = null;

    /**
     * @var string $blpPieceId
     */
    protected $blpPieceId = null;

    /**
     * @var boolean $euroReturn
     */
    protected $euroReturn = null;

    public function __construct()
    {
    }

    /**
     * @return string|PackageType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string|PackageType $type
     * @return \DHLClient\Model\PieceDefinition
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param int $width
     * @return \DHLClient\Model\PieceDefinition
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param int $height
     * @return \DHLClient\Model\PieceDefinition
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return int
     */
    public function getLength()
    {
      return $this->length;
    }

    /**
     * @param int $length
     * @return \DHLClient\Model\PieceDefinition
     */
    public function setLength($length)
    {
      $this->length = $length;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param float $weight
     * @return \DHLClient\Model\PieceDefinition
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return \DHLClient\Model\PieceDefinition
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonStandard()
    {
      return $this->nonStandard;
    }

    /**
     * @param boolean $nonStandard
     * @return \DHLClient\Model\PieceDefinition
     */
    public function setNonStandard($nonStandard)
    {
      $this->nonStandard = $nonStandard;
      return $this;
    }

    /**
     * @return string
     */
    public function getBlpPieceId()
    {
      return $this->blpPieceId;
    }

    /**
     * @param string $blpPieceId
     * @return \DHLClient\Model\PieceDefinition
     */
    public function setBlpPieceId($blpPieceId)
    {
      $this->blpPieceId = $blpPieceId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEuroReturn()
    {
      return $this->euroReturn;
    }

    /**
     * @param boolean $euroReturn
     * @return \DHLClient\Model\PieceDefinition
     */
    public function setEuroReturn($euroReturn)
    {
      $this->euroReturn = $euroReturn;
      return $this;
    }

}
