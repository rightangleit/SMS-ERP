<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap/css/bootstrap-theme.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap/css/bootstrap-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/font-awesome.min.css')}}">
	
	<script type="text/javascript" src="{{asset('/js/jquery.js')}}"></script>

  	
  	<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
	
	<link rel="stylesheet" type="text/css" href="{{asset('/css/style1.css')}}">
	<meta name="viewport" content="width=device-width, 
	initial-scale=1, maximum-scale=1">
  	
  	<link rel="stylesheet" type="text/css" href="{{asset('/css/animate.min.css')}}">
  	<script src="{{asset('/js/wow.min.js')}}"></script>
 
    <script type="text/javascript">
    $(document).ready(function() {
    $("#form_control_select_class").change(function() {
   		//alert($(this).find("option:selected").text());
   		var text = $(this).find("option:selected").text();
   	/*	if (text=='Six') {*/

   			var formData = {
	            'sclass': text,

	            '_token': "{{csrf_token()}}",
	        };
	        $.ajax({
	            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
	            url         : 'show_info_class', // the url where we want to POST
	            data        : formData, // our data object
	            dataType    : 'json', // what type of data do we expect back from the server
	            success: function(data){

	            	console.log(data);

	            	//student = data[0];
	            	//studen1 = data
	            	var view_table ='';
	            	$.each(data, function( index, student ) {
					  	//alert(student.id);
					  	view_table +='<tr><td>'+'-----'+'</td><td>'+student.id+'</td><td>'+student.fname+'</td><td>'+student.lname+'</td><td>'+student.gname+'</td><td>'+student.spreadd+'</td><td>'+student.sgroup+'</td><td>'+student.ssection+'</td><td><a href="" class="btn btn-primary">Action</a></td></tr>';
					});

					var length = data.length;
					
					var show_stu_num_div1 = '<p> Total Students: '+length+'</p>';
	            	$('#table1 tbody').html('');
	            	$('.show_stu_num_div1').html('');
	            	$('#table1').append(view_table);
	            	$('.show_stu_num_div1').append(show_stu_num_div1);
	            	$('.show_stu_num').show();
	            	$('#c6').show();

	            		
	            	

	            },
	            error: function(err){

	            }



	        });
	        
});
    });
    </script>
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
				<a href="{{ url('dashboard') }}" class="navbar-brand">Admin Panel</a>
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
	        <li class="active"><a href="{{ url('dashboard') }}">Dashboard</a></li>
			<li><a href="#section2">Student Information</a></li>
			<li><a href="#section3">Student Attendance</a></li>
			<li><a href="#section3">Bulk Sms</a></li>
			<li><a href="#section3">Result Processing</a></li>
			<li><a href="#section3">Teacher Login	</a></li>
	      </ul>
	    </div>
	  </div>
