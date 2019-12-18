<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/home.css">
		<link rel="stylesheet" href="css/navbar.css">
		<title>My News Site</title>
	</head>
	<body>
		<!-- Navbar -->
		<nav id="navbar-top" class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="/">My News Site</a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#nav-dropdown">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="nav-dropdown">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="/">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="navbarDropdown" href="javascript:void(0)"
								role="button" data-toggle="dropdown">
								Categories
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#sport">Sport</a>
								<a class="dropdown-item" href="#buisness">Buisness</a>
								<a class="dropdown-item" href="#technology">Technology</a>
								<a class="dropdown-item" href="#health">Health</a>
							</div>
						</li>
						<li>
							<form class="search-form form-inline my-2 my-lg-0">
								<input class="form-control mr-sm-2 search-input" type="search" placeholder="Search"
									aria-label="Search">
								<div class="btn-group">
									<button type="button" type="submit"
										class="btn btn-outline-success my-2 my-sm-0 btn-search">Search</button>
									<button type="button"
										class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									</button>
									<div class="dropdown-menu">
										<a class="btn-advanced-search dropdown-item" href="#">Advanced Search</a>
									</div>
								</div>
							</form>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="navbar-spacer"></div>
		<!-- End Navbar -->

		<!-- Welcome Carousel -->
		<div id="welcome-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="jumbotron">
						<h1 class="title display-4"></h1>
						<p class="author"></p>
						<p class="description"></p>
						<hr class="my-4">
						<p class="lead">
							<a class="btn btn-primary btn-lg" href="#" role="button">Lees meer...</a>
						</p>
					</div>
				</div>
				<div class="carousel-item">
					<div class="jumbotron">
						<h1 class="title display-4"></h1>
						<p class="author"></p>
						<p class="description"></p>
						<hr class="my-4">
						<p class="lead">
							<a class="btn btn-primary btn-lg" href="#" role="button">Lees meer...</a>
						</p>
					</div>
				</div>
				<div class="carousel-item">
					<div class="jumbotron">
						<h1 class="title display-4"></h1>
						<p class="author"></p>
						<p class="description"></p>
						<hr class="my-4">
						<p class="lead">
							<a class="btn btn-primary btn-lg" href="#" role="button">Lees meer...</a>
						</p>
					</div>
				</div>
				<div class="carousel-item">
					<div class="jumbotron">
						<h1 class="title display-4"></h1>
						<p class="author"></p>
						<p class="description"></p>
						<hr class="my-4">
						<p class="lead">
							<a class="btn btn-primary btn-lg" href="#" role="button">Lees meer...</a>
						</p>
					</div>
				</div>
				<div class="carousel-item">
					<div class="jumbotron">
						<h1 class="title display-4"></h1>
						<p class="author"></p>
						<p class="description"></p>
						<hr class="my-4">
						<p class="lead">
							<a class="btn btn-primary btn-lg" href="#" role="button">Lees meer...</a>
						</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#welcome-carousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#welcome-carousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- End Welcome Carousel -->


		<div class="container">
 		  <div class="row">
     		<div class="col-sm-4">
			   
			  <h2>opmerkingen</h2>
       		  <hr class="hidden-sm hidden-md hidden-lg">

			<br/>
			
       		 <div class="container">
        		<form action = "" method="POST">
				  
					<div class="form-group">
            		<h6>naam</a></h6>
          			<input type="text" name="name"><br />
          			</div>
			  
					<div class="form-group">
           				<h6>opmerkingen</a></h6>
            	 		<textarea rows = "10" cols = "30" name = "commentContent"></textarea><br />
          			</div>
		  
			   		<div class="form-group">
           				<input type="hidden" name="comment_id" id="comment_id" value="0" />
           				<input type="submit" name="submit" id="submit" class="btn btn-danger " value="Submit" />
          			</div>
         		</form>
			</div>

       <hr class="hidden-sm hidden-md hidden-lg">
        </div>
       		<div class="col-sm-8">
         		<?php include "comments.html"; ?>
        	</div>
   		</div>
 	</div>

		<?php

	 if ($_POST) {
     	$name = $_POST['name'];
     	$content = $_POST['commentContent'];
     	$handle = fopen("comments.html","a");
     	fwrite($handle, "<br>" . $name . ":<br />" . $content . "<br />");
    	 fclose($handle);
 	}
 	?>

		<!-- Asset Scripts-->
		<script src="assets/jquery/jquery.min.js"></script>
		<script src="assets/popper/popper.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- End Asset Scripts-->

		<script src="js/template-engine.js"></script>
		<script src="js/index.js"></script>
		<script src="js/navbar.js"></script>
		<script src="js/home.js"></script>
	</body>
</html>