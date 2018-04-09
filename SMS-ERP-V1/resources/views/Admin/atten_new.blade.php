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
   		$(document).on('click','#manage_stu',function(){
		   			var cls = $(' #form_control_select_class1').find("option:selected").text();
		   			var month = $('#form_control_select_month').find("option:selected").text();
		   			var year = $('#form_control_select_year').find("option:selected").text();
				   	var group = $('#form_control_select_group').find("option:selected").text();
				   	var sub = $('#form_control_select_sub').find("option:selected").text()

				   	var cls_val = $(' #form_control_select_class1').find("option:selected").val();
		   			var month_val = $('#form_control_select_month').find("option:selected").val();
		   			var year_val = $('#form_control_select_year').find("option:selected").val();
				   	var group_val = $('#form_control_select_group').find("option:selected").val();
				   	var sub_val = $('#form_control_select_sub').find("option:selected").val();

				   	//cls_val = cls_val.toString();
                    //console.log(cls_val);
                    //var start_date = "01-"+month_val+"-"+year_val;
                    date = new Date();
                    var firstDay = new Date(year_val, month_val-1, 1);

                    first_date = firstDay.getDate();
                   // alert(firstDay);
                    var start_time = firstDay.getTime();

                    var lastDay = new Date(year_val,month_val,0);
                    last_date= lastDay.getDate();
                    alert(last_date);
                    
                    end_time = lastDay.getTime();
                    //alert(end_time);
                    //alert(start_time);
				   	//alert("'"+ "'"+cls_val+"'"+"'");

				   	for(var i=first_date; i<last_date; i++)
					{
						   document.write(i);
						   

					}

   			
   			//alert(month);
		    
		   		

		   			/*var formData = {
			            'sclass': cls,
			            'month': month,
			            'year': year,
			            'group': group,
			            'sub': sub,

			            '_token': "{{csrf_token()}}",
			        };
			        $.ajax({
			            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
			            url         : 'atten_new', // the url where we want to POST
			            data        : formData, // our data object
			            dataType    : 'json', // what type of data do we expect back from the server
			            success: function(data){

			            	console.log(data);

			            	//student = data[0];
			            	//studen1 = data
			            	var view_table ='';
			            	$.each(data, function( index, student ) {
							  	//alert(student.id);
							  	view_table +='<td>'+'-----'+'</td><td>'+student.id+'</td><td>'+student.fname+' '+student.lname+'</td>';
							});

							var length = data.length;
							
							//var show_stu_num_div1 = '<p> Total Students: '+length+'</p>';
			            	//$('#table1 tbody').html('');
			            	//$('.show_stu_num_div1').html('');
			            	$('#table1 tbody').append(view_table);
			            	//$('.show_stu_num_div1').append(show_stu_num_div1);
			            	//$('.show_stu_num').show();
			            	//$('#c6').show();

			            		
			            	

			            },
			            error: function(err){

			            }




			        });
			        */
		
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
								
							    


							    <div class="select_class1">
							    
							    	<div class="select_class_select1">
							    		<select class="form-control" id="form_control_select_class1">
							    			<option disabled="true" selected="selected" >Select a Class
							    			</option>
							    			<option value="06" >Six</option>
							    			<option value="07">Seven</option>
							    			<option value="08">Eight</option>
							    			<option value="09">Nine</option>
							    			<option value="10">Ten</option>
							    			
							    		</select>

							    	</div>

							    	<div class="select_month_select">
							    		<select class="form-control" id="form_control_select_month">
							    			<option disabled="true" selected="selected" >Select Month
							    			</option>
							    			<option value="01" >January</option>
							    			<option value="02">February</option>
							    			<option value="03">March</option>
							    			<option value="04">April</option>
							    			<option value="05">May</option>
							    			<option value="06">June</option>
							    			<option value="07">July</option>
							    			<option value="08">August</option>
							    			<option value="09">September</option>
							    			<option value="10">October</option>
							    			<option value="11">November</option>
							    			<option value="12">December</option>
							    			
							    		</select>
							    		
							    	</div>
							    	<div class="select_year_select">
							    		<select class="form-control" id="form_control_select_year">
							    			<option disabled="true" selected="selected" >Select Year
							    			</option>
							    			<option value="2012" >2012</option>
							    			<option value="2013">2013</option>
							    			<option value="2014">2014</option>
							    			<option value="2015">2015</option>
							    			<option value="2016">2016</option>
							    			<option value="2017">2017</option>
							    			<option value="2018">2018</option>
							    			
							    			
							    			
							    		</select>
							    		
							    	</div>
							    	<div class="select_group_select">
							    		<select class="form-control" id="form_control_select_group">
							    			<option disabled="true" selected="selected" >Select Group
							    			</option>
							    			<option value="01" >Science</option>
							    			<option value="02">Commerce</option>
							    			<option value="03">Arts</option>
							    		</select>
							    		
							    	</div>

							    	<div class="select_sub_select">
							    		<select class="form-control" id="form_control_select_sub">
							    			<option disabled="true" selected="selected" >Select a class first</option>
							    			<option value="01" >Math</option>
							    			<option value="02">Physic</option>
							    			<option value="03">Science</option>
							    		</select>
							    		
							    	</div>
							    	<div class="select_btn_select">
							    		<a href="#" class="btn btn-primary" id="manage_stu">Manage student</a>
							    		
							    	</div>
							    </div>
								<div class=" " id="c6" style="">
								<!-- <div class="pinformation">
						    	<h1>Personal Information</h1>
						        </div> -->
						        
						    	<div class="container">
                                                                                       
									  <div class="table-responsive" id="table_res">          
									  <table class="table" id="table1" border="2px">
									    <thead>
									      <tr>
									      	<th>Image</th>
									        <th>Registration Number</th>
									        <th>Name</th>
									        <th>Subject Name</th>
									        <th>Fri 1</th>
									        <th>Sat 2</th>
									        <th>Sun 3</th>
									        <th>Fri 1</th>
									        <th>Sat 2</th>
									        <th>Sun 3</th>
									        <th>Fri 1</th>
									        <th>Sat 2</th>
									        <th>Sun 3</th>
									        <th>Fri 1</th>
									        <th>Sat 2</th>
									        <th>Sun 3</th>
									        <th>Fri 1</th>
									        <th>Sat 2</th>
									        <th>Sun 3</th>
									        <th>Fri 1</th>
									        <th>Sat 2</th>
									        <th>Sun 3</th>
									        <th>Fri 1</th>
									        <th>Sat 2</th>
									        <th>Sun 3</th>
									        <th>Fri 1</th>
									        <th>Sat 2</th>
									        <th>Sun 3</th>
									        <th>Fri 1</th>
									        <th>Sat 2</th>
									        <th>Sun 3</th>
									        <th>Fri 1</th>
									        <th>Sat 2</th>
									        <th>Sun 3</th>
									      </tr>
									    </thead>
									    <tbody>
									    	<tr>
									    		<td>
									    			Math
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td><td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td><td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		<td>
									    			<select>
									    				<option>
									    					A
									    				</option>
									    				<option>
									    					P
									    				</option>
									    				<option>
									    					L
									    				</option>

									    				<option>
									    					S
									    				</option>
									    			</select>
									    		</td>
									    		


									    	</tr>
									      
									       
									    </tbody>
									  </table>
									  </div>
									</div>

								</div>
								
								<!-- education -->
								
								
							

									
								
								
								
							</form>
					</div>
				</div>
				

				</div>
			</div>
		</div>
	
</body>
</html>