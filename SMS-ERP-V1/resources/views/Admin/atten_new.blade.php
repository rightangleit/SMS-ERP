<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
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
	var view_table2 = '';
	var name = 1;
	var sub='';
	var date;
   	$(document).ready(function() {
   		$(document).on('click','#manage_stu',function(){
				var cls_val = $('#form_control_select_class1').find("option:selected").val(); 		
				var group_val = $('#form_control_select_group').find("option:selected").val();
				var sub_val = $('#form_control_select_sub').find("option:selected").val();   
                 date = $('#form_control_select_date').val();
                var date_val = 'DATE:'+date;
				$('#date h3').append(date_val);
				$('#table1 thead tr' ).html('<th>'+'Image'+'</th>'+'<th>'+'Registration Number'+'</th>'+'<th>'+'Name'+'</th>'+'<th>'+'Sub Name'+'</th>'+'<th>'+'Status'+'</th>');
		    	var cls = $(' #form_control_select_class1').find("option:selected").text();
		    	 sub = $('#form_control_select_sub').find("option:selected").text();
				var group = $('#form_control_select_group').find("option:selected").text();
		   		var formData = {
			        'sclass': cls,
			        'group': group,
			        'sub': sub,
			        'date': date,
			        '_token': "{{csrf_token()}}",
			    };
			    $.ajax({
			        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
			        url         : 'atten_new', // the url where we want to POST
			        data        : formData, // our data object
			        dataType    : 'json', // what type of data do we expect back from the server
			        success: function(data){

				        console.log(data);
				        var view_table ='';
				        
				        $.each(data, function( index, student ) {
								 
							view_table +='<tr id="tr"><td>'+'-----'+'</td><td>'+student.id+'</td><td>'+student.fname+' '+student.lname+'</td><td>'+sub+' </td><td>'+'<span>Present</span><input id="radio" value="P" name="status_atten'+name+'" type="radio"> <br><span>Absent</span> <input id="radio" value="A" name="status_atten'+name+'" type="radio"> <br> <span>Late</span><input id="radio" value="L" name="status_atten'+name+'" type="radio"> <br><span>Sick</span> <input id="radio" value="S" name="status_atten'+name+'" type="radio">'+' </td></tr>';
								name++;
								});

						var length = data.length;
						console.log(view_table);		
				        $('#table1 tbody ').html(view_table);
				        $('#table_con').show();
			            	
			    	},
			        error: function(err){

			        }

			    });
	});
});
</script>



<script type="text/javascript">
   	$(document).ready(function() {
   		$(document).on('click','#manage_atten',function(){
   			var atten_status_len = name-1;        
			var atten_status = [];
			var studentId = [];
			var i=1;
			var texts = $("td").map(function() {
   			 return $(this).text();

			});
			var j =0;
			for(var k = 1; k<=atten_status_len;k++,i+=5,j++){
				atten_status[j] =$('input[name=status_atten'+k+']:checked').val();
				studentId[j] =texts[i]; 
			}
			
		   		var formData = {
		   			'atten_status_len':atten_status_len,
			        'atten_status': atten_status,
			        'studentId': studentId,
			        'sub': sub,
			        'date':date,
					'_token': "{{csrf_token()}}",
			    };
			    console.log(formData);
			    $.ajax({
			        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
			        url         : 'atten_new_insert', // the url where we want to POST
			        data        : formData, // our data object
			        dataType    : 'html', // what type of data do we expect back from the server
			        /*success: function(data){

				        console.log(data);
				        var view_table ='';
				     
			            	
			    	},*/
			        

			    });
	});
});
</script>


<script type="text/javascript">

	function handleSelect() {
		var class_val = $(' #form_control_select_class1').find("option:selected").val();
	     if (class_val == '06') {  	
	     	document.getElementById('form_control_select_group').disabled = true;
	        document.getElementById('form_control_select_sub').disabled = false;    
	     } 
	     if (class_val == '07') {
	        document.getElementById('form_control_select_sub').disabled = false;
	        document.getElementById('form_control_select_group').disabled = true;
	     }
	     else if (class_val == '08') {
	        document.getElementById('form_control_select_sub').disabled = false;
	        document.getElementById('form_control_select_group').disabled = true;
	     }
	     else if (class_val == '09') {
	        document.getElementById('form_control_select_group').disabled = false;
	        document.getElementById('form_control_select_sub').disabled = false;    
	     }
	     else if (class_val == '10') {
	        document.getElementById('form_control_select_group').disabled = false;
	        document.getElementById('form_control_select_sub').disabled = false;   
	     }

	 }

</script>
</head>
<body>
	<div id="navbar" class="navbar navbar-default navbar-fixed-top navbar-inverse" 
	role="navigation">
		<div class="container">
			<div class="navbar-header" >
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
	  <div class="container-fluid" >
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
							    		<select class="form-control" id="form_control_select_class1" onchange="handleSelect()">
							    			<option disabled="true" selected="selected" >Select a Class
							    			</option>
							    			<option value="06">Six</option>
							    			<option value="07">Seven</option>
							    			<option value="08">Eight</option>
							    			<option value="09">Nine</option>
							    			<option value="10">Ten</option>
							    			
							    		</select>

							    	</div>

							    	<div class="select_group_select">
							    		<select class="form-control" id="form_control_select_group" disabled>
							    			<option disabled="true selected="selected" >Select Group
							    			</option>
							    			<option value="01" >Science</option>
							    			<option value="02">Commerce</option>
							    			<option value="03">Arts</option>
							    		</select>
							    		
							    	</div>

							    	<div class="select_sub_select">
							    		<select class="form-control" id="form_control_select_sub" disabled>
							    			<option disabled selected="selected" >Select a class first</option>
							    			<option value="01" >Math</option>
							    			<option value="02">Physic</option>
							    			<option value="03">Science</option>
							    		</select>
							    		
							    	</div>
							    	<div class="select_date_select">
							    		<input class="form-control" type="date" id="form_control_select_date">
							    			
							    	</div>
							    	<div class="select_btn_select">
							    		<a href="#" class="btn btn-primary" id="manage_stu">Manage student</a>
							    		
							    	</div>
							    </div>
								<div class=" " id="c6" style="">

						        <div id="date">
						        	<h3>
						        	   
						        	</h3>
						        </div>
						    	<div class="container" id="table_con" style="display: none;">
                                                                                       
									  <div class="table-responsive" id="table_res"> 

									  <table class="table" id="table1" border="2px">
									  	
									     <thead>

									      <tr>
									      
									      </tr>
									    </thead>
									    <tbody>
									    
									       
									    </tbody>
									  </table>
									   <div class="select_btn_select">
							    		<a href="#" class="btn btn-primary" id="manage_atten" >Manage Attendance</a>
							    		
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