<?php

class AppHttpRequest
{
	private $requestPath;

	public function __construct(string $requestedPath = '')
	{
		$this->requestPath = (empty($requestedPath)) ? "/" : $requestedPath;
	}

	public function getRequestPath() :string
	{
		return $this->requestPath;
	}
}
