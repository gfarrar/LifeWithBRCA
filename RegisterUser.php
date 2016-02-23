<?php
session_start();
include_once 'config/config.php';
$username = $_REQUEST["username"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

mysqli_query($conn, "Insert into Lwb_Users (Username, Password, Email) VALUES ('$username', '$password','$email')") or die ("could not insert");


mysqli_close($conn);


