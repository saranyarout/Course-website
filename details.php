<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coursesweb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die ("failed to connect ". mysqli_connect_error());
}

    $sql = "SELECT * FROM registation_details";

    $result= $conn -> query($sql);

    if ($result->num_rows) {
        echo "<table border='1'>";
        echo "<tr><th>NAME</th><th>EMAIL</th> <th>SUBCODE</th></tr>";
        while($row=$result->fetch_assoc())  {
            echo "<tr><td>".$row['Name']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Password']."</td>";
            echo "<td>".$row['subcode']."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
?>