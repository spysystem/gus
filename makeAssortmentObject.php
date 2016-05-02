<?php

namespace GUS;

class makeAssortmentObject
{

    /**
     * @var string $arg0
     */
    protected $arg0 = null;

    /**
     * @var assortmentDTO[] $arg1
     */
    protected $arg1 = null;

    /**
     * @param string $arg0
     * @param assortmentDTO[] $arg1
     */
    public function __construct($arg0, array $arg1)
    {
      $this->arg0 = $arg0;
      $this->arg1 = $arg1;
    }

    /**
     * @return string
     */
    public function getArg0()
    {
      return $this->arg0;
    }

    /**
     * @param string $arg0
     * @return \GUS\makeAssortmentObject
     */
    public function setArg0($arg0)
    {
      $this->arg0 = $arg0;
      return $this;
    }

    /**
     * @return assortmentDTO[]
     */
    public function getArg1()
    {
      return $this->arg1;
    }

    /**
     * @param assortmentDTO[] $arg1
     * @return \GUS\makeAssortmentObject
     */
    public function setArg1(array $arg1)
    {
      $this->arg1 = $arg1;
      return $this;
    }

}
