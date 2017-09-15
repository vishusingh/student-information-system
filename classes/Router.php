<?php

    class Router
    {
        private $controller = 'Login';
        private $method = 'index';
        private $params = [];

		public function loadRequestedUrl(string $request)
		{
			$url = isset($request) ? explode('/', rtrim(ltrim($request,'/'), '/')) : '/';
			$controllerName = ucfirst($url[0]);

			if(file_exists(CONTROLLERPATH . "$controllerName.php"))
			{
				$this->controller = $controllerName;
				unset($url[0]);
			}

			$this->controller = new $this->controller;

			if(isset($url[1]))
			{
				if(method_exists($this->controller, $url[1]))
				{
					$this->method = $url[1];
					unset($url[1]);
				}
			}

			$this->params = $url ? array_values($url) : [];
			call_user_func_array([$this->controller, $this->method], $this->params);
		}

    }
