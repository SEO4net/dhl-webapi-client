<?php

namespace DHLClient\Model;

class Routing
{

    /**
     * @var string $senderDepot
     */
    protected $senderDepot = null;

    /**
     * @var string $receiverDepot
     */
    protected $receiverDepot = null;

    /**
     * @var string $senderAps
     */
    protected $senderAps = null;

    /**
     * @var string $receiverAps
     */
    protected $receiverAps = null;

    /**
     * @var string $tourId
     */
    protected $tourId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSenderDepot()
    {
      return $this->senderDepot;
    }

    /**
     * @param string $senderDepot
     * @return \DHLClient\Model\Routing
     */
    public function setSenderDepot($senderDepot)
    {
      $this->senderDepot = $senderDepot;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceiverDepot()
    {
      return $this->receiverDepot;
    }

    /**
     * @param string $receiverDepot
     * @return \DHLClient\Model\Routing
     */
    public function setReceiverDepot($receiverDepot)
    {
      $this->receiverDepot = $receiverDepot;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderAps()
    {
      return $this->senderAps;
    }

    /**
     * @param string $senderAps
     * @return \DHLClient\Model\Routing
     */
    public function setSenderAps($senderAps)
    {
      $this->senderAps = $senderAps;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceiverAps()
    {
      return $this->receiverAps;
    }

    /**
     * @param string $receiverAps
     * @return \DHLClient\Model\Routing
     */
    public function setReceiverAps($receiverAps)
    {
      $this->receiverAps = $receiverAps;
      return $this;
    }

    /**
     * @return string
     */
    public function getTourId()
    {
      return $this->tourId;
    }

    /**
     * @param string $tourId
     * @return \DHLClient\Model\Routing
     */
    public function setTourId($tourId)
    {
      $this->tourId = $tourId;
      return $this;
    }

}
