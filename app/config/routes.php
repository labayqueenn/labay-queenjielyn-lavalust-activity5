<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


$router->any('/', 'AuthController::login');
$router->any('/login', 'AuthController::login');



$router->get('/products', function()
{
    echo "PRODUCTS ROUTE IS WORKING";
});

$router->any('/products/create', 'ProductController::create')->middleware('auth');

$router->any('/products/edit/{id}', 'ProductController::edit')->middleware('auth');

$router->any('/products/delete/{id}', 'ProductController::delete')->middleware('auth');



$router->get('/logout', function()
{
    $_SESSION = array();

    session_destroy();

    redirect('login');
    exit;
});

$router->get('/not-logged-in', function()
{
    echo 'Please Login First.';
});

?>