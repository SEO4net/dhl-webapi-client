<?php

namespace DHLClient\Model;

class getLabelsData
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var ArrayOfItemtolabeldata $itemsToLabelData
     */
    protected $itemsToLabelData = null;

    /**
     * @param AuthData $authData
     * @param ArrayOfItemtolabeldata $itemsToLabelData
     */
    public function __construct($authData, $itemsToLabelData)
    {
      $this->authData = $authData;
      $this->itemsToLabelData = $itemsToLabelData;
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
     * @return \DHLClient\Model\getLabelsData
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return ArrayOfItemtolabeldata
     */
    public function getItemsToLabelData()
    {
      return $this->itemsToLabelData;
    }

    /**
     * @param ArrayOfItemtolabeldata $itemsToLabelData
     * @return \DHLClient\Model\getLabelsData
     */
    public function setItemsToLabelData($itemsToLabelData)
    {
      $this->itemsToLabelData = $itemsToLabelData;
      return $this;
    }

}
