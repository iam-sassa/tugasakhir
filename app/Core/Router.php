<?php

namespace OOP\App\Core;

class Router
{
    public static $routes = [];
    public static $baseUrl = 'http://localhost/final/mini-framework/public/';

    public static function addRoute($method, $path, $controller, $function, $middleware=[]){
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middleware' => $middleware
        ];
    }

    public static function url(string $path){
        $baseUrl = self::$baseUrl ?? 'http://localhost';
        return $baseUrl.$path;
    }

    public static function redirect($path){
        header("Location: ".self::url($path));
    }

    public function run(){
        // print_r($_SERVER);
        // die();
        $path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route){
            $pattern = "@^" . preg_replace('/\\\:[a-zA-Z0-9\_\-]+/', '([a-zA-Z0-9\-\_]+)', preg_quote($route['path'])) . "$@D";

            if (preg_match_all($pattern, $path, $variables) &&
            $method == $route['method']) {
            $function = $route['function'];
            $controller = new $route['controller'];

            foreach ($route['middleware'] as $middleware){
                $instance = new $middleware;
                $instance->before();
            }

            if(is_object($controller) && method_exists
            ($controller, $function)) {
                $parameters = [];
                unset($variables[0]); //remove first param
                foreach ($variables as $var){
                    $parameters[] = array_shift($var);
                }
                call_user_func_array([$controller, $function],
                $parameters);
            }

            }
        }
    }

    
}