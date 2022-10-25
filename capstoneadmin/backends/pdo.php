<?php

include_once "config.php";

try {
    $conn = new PDO("mysql:host=$host; dbname=$database", $users, $pwd, array( PDO::ATTR_PERSISTENT => true ));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    throw new Exception();
    
}


?>

