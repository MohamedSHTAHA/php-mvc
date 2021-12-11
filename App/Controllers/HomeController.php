<?php

namespace App\Controllers;

use PhpMvc\View\View;

class HomeController{

        
    /**
     * Method index
     *
     * @return void
     */
    public function index()
    {
       // dump(app());

        //return View::make('home');
        return view('home');

    }
}