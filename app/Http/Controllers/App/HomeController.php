<?php namespace App\Http\Controllers\App;

use App\Http\Controllers\AppController;

class HomeController extends AppController
{

    protected function index()
    {

        return view('app.home.index');

    }

}
