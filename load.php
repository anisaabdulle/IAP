<?php

require_once "user_details..php";

$Obj = new user_details.();

$arr = ["black", "white", "green", "blue"];

foreach($arr as $color){
    print $color . "<br>";
}

print dirname(__FILE__);
