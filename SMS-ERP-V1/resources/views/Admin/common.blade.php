<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	
	<script type="text/javascript" src="js/jquery.js"></script>

  	
  	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="/css/style1.css">
	<meta name="viewport" content="width=device-width, 
	initial-scale=1, maximum-scale=1">
  	
  	<link rel="stylesheet" type="text/css" href="/css/animate.min.css">
</head>
<body>
	
	<div id="navbar" class="navbar navbar-default navbar-fixed-top navbar-inverse" 
	role="navigation">
		<div class="container">
			<div class="navbar-header">
				<!-- <button type="button" class="navbar-toggle collapsed" 
				data-toggle="collapse" data-target=".navbar-collapse">
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				</button> -->
				<a href="dashboard.blade.php" class="navbar-brand">Admin Panel</a>
				<p class="navp">XYZ HIGH SCHOOL</p>

			</div>
			<div class="navbar-collapse navbar-collapse collapse navc">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<p>Hello Admin</p>
					</li>

					<li>
						<a href="#services">Log Out</a>
					</li>
					
				</ul>
			</div>

		</div>
		
	</div>

	<!-- Mid -->

<nav class="navbar navbar-inverse visible-xs navbar-fixed-top" id="navbar2">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#section1">Dashboard</a></li>
			<li><a href="#section2">Student Information</a></li>
			<li><a href="#section3">Student Attendance</a></li>
			<li><a href="#section3">Bulk Sms</a></li>
			<li><a href="insert_result.php">Result Processing</a></li>
			<li><a href="#section3">Teacher Login	</a></li>
	      </ul>
	    </div>
	  </div>
</nav>

	
		<div class="container-fluid">
			<div class="row content" >
				<div class="col-sm-3 sidenav hidden-xs">
					<ul class="nav nav-pills nav-stacked">
				        <li class="dropdown">

				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Student Information
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="stu_info_new.blade.php">New Student</a></li>
							      <li><a href="show_info.blade.php">Show information</a></li>
							      
							    </ul>
						 	
				        </li>
				        <li class="dropdown">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Student Attendance
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="#">All</a></li>
							      <li><a href="#">Class One</a></li>
							      <li><a href="#">Class Two</a></li>
							      <li><a href="#">Class Three</a></li>
							      <li><a href="#">Class Four</a></li>
							      <li><a href="#">Class Five</a></li>
							      <li><a href="#">Class Six</a></li>
							      <li><a href="#">Class Seven</a></li>
							      <li><a href="#">Class Eight</a></li>
							      <li><a href="#">Class Nine</a></li>
							      <li><a href="#">Class Ten</a></li>
							    </ul>
						 	
				        </li>
				        
				        <li class="dropdown">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Result Processing
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="insert_result.blade.php">Insert Result</a></li>
							      <li><a href="#">Show Result</a></li>
							      <li><a href="#">Marksheet</a></li>
							      <li><a href="#">Tabulation Sheet</a></li>
							    </ul>
						 	
				        </li>
				        <li class="">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Teacher Login
							 <!--    <span class="caret"></span> --></button>
							    <!-- <ul class="dropdown-menu">
							      <li><a href="#">HTML</a></li>
							      <li><a href="#">CSS</a></li>
							      <li><a href="#">JavaScript</a></li>
							    </ul> -->
						 	
				        </li>
				        <li class="">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Classified Bulk Sms</button>
							    <!-- <span class="caret"></span>
							    <ul class="dropdown-menu">
							      <li><a href="#">HTML</a></li>
							      <li><a href="#">CSS</a></li>
							      <li><a href="#">JavaScript</a></li>
							    </ul> -->
						 	
				        </li>
				        <li class="">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Academic Calender
							 <!--    <span class="caret"></span> --></button>
							    <!-- <ul class="dropdown-menu">
							      <li><a href="#">HTML</a></li>
							      <li><a href="#">CSS</a></li>
							      <li><a href="#">JavaScript</a></li>
							    </ul> -->
						 	
				        </li>

      				</ul><br>
				</div>
				</div>
				<br>