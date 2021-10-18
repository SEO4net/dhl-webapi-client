<?php

namespace DHLClient\Model;

class DeleteNotification
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var boolean $result
     */
    protected $result = null;

    /**
     * @var string $error
     */
    protected $error = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \DHLClient\Model\DeleteNotification
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param boolean $result
     * @return \DHLClient\Model\DeleteNotification
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param string $error
     * @return \DHLClient\Model\DeleteNotification
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
