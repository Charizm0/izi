<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>navbar</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!--bootstrap overrider-->
<link rel="stylesheet" href="../css/navbar.css" media="screen" title="no title" charset="utf-8">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <body>
    <nav id = "out" class="navbar navbar-default navbar-fixed-top navbar-static-top navbar-theme" role="navigation">
    		<div class="container-fluid">

    			<div class="navbar-header">
    					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-izifiso-menu-out">
    					<span class="sr-only">Toggle Navigation</span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>

    			<a class="navbar-brand" href="#"><img class="logo-size" src="../../logo.png"></a>
    			</div>

    		<div class="collapse navbar-collapse navbar-right" id="bs-izifiso-menu-out">


    			<ul class="nav navbar-nav">
    				<li ><a href="../../home/index.html">Home</a></li>
    				<li><a href="index.html">Explore</a></li>
    				<li><a href="jk.html">Blog</a></li>
    				<li  class="active"><a href="photo_up.html" >Gallery</a></li>
    				<li><a href="index.html">Shop</a></li>
    				<li class="dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
    			<ul class="dropdown-menu">


    		<div>
                <li><input type="text" placeholder="username" id = "u"></input></li>
                <li><input type="password" placeholder="password" id = "p"></input></li>
                <li><input type="button" value="Log In" onClick = "login();"></li>
                <li><input type="button" value="Register" onClick = "fly();"></li>
            </div>


           <!-- <li><a href="#">Notifications</a></li>

                <li role="separator" class="divider"></li>
                <li><a href="#">Logout</a></li>-->
              </ul>
          </li>
      	</ul>

    		</div>
    		</div>
    	</nav>
    	<!--Navbar ends here-->




    <!-- Navbar starts here-->

    	<nav id = "in" class="navbar navbar-default navbar-fixed-top navbar-static-top navbar-theme" role="navigation">
    		<div class="container-fluid">

    			<div class="navbar-header">
    					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-izifiso-menu-in">
    					<span class="sr-only">Toggle Navigation</span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>

    			<a class="navbar-brand" href="#"><img class="logo-size" src="../../logo.png"></a>
    			</div>

    		<div class="collapse navbar-collapse navbar-right" id="bs-izifiso-menu-in">


    			<ul class="nav navbar-nav">
    				<li ><a href="../../home/index.html">Home</a></li>
    				<li><a href="index.html">Explore</a></li>
    				<li><a href="jk.html">Blog</a></li>
    				<li  class="active"><a href="photo_up.html" >Gallery</a></li>
    				<li><a href="index.html">Shop</a></li>
    				<li class="dropdown">
    			<a id = "xx" href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
    			<ul class="dropdown-menu">


    		<li><a href="../editor_finished!!/editor.html">Write a Blog</a></li>
                <li><a href="photo.html">Upload Photo</a></li>
                <li><a href="#">Notifications</a></li>
                <li><a href="p3s.php">Profile</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#" onclick = "outg();">Logout</a></li>


           <!-- <li><a href="#">Notifications</a></li>

                <li role="separator" class="divider"></li>
                <li><a href="#">Logout</a></li>-->
              </ul>
          </li>
      	</ul>

    		</div>
    		</div>
    	</nav>

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        </head>
  </body>
</html>
