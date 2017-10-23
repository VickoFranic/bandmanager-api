<?php

use Phalcon\Mvc\Router;

$createDefaultRoutes = false;
$router = new Router($createDefaultRoutes);

$router->setDefaultNamespace('BandManager\\Controllers\\');

$router->addGet('/', 'Index::index');
$router->addGet('/api/auth', 'Auth::index');

$router->notFound(['controller' => 'index', 'action' => 'notFound']);

return $router;