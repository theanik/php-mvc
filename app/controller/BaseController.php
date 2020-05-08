<?php

namespace App\Controller;



class BaseController{

    public function __construct()
    {
        require_once  realpath('app/Utils/helper.php');
        require_once realpath("config/database.php");
    }
}

new BaseController;