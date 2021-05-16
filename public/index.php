<?php

require __DIR__ . '/../src/bootstrap.php';


$router->direct($request);

/*
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$method = $_SERVER["REQUEST_METHOD"];
*/
