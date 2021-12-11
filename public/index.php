<?php

use Dotenv\Dotenv;
use PhpMvc\Http\Request;
use PhpMvc\Http\Response;
use PhpMvc\Http\Route;
use PhpMvc\Support\Arr;

require_once __DIR__ .'/../src/Support/helpers.php';
require_once base_path().'vendor/autoload.php';
require_once base_path() .'routes/web.php';

$env =  Dotenv::createImmutable(base_path());
$env->load();

// $route = new  Route(new Request , new Response);
// $route->resolve();
// dump(app());
dump(Arr::only(['u'=>'taha','e'=>'a@a.a'],['u','e']));
app()->run();
