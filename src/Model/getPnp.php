<?php

namespace DHLClient\Model;

class getPnp
{

    /**
     * @var PnpRequest $pnpRequest
     */
    protected $pnpRequest = null;

    /**
     * @param PnpRequest $pnpRequest
     */
    public function __construct($pnpRequest)
    {
      $this->pnpRequest = $pnpRequest;
    }

    /**
     * @return PnpRequest
     */
    public function getPnpRequest()
    {
      return $this->pnpRequest;
    }

    /**
     * @param PnpRequest $pnpRequest
     * @return \DHLClient\Model\getPnp
     */
    public function setPnpRequest($pnpRequest)
    {
      $this->pnpRequest = $pnpRequest;
      return $this;
    }

}
