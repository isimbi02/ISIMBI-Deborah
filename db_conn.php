<?php
$Server_name = 'localhost';
$username = 'root';
$password = '';
$dbname = 'crud_operations';

$conn = new mysqli($Server_name,$username,$password,$dbname);
if(!$conn){
    echo ("Connection failed");
}else{
   // echo 'Connected successfully';
}
?>
