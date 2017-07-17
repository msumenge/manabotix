<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Manabotix</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">



<style>
	/*
		green-yellow	#D7DD3B;
		light-blue		#dae3ea;
		dark-blue		#092E40;
		green 			#A7C244;

	*/

	* {
		font-family: 'Signika', sans-serif;
		-webkit-transition: all 300ms ease;
		-moz-transition: all 300ms ease;
		-ms-transition: all 300ms ease;
		-o-transition: all 300ms ease;
		transition: all 300ms ease;
	}
	.fullwidth { width: 100%; }
	.text-center { text-align: center; }
	.btn-clear {
		background-color: rgba(0,0,0,0);
		letter-spacing: 1px;
		color: #A7C244;
	}
	.btn-clear:active,
	.btn-clear:hover {
		box-shadow: none;
		color: #092E40;
	}
	.bg-lightblue { background-color: #dae3ea; }
	.bg-darkblue { background-color: #092E40; }
	.text-green { color: #A7C244;}
	
	#header-image {
		padding: 0px;
		height: calc(100vh - 80px);
	}
	#header-image img {
		display: block;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.navbar {
		margin-bottom: 0px;
	}
	.nav.navbar-nav li a:hover {
		background-color: transparent;
		color: #A7C244;
	}
	.nav.navbar-nav a {
		color: #333;
		text-transform: uppercase;
		font-size: 1.2em;
		vertical-align: middle;
		line-height: 50px;
	}
	.nav.navbar-nav .active a {
		color: #A7C244 !important;
	}
	#search-form {
		margin-top: 23px;
	}
	#search-form input {
		display: none;
		border: 1px solid #888;
		-webkit-border-radius: 0px;
		-moz-border-radius: 0px;
		border-radius: 0px;
		letter-spacing: 1px;
		margin-right: 16px;
		height: auto;
		padding: 3px 12px;
		vertical-align: 12px;
		box-shadow: none;
	}
	#search-form input:focus {
		border-color: #A7C244;
	}
	#search-form button {
		outline: none;
		box-shadow: none;
		border: 0px;
		background-color: rgba(0,0,0,0);
		font-size: 1.5em;
		padding: 0px;
	}
	#search-form button:hover {
		color: #A7C244;
	}
	.nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
		background-color: transparent;
	}
	.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
		background-image: none;
	}



	#footer-nav {
		border-left: 1px solid #fff;
		margin: 0px;
		padding-left: 20px;
		padding-bottom: 10px;
	}
	#footer-nav li {
		list-style-type: none;
		padding-bottom: 6px;
	}
	#footer-nav li a {
		color: #fff;
	}
	#footer-nav li a:hover {
		color: #D7DD3B;
		text-decoration: none;
	}
	#footer-linkedin {
		color: #fff;
		text-decoration: none;
	}
	#footer-linkedin:hover {
		color: #A7C244;
	}

	.capability-icon {
		height: 300px;
		background-color: #fff;
		text-align: center;
	}
	.capability-icon img {
		object-fit: contain;
		height: calc(100% - 60px);
		margin: 30px;
	}
	.capability-title {
		padding: 20px 30px;
		background-color: #092E40;
		font-size: 2em;
		color: #A7C244;
		cursor: pointer;
	}
	.capability-title:hover {
		background-color: rgba(9, 46, 64, 0.8);
	}
	.capability-title i {
		float: right;
		margin-top: 6px;
	}
	.capability-desc {
		background-color: #fff;
		padding: 20px 30px;
		font-size: 1.2em;
		line-height: 1.4em;
		display: none;
	}
	
</style>
<script type="text/javascript">
	
	$(document).ready(function() {

		$('.capability-title').on('click', function() {
			var _this = $(this);
			_this.siblings('.capability-desc').slideToggle(500, function() {
				_this.find('i').toggleClass('fa-minus').toggleClass('fa-plus');
			});
		});

	});

</script>

</head>

<body>

<nav class="navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
      	<img src="images/logo.png" height="45">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Team <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Our People</a></li>
            <li><a href="#">Join Us</a></li>
          </ul>
        </li>
        <li><a href="#">Capabilities</a></li>
        <li><a href="#">Contact</a></li>
        <li>
        	<form id="search-form" class="navbar-form">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="button" onclick="$('#search-form input').toggle();"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
        </li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>