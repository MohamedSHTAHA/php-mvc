<?php

namespace PhpMvc;

use PhpMvc\Http\Request;
use PhpMvc\Http\Response;
use PhpMvc\Http\Route;

class Application
{
    protected Route $route;
    protected Request $request;
    protected Response $response;

    public function __construct()
    {
        $this->request = new Request;
        $this->response = new Response;
        $this->route =  new  Route(new Request, new Response);
    }

    public function run()
    {
        $this->route->resolve();
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->name;
        }
    }
}
