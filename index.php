<?php

define('DS', DIRECTORY_SEPARATOR);
require_once __DIR__ . DS . 'src' . DS . 'includes' . DS . 'functions.php';
require __DIR__ . DS . 'vendor/autoload.php';
$app = AppInitializer::getApp();
$request = new AppHttpRequest($app->getServer()->get('REQUEST_URI'));
$dispatcher = new Dispatcher($request, $app);
$dispatcher->runRequest();
