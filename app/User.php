<?php
namespace App;
require_once realpath("vendor/autoload.php");
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Support\Facades\DB;

class User extends Model{
    protected $table = 'users';
}

// $users = User::where('id', '=', 1)->get();

// print_r($users);