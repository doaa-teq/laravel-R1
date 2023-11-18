<?php
$host="localhost";
$username="root";
$password="";
try{
    $conn= new PDO("mysql::host=$host;dbname=final_project",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connected sussefly";
}catch(Exception $d){
    echo "connection failed".$d ->getMessage();
}
?>
