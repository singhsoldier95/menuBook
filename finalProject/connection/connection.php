<?php
$dbname='cookbook';
$dbuser='root';
$dbpass='';
$dbserver='localhost';
$conn=new mysqli($dbserver,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
die("Unable to connect with Database!!" . $conn->connect_error);
}
