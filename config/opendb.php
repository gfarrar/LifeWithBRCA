<?php
include 'config.php';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('error connecting to mysql');
$dbname = "mdb_fg201";
mysqli_select_db($conn, $dbname);


