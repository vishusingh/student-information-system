<?php

    class FrontController
    {
        private $request;
        private $router;
        private static $url;

        public function __construct()
        {
            $this->request = new HttpRequest;
            $this->router = new Router;
            self::$url = $this->request->path;
        }

        public static function runRequest()
        {
            $controller = new FrontController();
            $controller->init(self::$url);
        }

        private function init(string $url)
        {
            $this->router->loadRequestedUrl($url);
        }
    }
