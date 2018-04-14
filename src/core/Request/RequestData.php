<?php

class RequestData implements IRequestData
{
	private $data;

	public function __construct(array $data)
	{
		$this->data = $data;
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
		$this->data[$key] = $value;
	}

	public function unset($key) :void
	{
		unset($this->data[$key]);
	}
}
