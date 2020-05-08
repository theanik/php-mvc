<?php

namespace App\Controller;
require_once realpath("vendor/autoload.php");

use App\Controller\BaseController;
use App\User;

class UserController extends BaseController{

    public function index()
    {
        $users = User::all();
        // $users = Capsule::table('users')->get();

        print_r($users);
        foreach ($users as $user){
            echo $user->name;
        }

        // view('home',[
        //     'users' => $users,
        // ]);
    }
}

(new UserController)->index();