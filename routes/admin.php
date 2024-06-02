<?php 

$router->mount('/admin', function() use ($router) {

    // will result in '/admin/'
    $router->get('/', function() {
        echo 'admin overview';
    });

    // will result in '/admin/products/id'
    $router->get('/products/(\d+)', function($id) {
        echo 'admin id ' . htmlentities($id);
    });

    $router->mount('/products', function() use ($router) {
        $router->get('/list', function() {
            echo 'Product List';
        });
        $router->get('/create', function() {
            echo 'Product Create';
        });
    });
    
});