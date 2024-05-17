<?php

$route = [
    '/'=>"register.php",
    '/login'=>'login.php'
];

$url =$_SERVER['REQUEST_URI'];

include($route[$url]);