<!DOCTYPE html>
<html>
	<head>
		<title>KruD Shop</title>
		<meta name="description" content="KruD" />
		<meta name="author" content="Antoine Drabble" />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/krud.js"></script> 
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-5">
						<h1><a href="index.php">KruD</a></h1>
				</div>
				<div class="col-md-3">
					<br/>
					<form class="navbar-form" role="search">
					  <div class="input-group">
						<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
						<div class="input-group-btn">
						  <button class="btn btn-default blue" type="submit"><span class="fa fa-search"></span></button>
						</div>
					  </div>
					</form>
				</div>
				<div class="col-md-2">
					<br/>
					<span class="pull-right">
						<a href="cart.html">Shopping Cart (3)</a><p></p>
						2 item(s) - $40.00
					</span>
				</div>
				<div class="col-md-2 pull-right">
					<br/><br/>
					<p class="pull-right">
							<a href="#"><i rel="tooltip" data-original-title="Twitter" class="fa fa-twitter blue"></i></a>
							<a href="#"><i rel="tooltip" data-original-title="Facebook" class="fa fa-facebook blue"></i></a>
							<a href="#"><i rel="tooltip" data-original-title="Youtube" class="fa fa-youtube blue"></i></a> 
							<a href="#"><i rel="tooltip" data-original-title="Google plus" class="fa fa-google-plus blue"></i></a>
							<a href="#"><i rel="tooltip" data-original-title="Pinterest" class="fa fa-pinterest blue"></i></a>                
					</p>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col-md-6">
					<ul class="nav nav-tabs">
						<li id="menu" class="active_page"><a href="index.php">Accueil</a></li>
						<li id="menu" ><a href="articles.php">Articles</a></li>
						<li id="menu" ><a href="contact.php">Contact</a></li>
						<li id="menu" ><a href="admin.php">Admin</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
							<ul class="dropdown-menu unstyled pull-left dropdown-features">
								<div class="panel panel-default">
									<div class="panel-heading">
										<a href="login.php"><h3 class="panel-title">Please sign in</h3></a>
									</div>
									<div class="panel-body">
										<form accept-charset="UTF-8" role="form">
											<fieldset>
												<div class="form-group">
													<input class="form-control" placeholder="E-mail" name="email" type="text">
												</div>
												<div class="form-group">
													<input class="form-control" placeholder="Password" name="password" type="password" value="">
												</div>
												<div class="checkbox">
													<label>
														<input name="remember" type="checkbox" value="Remember Me"> Remember Me
													</label>
												</div>
												<input class="btn btn-lg btn-primary btn-block" type="submit" value="Login"><br/>
												<center><a href="login.php"><input class="btn btn-lg btn-info btn-block type="submit" value="Register"></a></center>
											</fieldset>
										</form>
									</div>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</div><br/>
						
						
			<div class="row">
				<div class="col-md-12 img-thumbnail">
					<div class="col-md-12">
						<center>
							<h2>Bienvenue sur KruD Shop</h2><br/>
							<img src="images/KruD.png" width="100%" /><br/><br/>
							<p>Vente d'habits de sport<p>
						</center>
					</div>
				</div>
			</div>
						
						
			<br /><br />
			<hr />
			<div class="row">
				<div class="col-md-12">
					<center><p>Antoine Drabble & Damien Giroud & Vincent Dougoud - EPSIC 2013</p></center>
				</div>
			</div>
		</div>
    </body>
</html>