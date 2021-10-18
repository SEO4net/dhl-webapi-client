<?php

namespace DHLClient\Model;

class getNearestServicepoints
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var GetNearestServicepointsRequest $structure
     */
    protected $structure = null;

    /**
     * @param AuthData $authData
     * @param GetNearestServicepointsRequest $structure
     */
    public function __construct($authData, $structure)
    {
      $this->authData = $authData;
      $this->structure = $structure;
    }

    /**
     * @return AuthData
     */
    public function getAuthData()
    {
      return $this->authData;
    }

    /**
     * @param AuthData $authData
     * @return \DHLClient\Model\getNearestServicepoints
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return GetNearestServicepointsRequest
     */
    public function getStructure()
    {
      return $this->structure;
    }

    /**
     * @param GetNearestServicepointsRequest $structure
     * @return \DHLClient\Model\getNearestServicepoints
     */
    public function setStructure($structure)
    {
      $this->structure = $structure;
      return $this;
    }

}
