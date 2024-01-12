<?php
$serevername="localhost";
$username="root";
$password="";
$database="Information";
$conn=mysqli_connect($serevername,$username,$password,$database);
if(!$conn){
    echo"cannot connect";
}
else{
    echo"connected";
}
$table="CREATE TABLE registation_details('Name'VARCHAR(50) NOT NULL,'Password' VARCHAR(8) ,'Email' VARCHAR(150) NOT NULL,'subcode' VARCHAR(10) NOT NULL)";
$create=mysqli_query($conn,$table);
if(!$create){
    echo"cannot create table";
}
else{
    echo"table created";
}
?>