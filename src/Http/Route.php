<?php

namespace PhpMvc\Http;

use PhpMvc\View\View;

class Route
{

    public static $routes = [];
    protected Request $request;
    protected Response $response;


    public function __construct(Request $request,Response $response)
    {
        $this->request  = $request;
        $this->response = $response;
    }


    public static function get($route, callable|array|string $action)
    {
        self::$routes['get'][$route] = $action;
    }

    public static function post($route, callable|array|string $action)
    {
        self::$routes['post'][$route] = $action;
    }
    public function resolve()
    {
        $path = $this->request->path();
        $method = $this->request->method();
        $action = self::$routes[$method][$path] ?? false ;
        // if(!$action){
        //     return ;
        // }
        //404  handling
        if(!array_key_exists($path , self::$routes[$method])){
            View::makeError('404');
        }


        if(is_callable($action)){
            call_user_func_array($action,[]);
        }

        if(is_array($action)){
            call_user_func_array([new $action[0],$action[1]],[]);
        }

        if(is_string($action)){
            $action = explode('@',$action);
            $controller = new $action[0];
            call_user_func_array([$controller,$action[1]],[]);
        }
    }
}
