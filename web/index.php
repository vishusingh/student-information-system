<?php
session_start();
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');
define('DS', DIRECTORY_SEPARATOR);
define('ROOTPATH', __DIR__ . DS . '..');
require_once ROOTPATH.DS.'app'.DS.'bootstrap.php';

$request = new AppHttpRequest($_SERVER['REQUEST_URI']);
$app = new App($request);
$app->runRequest();