</nav>

	
		<div class="container-fluid" style="background-color: #fff;">
			<div class="row content" >
				<div class="col-sm-3 sidenav hidden-xs navbar-fixed-top">

					<ul class="nav nav-pills nav-stacked">
						
				        <li class="dropdown">

				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Student Information
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
									<li><a href="{{ url('stu_info_new/create') }}">New Student</a></li>
								    <li><a href="{{ url('show_info') }}">Update information</a></li>
								    <li><a href="{{ url('show_info_all') }}">Show information</a></li>      
								</ul>
						 	
				        </li>
				        <li class="dropdown">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Student Attendance
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							     <li><a href="{{ url('atten_new') }}">Add New Record</a></li>
							      <li><a href="{{ url('atten_show') }}">Show Record</a></li>
							    </ul>
						 	
				        </li>
				        
				        <li class="dropdown">
				        	
							    <button class="btn btn-primary dropdown-toggle" 
							    type="button" data-toggle="dropdown">Result Processing
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="insert_result.blade.php">Insert Result</a></li>
							      <li><a href="search_result.blade.php">Show Result</a></li>
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

				<div class="row" id="row_form">

					<!-- <h1 class="title">Personal Information</h1> -->
					<div class="col-sm-12 col-md-12" id="row_1st_col" style="">
							<form class="form-horizontal fixed" id="form-horizontal" method="post" action="#">
								<!-- {{csrf_field()}} -->
								
							    


							    <div class="select_class">
							    	<h3>Please select a class</h3>
							    	<div class="select_class_select">
							    		<select class="form-control" id="form_control_select_class">
							    			<option disabled="true" selected="selected" >Select a Class</option>
							    			<option value="1" >Six</option>
							    			<option>Seven</option>
							    			<option>Eight</option>
							    			<option>Nine</option>
							    			<option>Ten</option>
							    			
							    		</select>
							    	</div>
							    </div>

							    <div class="show_stu_num" style="display: none;">
							    	<div class="show_stu_num_div1">
							    		<!-- <i class="fas fa-user"></i> -->
							    		<!-- <p>Total Students 5</p> -->
							    	</div>
							    		
							    </div>
							    </div>
								<div class=" " id="c6" style="display: none;">
								<!-- <div class="pinformation">
						    	<h1>Personal Information</h1>
						        </div> -->
						        
						    	<div class="container">
                                                                                       
									  <div class="table-responsive">          
									  <table class="table" id="table1">
									    <thead>
									      <tr>
									      	<th>Image</th>
									        <th>Registration Number</th>
									        <th>Firstname</th>
									        <th>Lastname</th>
									        <th>Guardian Name</th>
									        <th>Present Address</th>
									        <th>Group</th>
									        <th>Section</th>
									        <th>Action</th>
									      </tr>
									    </thead>
									    <tbody>

									      
									       
									    </tbody>
									  </table>
									  </div>
									</div>

								</div>
								
								<!-- education -->
								
								<div class="" id="c7" style="display: none;">
								<!-- <div class="pinformation">
						    	<h1>Personal Information</h1>
						        </div> -->
						        
						    	<div class="container">
                                                                                       
									  <div class="table-responsive">          
									  <table class="table">
									    <thead>
									      <tr>
									      	<th>Image</th>
									        <th>Registration Number</th>
									        <th>Firstname</th>
									        <th>Lastname</th>
									        <th>Guardian Name</th>
									        <th>Present Address</th>
									        <th>Group</th>
									        <th>Section</th>
									        <th>Action</th>
									      </tr>
									    </thead>
									    <tbody>
									      <tr>
									        <td><img src="#"></td>
									        <td>13201016</td>
									        <td>Salman</td>
									        <td>Mohammad Sultan</td>
									        <td>Mohammad Abdus Salam</td>
									        <td>116 South Goran, Khilgaon, Dhaka</td>
									        <td>---</td>
									        <td>A</td>
									        <td><a href="" class="btn btn-primary">Action</a></td>
									      </tr>
									       
									    </tbody>
									  </table>
									  </div>
									</div>

								</div>	
										
							
								
								<div class="" id="c8" style="display: none;">
								<!-- <div class="pinformation">
						    	<h1>Personal Information</h1>
						        </div> -->
						        
						    	<div class="container" >
                                                                                       
									  <div class="table-responsive">          
									  <table class="table">
									    <thead>
									      <tr>
									      	<th>Image</th>
									        <th>Registration Number</th>
									        <th>Firstname</th>
									        <th>Lastname</th>
									        <th>Guardian Name</th>
									        <th>Present Address</th>
									        <th>Group</th>
									        <th>Section</th>
									        <th>Action</th>
									      </tr>
									    </thead>
									    <tbody>
									      <tr>
									        <td><img src="#"></td>
									        <td>13201016</td>
									        <td>Salman</td>
									        <td>Mohammad Sultan</td>
									        <td>Mohammad Abdus Salam</td>
									        <td>116 South Goran, Khilgaon, Dhaka</td>
									        <td>---</td>
									        <td>A</td>
									        <td><a href="" class="btn btn-primary">Action</a></td>
									      </tr>
									       <tr>
									        <td><img src="#"></td>
									        <td>13201016</td>
									        <td>Salman</td>
									        <td>Mohammad Sultan</td>
									        <td>Mohammad Abdus Salam</td>
									        <td>116 South Goran, Khilgaon, Dhaka</td>
									        <td>---</td>
									        <td>A</td>
									        <td><a href="" class="btn btn-primary">Action</a></td>
									      </tr>
									      <tr>
									        <td><img src="#"></td>
									        <td>13201016</td>
									        <td>Salman</td>
									        <td>Mohammad Sultan</td>
									        <td>Mohammad Abdus Salam</td>
									        <td>116 South Goran, Khilgaon, Dhaka</td>
									        <td>---</td>
									        <td>A</td>
									        <td><a href="" class="btn btn-primary">Action</a></td>
									      </tr>
									    </tbody>
									  </table>
									  </div>
									</div>

								</div>	
										
								</div>
								<div class="" id="c9" style="display: none;">
								<!-- <div class="pinformation">
						    	<h1>Personal Information</h1>
						        </div> -->
						        
						    	<div class="container" >
                                                                                       
									  <div class="table-responsive">          
									  <table class="table">
									    <thead>
									      <tr>
									      	<th>Image</th>
									        <th>Registration Number</th>
									        <th>Firstname</th>
									        <th>Lastname</th>
									        <th>Guardian Name</th>
									        <th>Present Address</th>
									        <th>Group</th>
									        <th>Section</th>
									        <th>Action</th>
									      </tr>
									    </thead>
									    <tbody>
									      <tr>
									        <td><img src="#"></td>
									        <td>13201016</td>
									        <td>Salman</td>
									        <td>Mohammad Sultan</td>
									        <td>Mohammad Abdus Salam</td>
									        <td>116 South Goran, Khilgaon, Dhaka</td>
									        <td>---</td>
									        <td>A</td>
									        <td><a href="" class="btn btn-primary">Action</a></td>
									      </tr>
									       <tr>
									        <td><img src="#"></td>
									        <td>13201016</td>
									        <td>Salman</td>
									        <td>Mohammad Sultan</td>
									        <td>Mohammad Abdus Salam</td>
									        <td>116 South Goran, Khilgaon, Dhaka</td>
									        <td>---</td>
									        <td>A</td>
									        <td><a href="" class="btn btn-primary">Action</a></td>
									      </tr>
									      <tr>
									        <td><img src="#"></td>
									        <td>13201016</td>
									        <td>Salman</td>
									        <td>Mohammad Sultan</td>
									        <td>Mohammad Abdus Salam</td>
									        <td>116 South Goran, Khilgaon, Dhaka</td>
									        <td>---</td>
									        <td>A</td>
									        <td><a href="" class="btn btn-primary">Action</a></td>
									      </tr>
									    </tbody>
									  </table>
									  </div>
									</div>

								</div>	
										
								</div>
								<div class="" id="c10" style="display: none;">
								<!-- <div class="pinformation">
						    	<h1>Personal Information</h1>
						        </div> -->
						        
						    	<div class="container" >
                                                                                       
									  <div class="table-responsive">          
									  <table class="table">
									    <thead>
									      <tr>
									      	<th>Image</th>
									        <th>Registration Number</th>
									        <th>Firstname</th>
									        <th>Lastname</th>
									        <th>Guardian Name</th>
									        <th>Present Address</th>
									        <th>Group</th>
									        <th>Section</th>
									        <th>Action</th>
									      </tr>
									    </thead>
									    <tbody>
									      <tr>
									        <td><img src="#"></td>
									        <td>13201016</td>
									        <td>Salman</td>
									        <td>Mohammad Sultan</td>
									        <td>Mohammad Abdus Salam</td>
									        <td>116 South Goran, Khilgaon, Dhaka</td>
									        <td>---</td>
									        <td>A</td>
									        <td><a href="" class="btn btn-primary">Action</a></td>
									      </tr>
									       <tr>
									        <td><img src="#"></td>
									        <td>13201016</td>
									        <td>Salman</td>
									        <td>Mohammad Sultan</td>
									        <td>Mohammad Abdus Salam</td>
									        <td>116 South Goran, Khilgaon, Dhaka</td>
									        <td>---</td>
									        <td>A</td>
									        <td><a href="" class="btn btn-primary">Action</a></td>
									      </tr>
									      <tr>
									        <td><img src="#"></td>
									        <td>13201016</td>
									        <td>Salman</td>
									        <td>Mohammad Sultan</td>
									        <td>Mohammad Abdus Salam</td>
									        <td>116 South Goran, Khilgaon, Dhaka</td>
									        <td>---</td>
									        <td>A</td>
									        <td><a href="" class="btn btn-primary">Action</a></td>
									      </tr>
									    </tbody>
									  </table>
									  </div>
									</div>

								</div>	
										
								</div>
									
								
								
								
							</form>
					</div>
				</div>
				

				</div>
			</div>
		</div>
	
</body>
</html>