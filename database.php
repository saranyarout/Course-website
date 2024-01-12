<?php
$serevername="localhost";
$username="root";
$password="";
// $datbasename="Information";
$conn=mysqli_connect($serevername,$username,$password);
if(!$conn){
    echo"cnnot connect";
}
else{
    echo"connecteds";
}
$sql="CREATE DATABASE information";
$data=mysqli_query($conn,$sql);
if(!$data){
    echo"Databases cannot be created";
}
else{
    echo"database created";
}
?>