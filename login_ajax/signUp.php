<?php
require_once './connection.php';


   $username=$_POST['username'];
   $password=$_POST['password'];
   $query="INSERT INTO users(username,password) VALUES('".$username."','".$password."')";
    $result=$conn->query($query);




?>