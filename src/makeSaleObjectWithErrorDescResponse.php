<?php

namespace GUS;

class makeSaleObjectWithErrorDescResponse
{

	/**
	 * @var string[] $return
	 */
	protected $return = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return string[]
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param string[] $return
	 * @return \GUS\makeSaleObjectWithErrorDescResponse
	 */
	public function setReturn(array $return = null)
	{
		$this->return = $return;
		return $this;
	}

}
