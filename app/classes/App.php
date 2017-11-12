<?php

class App
{
	private $request;
	private $route;

	public function __construct(AppHttpRequest $request)
	{
		$this->request = $request;
		$this->route = new Route();
	}

	public function runRequest()
	{
		$this->route->requestedPath($this->request->getRequestPath());
	}
}
