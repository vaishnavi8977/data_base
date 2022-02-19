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

$fid = $_REQUEST['fid'];
$fname =  $_REQUEST['fname'];
$f_designation = $_REQUEST['f_designation'];
$dept_id = $_REQUEST['dept_id'];
$studies = $_REQUEST['studies'];
$sql = "INSERT INTO faculty (fid, fname, f_designation, dept_id, studies)
VALUES ('$fid', '$fname', '$f_designation', '$dept_id', '$studies')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>