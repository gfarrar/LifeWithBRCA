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
                    <li><a href="login.php">Sign In</a></li>
                    <li><a href="Signup.php">Sign Up</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>





<div class="row">
    <div class="col-sm-9">
        <h1>Sign Up</h1>
        <div id="login-form">
            <FORM action="Scripts/RegisterUser.php" method="post">

	<h2> </h2>


<h4>Username:</h4><INPUT TYPE="Text" name = "username" PLACEHOLDER="Enter your first name" autofocus REQUIRED>
<br>

<h4>Email Address:</h4><INPUT TYPE="Email" name = "email" PLACEHOLDER="Enter your email address" REQUIRED>

<br>
<h4>Password:</h4><INPUT TYPE="Password" name = "password" PLACEHOLDER="Enter your password" REQUIRED>
<INPUT TYPE="Submit" VALUE="Submit">




</FORM>
        </div>

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