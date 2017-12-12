<?php

class Server implements IRequestData
{
	private $data;

	public function __construct()
	{
		$this->data = $_SERVER;
	}

	public function get($key) :?string
	{
		return $this->data[$key] ?? '';
	}

	public function getSanitized($key) :?string
	{
		return Escape::input($this->data[$key]) ?? '';
	}

	public function getAll() :array
	{
		return $this->data;
	}

	public function count() :int
	{
		return count($this->data);
	}

	public function has($key) :bool
	{
		return isset($this->data[$key]);
	}

	public function isEmpty() :bool
	{
		return empty($this->data);
	}

	public function set($key, $value) :void
	{
		$_SERVER[$key] = $value;
	}

	public function unset($key) :void
	{
		unset($_SERVER[$key]);
	}
}
