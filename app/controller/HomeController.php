<?php

namespace App\Controller;
use App\Controller\BaseController;
use \App\User;
require_once realpath("vendor/autoload.php");

class HomeController extends BaseController{
    public function index()
    {
        return view('home');
    }
}