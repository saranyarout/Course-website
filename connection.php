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
$table="CREATE TABLE data ('Sno' INT(6) NOT NULL AUTO_INCREMENT,'Name'VARCHAR(12) NOT NULL,'Password' VARCHAR(128) ,'Email' VARCHAR(128) NOT NULL)";
$create=mysqli_query($conn,$table);
if(!$create){
    echo"cannot create table";
}
else{
    echo"table created";
}
?>