<!DOCTYPE html>
<html>
<head>
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
    <center><h2>STUDENT REGISTER</h2></center>
    <?php
    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"university");

    if (!$conn)
    {
        die('Could not connect: ' . mysqli_error());
    }
    $result = mysqli_query($conn, "SELECT * FROM registration JOIN faculty ON registration.fid = faculty.fid JOIN project ON registration.unh_id = project.unh_id ");
    while($row = mysqli_fetch_array($result))
    {
        echo " <h2>" . $row['First'], $row['Last'] . "</h2> ";
        echo "<table>
                <tr><th>STUDENTS DETAILS</th> <th> </th> </tr>";
        echo "<tr>
                <td>UNH ID</td>
                <td>" . $row['unh_id'] .
        "</td>
                </tr>";
        echo "<tr>
                <td>FIRST NAME</td>
                <td>" . $row['First'] .
        "</td></tr>";
        echo "<tr>
                <td>LAST NAME</td>
                <td>" . $row['Last'] .
        "</td>
                </tr>";
        echo "<tr>
                <td>EMAIL</td>
                <td>" . $row['Email'] .
        "</td>
                </tr>";
        echo "<tr>
                <td>DEPARTMENT</td>
                <td>" . $row['department'] .
        "</td>
                </tr>";
        echo "<tr>
                <td>SPECIALIZATION</td>
                <td>" . $row['specialization'] .
        "</td>
                </tr>";
        echo "<tr>
                <td>MASTER PROJECT</td>
                <td>" . $row['pname'] .
        "</td>
                </tr>";
        echo "<tr>
                <td>FACULTY</td>
                <td>" . $row['fname'] .
        "</td>
                </tr>";
        echo "<tr>
                <td>FACULTY DESIGNATION</td>
                <td>" . $row['f_designation'] .
        "</td>";
        echo "<tr> <td> PROJECT STATUS</td>
                <td>" . $row['status'] . "</td>
                </tr>";
        echo "<tr> <td> FEEDBACK </td>
                <td>" . $row['feedback'] . "</td>
                </tr>";
        echo "</table>";
    }
    mysqli_close($conn);
    ?>
</body>
</html>
