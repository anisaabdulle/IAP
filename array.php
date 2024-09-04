<?php

require_once "user_details.php";

$Obj = new user_details();

$arr = ["black", "white", "green", "blue"];

foreach($arr as $color){
    print $color . "<br>";
}

print dirname(__FILE__);
print "<br>";
print "<br>";
print $_SERVER["PHP_SELF"];
print "<BR>";
print "<BR>";
print basename($_SERVER["PHP_SELF"]);
print "<br>";

