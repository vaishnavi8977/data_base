<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db     = 'university';


$conn  = mysqli_connect($dbhost,$dbuser,'',$db);

if(! $conn){
  die('Could not connect connect: ') ;
}

echo 'Successfully Connected';

mysqli_close($conn);

 ?>