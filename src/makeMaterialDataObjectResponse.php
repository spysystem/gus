<?php

namespace GUS;

class makeMaterialDataObjectResponse
{

    /**
     * @var boolean $return
     */
    protected $return = null;

    /**
     * @param boolean $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return boolean
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param boolean $return
     * @return \GUS\makeMaterialDataObjectResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
