<?php

class Session implements IRequestData
{
	private $data;

	public function __construct()
	{
		$this->data = $_SESSION;
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
		$_SESSION[$key] = $value;
	}

	public function unset($sessionName) :void
	{
		unset($_SESSION[$sessionName]);
	}

	public function destroy() :bool
	{
		return session_destroy();
	}

	public function flash(string $sessionName) :string
	{
		if ($this->has($sessionName))
		{
			$session = $this->get($sessionName);
			$this->unset($sessionName);
			return $session;
		}
		return '';
	}
}
