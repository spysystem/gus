<?php

namespace GUS;

class makeCorrectionObject
{

	/**
	 * @var string $arg0
	 */
	protected $arg0 = null;

	/**
	 * @var correctionDTO[] $arg1
	 */
	protected $arg1 = null;

	/**
	 * @param string $arg0
	 * @param correctionDTO[]|null $arg1
	 */
	public function __construct($arg0, array $arg1 = null)
	{
		$this->arg0	= $arg0;
		$this->arg1	= $arg1;
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
	 * @return \GUS\makeCorrectionObject
	 */
	public function setArg0($arg0)
	{
		$this->arg0 = $arg0;
		return $this;
	}

	/**
	 * @return correctionDTO[]
	 */
	public function getArg1()
	{
		return $this->arg1;
	}

	/**
	 * @param correctionDTO[] $arg1
	 * @return \GUS\makeCorrectionObject
	 */
	public function setArg1(array $arg1 = null)
	{
		$this->arg1 = $arg1;
		return $this;
	}

}
