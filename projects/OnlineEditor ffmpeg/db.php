<?php
require 'config.php';

$dbhost = $config['db']['server'];
$dbname = $config['db']['name'];
$username =$config['db']['username'];
$password = $config['db']['password'];

try {
    $db = new PDO("mysql:host=$dfbhost; dbname=$dbname",$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
