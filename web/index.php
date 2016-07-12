<?php

require __DIR__ . '/../vendor/autoload.php';

/**
 * See: http://silex.sensiolabs.org/doc/master/web_servers.html#php
 */
$filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

use Varvara\Controllers\ProductController;

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/api/products', function () use ($app) {
  return $app->json(ProductController::getProducts());
});

$app->get('/api/carts/{id}', function ($id) use ($app) {
  return 'Your Cart!!!';
});

$app->post('/api/carts/{id}', function ($id) use ($app) {
  return 'Cart is posted!!!';
});

$app->put('/api/carts/{id}', function ($id) use ($app) {
  return 'Cart is updated!!!';
});

$app->get('/{path}', function ($path) use ($app) {
	return $app->sendFile('index.html');
})
->assert('path', '.*');

$app->run();