<?php


//host
define("HOST", "localhost");

//dbname
define("DBNAME", "pay");

//user
define("USER", "root");

//password
define("PASS", "");


$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";", USER, PASS);

if ($conn == true) {
    echo "connection is success";
} else {
    echo "error";
}