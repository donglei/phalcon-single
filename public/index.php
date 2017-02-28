<?php
use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

$loader = new Loader();

$loader->registerDirs([
		"../app/controllers",
		"../app/models",
	]);

$loader->register();

$di = new FactoryDefault();

$di->set('view', function(){
	$view = new View();
	$view->setViewsDir('../app/views/');
	return $view;
});

$di->set('url', function(){
	$url = new UrlProvider();
	$url->setBaseUri('/');
	return $uri;
});

$di->set('db', function(){
	return new DbAdapter([
		   'host'     => 'localhost',
		   'dbname'   => 'blog',
		   'port'     => 3306,
		   'username' => 'sigma',
		   'password' => 'secret'
		]);
});

$application = new Application($di);

try{
	$response = $application->handle();
	$response->send();
}catch(\Exception $e)
{
	echo "Exception: ", $e->getMessage();
}