<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coursesweb";

$conn = new mysqli($servername, $username, $password,$dbname);

if (!$conn) {
    die ("failed to connect ". mysqli_connect_error());
}

$Name = $_POST["Name"];
$Email = $_POST["Email"];
$Password = $_POST["Password"];
$subcode = $_POST["subcode"];


if (isset($_POST['regi'])) {
    $sql = "INSERT INTO registation_details (name,Email,Password,subcode) VALUES ('$Name','$Email','$Password','$subcode)";

    if (mysqli_query($conn,$sql)) {
        echo "<h1>THANK YOU FOR REGISTRATION !.</h1>";

    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>