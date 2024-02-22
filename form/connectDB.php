<?php

//Before connecting to the database we need  to include the file that contains the connection information.
//Hostname 
//Username
//Passwrod
// Database name




// new mysqli( "localhost", "root",""); //Connecting to localhost with root user and no password, then selecting the database called 'database_name'include 'connection_sqlserver.php';

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'authbeginner';
$connection = new mysqli($hostname, $username, $password, $database);


if($connection -> connect_error){
    die("connection failed". $connection -> connect_error);
}




?>