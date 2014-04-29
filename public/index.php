<?php

$flamePath = __DIR__ . '/../src/Flame.php';
require($flamePath);

$flame = new Flame();
$flame->registerDirs(array(
	__DIR__ . '/../protected/controllers/',
	__DIR__ . '/../protected/models/'
));
$flame->loaderRegister();

$config = new Flame\Config( __DIR__ . '/../protected/config/config.php');
$di = new Flame\Di();

$di->setShared('request', 'Flame\Http\Request');
$di->setShared('router', function(){
	$router = new Flame\Mvc\Router();
	$router->run();

	return $router;
});
$di->setShared('url', 'Flame\Mvc\Url');
$di->setShared('dispatcher', 'Flame\Mvc\Dispatcher');

$application = new Flame\Mvc\Application($di);

echo $application->run();