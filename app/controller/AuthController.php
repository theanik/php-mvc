<?php

namespace App\Controller;
require_once realpath("vendor/autoload.php");

use App\Controller\BaseController;
use App\User;

class UserController extends BaseController{

    public function login()
    {

        return view('auth.login');
    }
}