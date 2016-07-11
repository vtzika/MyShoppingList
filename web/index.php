<?php

require __DIR__ . '/../vendor/autoload.php';

use Varvara\Controllers\ProductController;

$app = new Silex\Application();

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

$app->get('/', function () use ($app) {
	return $app->sendFile('static/index.html');
});

$app->run();