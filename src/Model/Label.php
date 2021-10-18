<?php

namespace DHLClient\Model;

class Label
{

    /**
     * @var string $labelType
     */
    protected $labelType = null;

    /**
     * @var string $labelFormat
     */
    protected $labelFormat = null;

    /**
     * @var string $labelContent
     */
    protected $labelContent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLabelType()
    {
      return $this->labelType;
    }

    /**
     * @param string $labelType
     * @return \DHLClient\Model\Label
     */
    public function setLabelType($labelType)
    {
      $this->labelType = $labelType;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelFormat()
    {
      return $this->labelFormat;
    }

    /**
     * @param string $labelFormat
     * @return \DHLClient\Model\Label
     */
    public function setLabelFormat($labelFormat)
    {
      $this->labelFormat = $labelFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelContent()
    {
      return $this->labelContent;
    }

    /**
     * @param string $labelContent
     * @return \DHLClient\Model\Label
     */
    public function setLabelContent($labelContent)
    {
      $this->labelContent = $labelContent;
      return $this;
    }

}
