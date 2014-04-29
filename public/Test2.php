<?php

namespace User;

class Test {
	public $time;

	public function __construct()
	{
		$this->time = rand();
	}

	public function test()
	{
		echo $this->time;
	}
}