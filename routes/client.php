<?php

use MyNamespace\MyProject\Controllers\HomeController;

$router->get('/', HomeController::class . '@index');
$router->post('/', HomeController::class . '@testValidation');

$router->get('/about', function() {
    echo 'This is the About Page.';
});

// Define a route with a parameter
$router->get('/user/(\d+)', function($id) {
    echo 'User ID: ' . $id;
});

// Define a POST route
$router->post('/submit', function() {
    echo 'Form submitted!';
});