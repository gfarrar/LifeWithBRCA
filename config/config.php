<?php
$dbhost = "mysql.cms.gre.ac.uk";
$dbuser = "fg201";
$dbpass = "huskey3N";
$dbname = "mdb_fg201";
mysqli_connect("mysql.cms.gre.ac.uk", "fg201", "huskey3N") or die("<p>error connecting to database:" . mysqli_error() . "</p>");

echo "Connected successfully to database";

mysqli_select_db("mdb_fg201") or die ("error connecting to the database mdb_fg201:" .mysqli_error() );
echo "connected to mysql, using database mdb_f201";

?>

