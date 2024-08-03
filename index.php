<?php

require 'vendor/autoload.php';
require_once 'astra/helpers/helpers.php';

use App\Config\CORS;


// Initialize CORS
$cors = new CORS();

// Load routes
$routes = include 'routes/web.php';

// Get the requested URI
$requestUri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Determine the route
$handler = $routes[$requestUri] ?? null;

// header('Content-Type: application/json'); // Enable when it's API

date_default_timezone_set('Africa/Dar_es_Salaam'); // using Africa/Dar_es_Salaam timezone for date/time operations

if ($handler && is_array($handler) && isset($handler[0]) && isset($handler[1])) {
    $controller = $handler[0];
    $action = $handler[1];
    
    if (class_exists($controller) && method_exists($controller, $action)) {
        $controllerInstance = new $controller();
        $response = $controllerInstance->$action();
    
        // Now support only html & json
        if (strpos($response, '<!DOCTYPE html>') !== false || strpos($response, '<html') !== false) {
            // Assume it's HTML if it contains HTML tags
            header('Content-Type: text/html; charset=utf-8');
            echo $response;
        } else {
            // Otherwise, treat it as JSON
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($response);
        }

    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Not Found (Route Not found)']);
    }
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Not Found(No Routes Decribed )']);
}
