<?php
use Novatec\Framework\Db\Adapter;
use Novatec\Framework\Orm\Mapper;
use Novatec\Framework\Controller\FrontController;

require realpath(__DIR__ . '/../library/vendor') . '/autoload.php';

$config  = parse_ini_file(__DIR__ . DIRECTORY_SEPARATOR . 'config.ini');
$adapter = new Adapter($config);
Mapper::$defaultAdapter = $adapter->factory();

$frontController = FrontController::getInstance();
$frontController->setPath(__DIR__ . DIRECTORY_SEPARATOR . 'Application' . DIRECTORY_SEPARATOR . 'View');
$frontController->dispatch();
