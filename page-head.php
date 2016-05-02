<!doctype html>

<html lang="en">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cheeky Tatz</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Rock+Salt|Slabo+27px|Pompiere|Yanone+Kaffeesatz:200,300,400|Teko:300,400,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/search-form.css">
	<link rel="stylesheet" type="text/css" href="assets/css/faq.css">

	<script src="https://code.jquery.com/jquery-1.12.1.min.js" integrity="sha256-I1nTg78tSrZev3kjvfdM5A5Ak/blglGzlaZANLPDl3I=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="assets/js/livesearch.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>

</head>

<body>

<div class="container">

	<div id="nav-border">
	
		<nav class="navbar">

			<div class="brand">

				<a class="logo" href="index.php">

					<span class="title-capital">C</span><span class="title-red">h</span><span class="title-yellow">e</span><span class="title-green">e</span><span class="title-blue">k</span><span class="title-pink">y</span> 

					<span class="title-capital">T</span><span class="title-red">a</span><span class="title-yellow">t</span><span class="title-green">z</span>

				</a>

				<p>Designed by us, for you.</p>

			</div> <!-- /brand -->

			<div class="navbar-buttons">

				<div id="search-and-buttons">

					<form id="searchbar" class="navbar-form" method="get" action="search.php">

					    <div class="input-group add-on search-center">
					    
					    	<input type="text" name="search" id="search-text" class="form-control" placeholder="Search" onkeyup="showResult(this.value)" value="" size="45" autocomplete="off">
					    	
					    	<div class="input-group-btn">
						
							    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						
						    </div>

						    <div id="livesearch"></div>
					    
					    </div>
					
					</form>

					<br>

					<i class="fa fa-shopping-basket"></i>Cart (0)
					
					<button type="button" class="btn btn-lg btn-primary navbar-btn" data-toggle="modal" data-target="#signUpModal">Sign up</button>
					
					<button type="button" class="btn btn-lg btn-default navbar-btn" data-toggle="modal" data-target="#logInModal">Log in</button>

				</div>

			</div>

			<div id="navbar-soc-m">

				<a href="http://wwww.facebook.com/cheekytatz" target="_blank"> <i class="fa fa-facebook-official"> </i></a>
			
				<a href="http://www.twitter.com/CheekyTatz" target="_blank"><i class="fa fa-twitter"></i></a>

				<a href="http://wwww.instagram.com/" target="_blank"> <i class="fa fa-instagram"> </i></a>

			</div>

			<!--MODAL-->
			<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Register</h4>
			      </div>
			      <div class="modal-body">
			      	<span class="login-text">Please enter your details</span><br><br>
			        <form class="form-horizontal">
			          <div class="form-group">
					    <label for="inputUsername3" class="col-sm-2 control-label">Username</label>
					    <div class="col-sm-10">
					      <input type="username" class="form-control" id="inputUsername3" placeholder="Username">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					    <div class="col-sm-10">
					      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					    </div>
					  </div>
					   <div class="form-group">
					    <label for="inputConfirmPass" class="col-sm-2 control-label">Confirm Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="inputConfirmPass" placeholder="Password">
					    </div>
					  </div>
					</form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			        <button type="button" class="btn btn-primary btn-lg">Register Me</button>
			      </div>
			    </div>
			  </div>
			</div>
			<!--MODAL-->
			<div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Log in</h4>
			      </div>
			      <div class="modal-body">
			        <form class="form-horizontal">
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					    <div class="col-sm-10">
					      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <div class="checkbox">
					        <label>
					          <input type="checkbox"> Remember me
					        </label>
					      </div>
					    </div>
					  </div>
					</form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			        <button type="button" class="btn btn-primary btn-lg">Log In</button>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- END MODAL -->

		</nav>

	</div>

	<div id="menu">

		<ul class="list-inline">

			<li><a href="index.php">HOME</a></li>
			
			<li>PRODUCTS</li>
			
			<li><a href="tutorials-index.php">TUTORIALS</a></li>
			
			<li><a href="faq.php">FAQ</a></li>
			
			<li><a href="contact.php">CONTACT</a></li>
		
		</ul>

	</div>