<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   ='tattoo_db';

$con = new mysqli($host, $username, $password, $dbname);
if(!$con){
    die("Cannot connect to the database.". $con->error);
}