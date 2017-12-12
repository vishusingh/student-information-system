<?php

class Route
{
	private $controller = 'NotFound';
	private $method = 'index';
	private $params = [];
	private $app;

	public function __construct(IApp $app)
	{
		$this->app = $app;
	}

	public function requestedPath(string $request)
	{
		$requestedPath = isset($request) ? explode('/', rtrim(ltrim($request,'/'), '/')) : '/';
		$class = ucfirst($requestedPath[0]);

		if (empty($requestedPath[0]))
		{
			$login = new Login($this->app);
			$login->index();
			exit();
		}

		if (file_exists($this->app->getControllerPath() . "$class.php"))
		{
			$this->controller = $class;
			unset($requestedPath[0]);
		}

		$this->controller = new $this->controller($this->app);

		if (isset($requestedPath[1]))
		{
			if (method_exists($this->controller, $requestedPath[1]))
			{
				$this->method = $requestedPath[1];
				unset($requestedPath[1]);
			}
			else
			{
				$this->controller = new NotFound;
			}
		}
		$this->params = $requestedPath ? array_values($requestedPath) : [];
		call_user_func_array([$this->controller, $this->method], $this->params);
	}
}
