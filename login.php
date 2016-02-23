<?php
session_start();
include("config/cofig.php");

$error = "";
if(isset($_POST["submit"]))
{
    if(empty($_POST["username"])   )
}



$errorMessage = '';
if (!empty($_POST['email']) && !empty($_POST['password']) ) {
    include 'config/config.php';
    include 'config/opendb.php';

    $username = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT userid FROM User Where email = '$username' AND password = '$password' ";

    $result = mysql_query($sql) or die('Query failed. ' . mysql_error());
    $row = mysql_fetch_array($result);

    if (mysql_num_rows($result) == 1 AND $row['role'] == 1) {
        $_SESSION['user_logged_in'] = true;
        $_SESSION['id'] = "$row[userid]";

        header("Location: user.php");
    }

}
?>