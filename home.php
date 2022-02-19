<!DOCTYPE html>
<html>
<head>
<style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image:url(proj.jpg)
        }

    table, th, td {
     border: 1px solid black;
     border-collapse: collapse;
    }
    th, td {
    padding: 5px;
    text-align: left;    
    }
</style>
</head>
<body>
    <center><h1>UNIVERSITY OF NEW HAMPSHIRE</h1></center>
    <?php
    session_start();
    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"university");

    
    echo "<h2> STUDENT PROJECT MANAGEMENT</h2>";
    echo "<ul>
    <li><h3><a href = registration.html> REGISTER STUDENT</a></h3></li>
    <li><h3><a href = MECH.php> STUDENT LIST </a></h3></li>
    <li><h3><a href = status.php> PROJECT FEEDBACK </a></h3></li>
     <li><h3><a href = delete.php> REMOVE STUDENT </a></h3></li>";
?>
</body>
</html>