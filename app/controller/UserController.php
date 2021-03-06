<?php

namespace App\Controller;
require_once realpath("vendor/autoload.php");

use App\Controller\BaseController;
use App\User;

class UserController extends BaseController{

    public function index()
    {
        $users = User::all();

        return view('user.index',[
            'users' => $users,
        ]);
    }
}