<?php include("server.php"); ?>
<!DOCTYPE html>
<html>
  <head>
      <title>Register</title>
  <link rel="shortcut icon" href="aset/logo/favicon.ico">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--styleku-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@300&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  
  </head>	
  <body class="bgnih">
  <div class="section" id="section1">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand hv mg" href="index.html">
        <img src="aset/haed.png" width="170" alt="Go Competition" loading="lazy">
      </a>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link hv hv-1" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Category
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="academic.html">Academic</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="sport.html">Sports</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="art.html">Art</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link hv hv-1" href="scholar.html" id="h">Scholarship</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hv hv-1" href="us.html" id="h">About us</a>
          </li>
          <li class="nav-item">
            <div class="search-box kanan">
              <input class="search-txt" type="text" name="" placeholder="Type to search">
              <a class="search-btn" href="#">
                <i class="fas fa-search"></i>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <div class="chart-box kanan">
              <a class="search-btn" href="#">
                <i class="fas fa-shopping-cart"></i>
              </a>
            </div>
          </li>


        </ul>
      </div>
    </nav>
  </div>

	<div class="header">
		<h2>Register</h2>
	</div> 

	<form method="POST" action="register.php">
		<?php include('errors.php'); ?>
		 
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
		<button type="submit" name="register" class="btnlg">Register</button>
		</div>
		<p>
			Already have account ? <a href="login.php">Sign in</a>
		</p>
	</form>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="script/scriptku.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html>