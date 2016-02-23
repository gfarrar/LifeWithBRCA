<?php
$dbhost = "mysql.cms.gre.ac.uk";
$dbuser = "fg201";
$dbpass = "huskey3N";
$dbname = "mdb_fg201";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("<p>error connecting to database:" . mysqli_error() . "</p>");

echo "Connected successfully to database";

mysqli_select_db($conn, $dbname) or die ("error connecting to the database mdb_fg201:" .mysqli_error() );
echo "connected to mysql, using database mdb_f201";

?>

