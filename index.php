<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
</head>
<body>
<div class='container'>
      <div class='navbar'>
        <ul>
          <li><a class="active" href="/">Home</a></li>
          <li><a href="">About</a></li>
          <li><a href="/users">User</a></li>
        </ul>
      </div>
<?php


    require_once realpath("vendor/autoload.php");

    // echo "okk";


    // Route Config
    require_once realpath("config/route.php");

    // Database Config
    require_once realpath("config/database.php");

?>
</body>
</html>

