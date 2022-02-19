<?PHP
$conn = mysqli_connect("localhost","root","","university");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 

?>
<!DOCTYPE HTML>
<HEAD>
<meta charset = "UTF-8">
<meta http-equiv ="X-UA-Compatible" content="IE=edge">
<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
</head>
<body>
    <p> Project directory </p>

<form action="" method="POST">
          UNH ID: <input type="number" name="unh_id"><br>
          <input type="submit">
      </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $unh_id = $_POST["unh_id"];

        $sql = "DELETE FROM registration WHERE unh_id={$unh_id}";
        if ($conn->query($sql) === TRUE) {
            echo "{$conn->affected_rows} deleted.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</div>
</body>
</html>
