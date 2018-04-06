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
    <script>
        new WOW().init();
    </script>
    <script type="text/javascript">
    	function showTable(one,second,three,h1)
	    {
	      document.getElementById(one).style.display = 'block';
	      document.getElementById(second).style.display = 'none';
	      document.getElementById(three).style.display = 'none';
	      document.getElementById(h1).style.display = 'none';
	      
	    }
	    function showTable1(one)
	    {
	      document.getElementById(one).style.display = 'block';
	      
	      
	    }
    </script>

    <script type="text/javascript">
    	/*$(document).ready(function() {

	    // process the form
	    $('form').submit(function(event) {

	        event.preventDefault();

	        var formData = {
	            'rId': $('input[name=rId]').val(),

	            '_token': "{{csrf_token()}}",
	            
	        };

	        // process the form
	        $.ajax({
	            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
	            url         : 'show_info', // the url where we want to POST
	            data        : formData, // our data object
	            dataType    : 'json', // what type of data do we expect back from the server
	            success: function(data){

	            	//console.log(data[]);
	            	student = data[0];
	            	var view_table1 ='<tr id="1st_tr"><td id="sid">'+student.id+'</td><td id="fname">'+student.fname+'</td><td id="lname">'+student.lname+'</td><td id="sgname">'+student.gname+'</td><td id="sgoccup">'+student.goccup+'</td><td id="gphone">'+student.gphone+'</td><td id="sphone">'+student.sphone+'</td><td id="sdob">'+student.sdob+'</td><td id="sblood">'+student.sblood+'</td><td><a  href="#" id="editbtn">Edit</a></td></tr>';
	            	var view_table2 ='<tr><td>'+student.sclass+'</td><td>'+student.ssection+'</td><td>'+student.sgroup+'</td><td>'+student.sshift+'</td><td><a href="#" id="editbtn2" >Edit</a></td></tr>';
	            	var view_table3 ='<tr><td>'+student.speradd+'</td><td>'+student.spreadd+'</td><td><a href="#" id="editbtn3">Edit</a></td></tr>';
	            	//$('.modal-body').html(response):/

	            	$('#table1').append(view_table1);
	            	$('#table2').append(view_table2);
	            	$('#table3').append(view_table3);
	            	$('#myModal').modal('show');

	            	
	            	//$('#myModal').modal('show');

	            		
	            	

	            },
	            error: function(err){

	            }



	        });
	        // stop the form from submitting the normal way and refreshing the page
	        

	    });

	});*/
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
    $("#form_control_select_class").change(function() {
   		//alert($(this).find("option:selected").text());
   		var text = $(this).find("option:selected").text();
   		if (text=='Six') {
   			$('.show_stu_num').show();
   			$('#c6').show();
   			$('#c7').hide();
   			
   			$('#c8').hide();
   			$('#c9').hide();
   			$('#c10').hide()
   		}
   		else if (text=='Seven') {
   			$('.show_stu_num').show();
   			$('#c7').show();
   			$('#c6').hide();

   			
   			
   			$('#c8').hide();
   			$('#c9').hide();
   			$('#c10').hide()
   		}
   		else if (text=='Eight') {
   			$('.show_stu_num').show();
   			$('#c7').hide();
   			$('#c6').hide();
   			$('#c8').show();
   			$('#c6').hide();
   			$('#c9').hide();
   			$('#c10').hide()

   		}
   		else if (text=='Nine') {
   			$('.show_stu_num').show();
   			$('#c7').hide();
   			$('#c6').hide();
   			$('#c8').hide();
   			$('#c9').show();

   			
 
   			$('#c10').hide()

   		}
   		else if (text=='Ten') {
   			$('.show_stu_num').show();
   			$('#c7').hide();
   			$('#c6').hide();
   			$('#c8').hide();
   			$('#c9').hide();
   			$('#c10').show();

   		}
   		//var select = select.options[select.selectedIndex].textContent;
   		//alert(select);
    //alert($( "#form_control_select_class option:selected" ).text();+' clicked!');
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
							      <li><a href="{{ url('show_info') }}">Show information</a></li>
							      
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
							<!-- <form class="form-horizontal fixed" id="form-horizontal" method="post" action=""> -->
								<!-- {{csrf_field()}} -->
								
							    


							    <div class="select_class">
							    	<h3>Please select a class</h3>
							    	<div class="select_class_select">
							    		<select class="form-control" id="form_control_select_class">
							    			<option >Select a Class</option>
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
							    		<p>Total Students 5</p>
							    	</div>
							    		
							    </div>
							    </div>
								<div class=" " id="c6" style="display: none;">
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
									        <td><a href="" class="btn-primary">Action</a></td>
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
									        <td><a href="" class="btn-primary">Action</a></td>
									      </tr>
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
									        <td><a href="" class="btn-primary">Action</a></td>
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
									        <td><a href="" class="btn-primary">Action</a></td>
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
									        <td><a href="" class="btn-primary">Action</a></td>
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
									        <td><a href="" class="btn-primary">Action</a></td>
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
									        <td><a href="" class="btn-primary">Action</a></td>
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
									        <td><a href="" class="btn-primary">Action</a></td>
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
									        <td><a href="" class="btn-primary">Action</a></td>
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
									        <td><a href="" class="btn-primary">Action</a></td>
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
									        <td><a href="" class="btn-primary">Action</a></td>
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
									        <td><a href="" class="btn-primary">Action</a></td>
									      </tr>
									    </tbody>
									  </table>
									  </div>
									</div>

								</div>	
										
								</div>
									
								
								
								
						<!-- 	</form> -->
					</div>
				</div>
				

				</div>
			</div>
		</div>
	
</body>
</html>