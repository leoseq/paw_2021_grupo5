<?php

require __DIR__ . '/../src/bootstrap.php';

use Paw\Core\Exceptions\RouteNotFoundException;

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$method = $_SERVER["REQUEST_METHOD"];
//$log->info("Go to: {$path} via {$method}");

try {
    $router->direct($path, $method);
//    $log->info("HTTP Status Code: 200", ["Path" => $path]);

} catch (RouteNotFoundException $e) {
    $router->direct('not_found');
//    $log->info("HTTP Status Code: 404 - Route Not Found", ["Path" => $path]);

} catch (Exception $e) {
    $router->direct('internal_error');
//    $log->error("HTTP Status Code: 500 - Internal Server Error", ["Error" => $e]);
}
