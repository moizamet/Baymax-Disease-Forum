<?php
session_start();

$host='localhost';
$user='root';
$pass='winserver';
$db='vit';

$connect=mysqli_connect($host,$user,$pass,$db) or die("Cannot connect to database");

?>