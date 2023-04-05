<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pdf');

//Define DNS 
$dns = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;

try
{
    //Instanciation PDO
    $db = new PDO($dns, DB_USER, DB_PASS);
    //Define method to get data
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec('SET NAMES utf8');
}
catch (PDOException $e)
{
    //Display error message
    echo 'Connection failed: ' . $e->getMessage();
}
echo 'Connection successful';

?>