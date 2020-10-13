<?php

require_once 'vendor/autoload.php';

// Initialize Application
$container = new \Emma\DI\Container();
$container->set(\Emma\DI\Application\Application::class);

// Register Services
$container->set(\Emma\DI\Application\Service\UserManagerServiceInterface::class, \Emma\DI\Application\Service\UserManagerService::class);

/** @var \Emma\DI\Application\Application $app */
$app = $container->get(\Emma\DI\Application\Application::class);

var_dump($app->test());