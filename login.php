<?php

session_start();

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Life With BRCA</title>
    <!--[if lt IE 9]><script src="js/html5shiv-printshiv.js" media="all"></script><![endif]-->
</head>
<body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<div class="page-header">
    <h1>Life With BRCA <small>Subtext for header</small></h1>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="Login.html">Sign In</a></li>
                    <li><a href="Signup.html">Sign Up</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>





<div class="row">
    <div class="col-sm-9">
        <h1>Sign In</h1>
        <form class="form-inline">
            <div class="form-group">
                <label class="sr-only" for="exampleInputEmail3">Username</label>
                <input type="username" class="form-control" id="exampleInputUsername3" placeholder="Username">
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-default">Sign in</button>
        </form>

    </div>
    <div class="col-sm-3">.col-sm-3</div>
</div>


<div class="container">
    <div class="row">
        <hr>
        <div class="col-lg-12">
            <div class="col-md-9">
                <a href="#">Terms of Service</a> | <a href="#">Privacy</a>
            </div>
            <div class="col-md-3">
                <p class="muted pull-right">© 2013 Company Name. All rights reserved</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>