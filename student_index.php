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
    <center>
        <h1>UNIVERSITY OF NEW HAMPSHIRE</h1>
    </center>
    <?php
    session_start();
    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"university");


    echo "<h2> STUDENT PROJECT MANAGEMENT</h2>";
    echo "<ul>
    <li><h3><a href = project.php> CREATE PROJECT</a></h3></li>
    <li><h3><a href = project_list.php> PROJECT LIST </a></h3></li>
    <li><h3><a href = project_status.php> PROJECT STATUS </a></h3></li>
     <li><h3><a href = project_delete.php> REMOVE project </a></h3></li>";
    ?>
</body>
</html>