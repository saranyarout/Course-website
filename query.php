<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coursesweb";

$conn = new mysqli($servername, $username, $password,$dbname);

if (!$conn) {
    die ("failed to connect ". mysqli_connect_error());
}

$name = $_POST["name"];
$email = $_POST["email"];
$query = $_POST["query"];

if (isset($_POST['send'])) {
    $sql = "INSERT INTO query (Name,Email,query) VALUES ('$Name','$Email','$query')";

    if (mysqli_query($conn,$sql)) {
        echo "<h1>HAVE A GOOD DAY SIR . <BR> 
        YOU'LL SOON GET A REPLY FROM OUR SIDE.</h1>";

    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>