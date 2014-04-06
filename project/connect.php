<?php

try{
$dsn= 'mysql:host=localhost;dbname=project';
$username = 'root';
$password= '';

$db= new PDO($dsn, $username, $password);
}
catch(PDOException $db) {
    echo $db->getMessage();
    echo $msg = "Error!";
} 

?>