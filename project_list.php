<?PHP
$conn = mysqli_connect("localhost","root","","university");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo "Connected successfully";

?>
<!DOCTYPE HTML>
<head>
<meta charset = "UTF-8">
<meta http-equiv ="X-UA-Compatible" content="IE=edge">
<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <style>
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
    <h1>CREATE PROJECT</h1>
<form action="" method="POST">
          UNH_id: <input type="text" name="unh_id"><br>
          
          <input type="submit">
        </form>
    <?php
    if (!$conn)
    {
        die('Could not connect: ' . mysqli_error());
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $unh_id = $_POST["unh_id"];
        }
        $result = mysqli_query($conn,"SELECT * from project JOIN registration ON project.unh_id = registration.unh_id where project.unh_id = '$unh_id' ");
        
        echo "<h2> PROJECT DETAILS </h2>";
        echo "<table>
        <tr><th>STUDENT ID</th> 
        <th>STUDENT NAME</th>
        <th>PROJECT NAME</th>
        <th> FEEDBACK  </th> </tr>";
        while($row = mysqli_fetch_array($result))
        {

            echo "<tr><td>" . $row['unh_id'] . "</td>";
            echo "<td>" . $row['First'] . "</td>";
            echo "<td>" . $row['pname'] . "</td>";
            echo "<td>" . $row['feedback'] ."</td> </tr>";
        }
        echo "</table>";
    ?>
    </div>
</body>
</html>