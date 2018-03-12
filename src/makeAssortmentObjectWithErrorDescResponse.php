<?php

namespace GUS;

class makeAssortmentObjectWithErrorDescResponse
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
	 * @return \GUS\makeAssortmentObjectWithErrorDescResponse
	 */
	public function setReturn(array $return = null)
	{
		$this->return = $return;
		return $this;
	}

}
