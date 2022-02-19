<?PHP
$conn = mysqli_connect("localhost","root","","university");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo "Connected successfully";

?>
<!DOCTYPE HTML>
<HEAD>
<meta charset = "UTF-8">
<meta http-equiv ="X-UA-Compatible" content="IE=edge">
<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
</head>
<body>
    <h1>CREATE PROJECT</h1>
<form action="" method="POST">
          UNH_id: <input type="text" name="unh_id"><br>
          PROJECT NAME: <input type="text" name="pname"><br>
            <label for="status">STATUS:</label>
                <select name="status" id="status">
                    <option value="NOT STARTED"> NOT STARTED </option>
                    <option value="PENDING"> PENDING </option>
                    <option value="COMPLETED"> COMPLETED </option>
                </select>
          
          <input type="submit">
        </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $unh_id = $_POST["unh_id"];
        $pname = $_POST["pname"];
        $status = $_POST["status"];

        $sql = "INSERT INTO project (unh_id, pname, status) VALUES ('{$unh_id}', '{$pname}', '{$status}')";
        if ($conn->query($sql) === TRUE) {
            echo "Department Information created";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
    </div>
</body>
</html>