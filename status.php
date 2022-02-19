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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body class="form-group">
    <center><h1>UNIVERSITY OF NEW HAMPSHIRE</h1>
    <p> PROJECT STATUS </p>
    <form action="" method="POST">
          Project Name: <input type="text" name="pname"><br>
               <div> FEEDBACK <textarea id="feedback" name="feedback" rows="4" cols="50">  </textarea></div>
          <input type="submit">
        </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pname = $_POST["pname"];
        $feedback = $_POST["feedback"];

        $sql = "UPDATE project SET feedback= '{$feedback}'  WHERE pname = '{$pname}'";
        if ($conn->query($sql) === TRUE) {
            echo "Project Status updated successfully 
                <span class = glyphicon glyphicon-thumbs-up; style=font-size:60px;  color:lightblue;> </span>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
    </center>
</body>
</html>