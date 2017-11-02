<?php

namespace App;


trait Magic
{
	public function __set($key, $value)
	{
		$this->data[$key] = $value;
	}

	public function __get($key)
	{
		return $this->data[$key];
	}
}