<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$unh_id = $_REQUEST['unh_id'];
$First =  $_REQUEST['First'];
$Last = $_REQUEST['Last'];
$Email = $_REQUEST['Email'];
$department = $_REQUEST['department'];
$specialization = $_REQUEST['specialization'];
$fid = $_REQUEST['fid'];
$sql = "INSERT INTO registration (unh_id, First, Last, Email, department, specialization, fid)
VALUES ('$unh_id', '$First', '$Last', '$Email', '$department', '$specialization', '$fid')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>