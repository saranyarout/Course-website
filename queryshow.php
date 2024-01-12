<?php
   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "coursesweb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die ("failed to connect ". mysqli_connect_error());
}

    $sql = "SELECT * FROM query";

    $result= $conn -> query($sql);

    if ($result->num_rows) {
        echo "<table border='1'>";
        echo "<tr><th>NAME</th><th>EMAIL</th><th>QUERY</th></tr>";
        while($row=$result->fetch_assoc())  {
            echo "<tr><td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['query']."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
?> 
