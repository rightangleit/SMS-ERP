<!DOCTYPE html>
<html>
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
<!--   	<script src="/js/wow.min.js"></script> -->
    <script>
        //new WOW().init();
    </script>
  
    <script type="text/javascript">
      	function showTable(one,second,three)
	    {
	      document.getElementById(one).style.display = 'block';
	      document.getElementById(second).style.display = 'none';
	      document.getElementById(three).style.display = 'none';
	      
	      
	    }
	    	
	    function showTable1(one)
	    {
	      document.getElementById(one).style.display = 'block';
	      
	      
	    }
	    
	</script>

	<script type="text/javascript">
		

	$(document).ready(function() {

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

	});


	</script>

	<script type="text/javascript">
		function reload(){
			 document.location.reload();
		}
		
	</script>


	<script type="text/javascript">

	$(document).on('click','#editbtn',function(){
		
			var tr = $(this).closest('tr');
			var id = $(tr).find('td:eq(0)').text();
			var fname = $(tr).find('td:eq(1)').text();
			var lname = $(tr).find('td:eq(2)').text();
			var gname = $(tr).find('td:eq(3)').text();
			var goccup = $(tr).find('td:eq(4)').text();
			var gphone = $(tr).find('td:eq(5)').text();
			var sphone = $(tr).find('td:eq(6)').text();
			var sdob = $(tr).find('td:eq(7)').text();
			var sblood = $(tr).find('td:eq(8)').text();
			
			
			$("#tableA").hide();
			$("#tableD").show();
			$("input[name='id1']").val(id);
			$("input[name='fname1']").val(fname);
			$("input[name='lname1']").val(lname);
			$("input[name='gname1']").val(gname);
			$("input[name='goccup1']").val(goccup);
			$("input[name='gphone1']").val(gphone);
			$("input[name='sphone1']").val(sphone);
			$("input[name='sdob1']").val(sdob);
			$("input[name='sblood1']").val(sblood);
			id = $('input[name=id]').val()

		
	});
	$(document).on('click','#editbtn2',function(){
		
			var tr = $(this).closest('tr');
			var id = $('#table1 tr').find('td:eq(0)').text();
			var sclass = $(tr).find('td:eq(0)').text();
			var ssection = $(tr).find('td:eq(1)').text();
			var sgroup = $(tr).find('td:eq(2)').text();
			var sshift = $(tr).find('td:eq(3)').text();
			
			
			
			$("#tableB").hide();
			$("#tableE").show();
			$("input[name='id2']").val(id);
			$("input[name='sclass1']").val(sclass);
			$("input[name='ssection1']").val(ssection);
			$("input[name='sgroup1']").val(sgroup);
			$("input[name='sshift1']").val(sshift);
			
			id = $('input[name=id]').val()

		
	});
	$(document).on('click','#editbtn3',function(){
		
			var tr = $(this).closest('tr');
			var id = $('#table1 tr').find('td:eq(0)').text();
			var preadd = $(tr).find('td:eq(0)').text();
			var peradd = $(tr).find('td:eq(1)').text();
			
			
			
			$("#tableC").hide();
			$("#tableF").show();
			$("input[name='id3']").val(id);
			$("input[name='spreadd1']").val(preadd);
			$("input[name='speradd1']").val(peradd);
			

		
	});

	function updatePInfo(){
  
			//event.preventDefault();b
			id = $('input[name=id1]').val()

			var formData = {
	            'id': $('input[name=id1]').val(),
	            'fname': $('input[name=fname1]').val(),
	            'lname': $('input[name=lname1]').val(),
	            'gname': $('input[name=gname1]').val(),
	            'goccup': $('input[name=goccup1]').val(),
	            'gphone': $('input[name=gphone1]').val(),
	            'sphone': $('input[name=sphone1]').val(),
	            'sdob': $('input[name=sdob1]').val(),
	            'sblood': $('input[name=sblood1]').val(),
	            '_token': "{{csrf_token()}}",
	        };


	        $.ajax({
	            type        : 'PUT', // define the type of HTTP verb we want to use (POST for our form)
	            url         : 'show_info/' +id, // the url where we want to POST
	            data        : formData, // our data object
	            dataType    : 'json', // what type of data do we expect back from the server
	            success: function(data){


                    

	            	//console.log(data);
	            	//console.log(data1);
	            	student = data;
	            	//s=data1;
	            	var view_table1 ='<tr><td id="id">'+student.id+'</td><td id="fname">'+student.fname+'</td><td id="lname">'+student.lname+'</td><td id="sgname">'+student.gname+'</td><td id="sgoccup">'+student.goccup+'</td><td id="gphone">'+student.gphone+'</td><td id="sphone">'+student.sphone+'</td><td id="sdob">'+student.sdob+'</td><td id="sblood">'+student.sblood+'</td><td><a  href="#" id="editbtn">Edit</a></td></tr>';
	            	var view_table2 ='<tr><td>'+student.sclass+'</td><td>'+student.ssection+'</td><td>'+student.sgroup+'</td><td>'+student.sshift+'</td><td><a href="#" id="editbtn2" >Edit</a></td></tr>';
	            	var view_table3 ='<tr><td>'+student.speradd+'</td><td>'+student.spreadd+'</td><td><a href="#" id="editbtn3">Edit</a></td></tr>';
	            	 

	            	//$('#view_table1').replaceWith(table1);
	            	$("#table1 tbody tr:first-child").remove();
	            	$("#table2 tbody tr:first-child").remove();
	            	$("#table3 tbody tr:first-child").remove();
	            	$('#table1').append(view_table1);
	            	$('#table2').append(view_table2);
	            	$('#table3').append(view_table3);
	            	
	            	

	            	$("#tableA").show();
	            	
	            	$("#tableD").hide();

	            	
	            //$('#myModal').modal('show');

	            		
	            	

	            },
	            error: function(err){

	            }



	        });

	}

	function updateEinfo(){
		//event.preventDefault();
			id = $('#table1 tr').find('td:eq(0)').text();
			//alert(id);
			var formData = {
	            'sclass': $('input[name=sclass1]').val(),
	            'ssection': $('input[name=ssection1]').val(),
	            'sgroup': $('input[name=sgroup1]').val(),
	            'sshift': $('input[name=sshift1]').val(),
	            '_token': "{{csrf_token()}}",
	        };


	        $.ajax({
	            type        : 'PUT', // define the type of HTTP verb we want to use (POST for our form)
	            url         : 'show_info1/' +id, // the url where we want to POST
	            data        : formData, // our data object
	            dataType    : 'json', // what type of data do we expect back from the server
	            success: function(data){


                    

	            	console.log(data);
	            	student = data;
	            	var view_table1 ='<tr><td id="id">'+student.id+'</td><td id="fname">'+student.fname+'</td><td id="lname">'+student.lname+'</td><td id="sgname">'+student.gname+'</td><td id="sgoccup">'+student.goccup+'</td><td id="gphone">'+student.gphone+'</td><td id="sphone">'+student.sphone+'</td><td id="sdob">'+student.sdob+'</td><td id="sblood">'+student.sblood+'</td><td><a  href="#" id="editbtn">Edit</a></td></tr>';
	            	var view_table2 ='<tr><td>'+student.sclass+'</td><td>'+student.ssection+'</td><td>'+student.sgroup+'</td><td>'+student.sshift+'</td><td><a href="#" id="editbtn2" >Edit</a></td></tr>';
	            	var view_table3 ='<tr><td>'+student.speradd+'</td><td>'+student.spreadd+'</td><td><a href="#" id="editbtn3">Edit</a></td></tr>';
	            	 

	            	//$('#view_table1').replaceWith(table1);
	            	
	            	$("#table1 tbody tr:first-child").remove();
	            	$("#table2 tbody tr:first-child").remove();
	            	$("#table3 tbody tr:first-child").remove();
	            	$('#table1').append(view_table1);
	            	$('#table2').append(view_table2);
	            	$('#table3').append(view_table3);
	            	
	            	
	            	

	            	$("#tableB").show();
	            	
	            	$("#tableE").hide();

	            	
	            //$('#myModal').modal('show');

	            		
	            	

	            },
	            error: function(err){

	            }



	        });


	}

	function updateAinfo(){
		id = $('#table1 tr').find('td:eq(0)').text();
			//alert(id);
			var formData = {
	            'spreadd': $('input[name=spreadd1]').val(),
	            'speradd': $('input[name=speradd1]').val(),
	            '_token': "{{csrf_token()}}",
	        };


	        $.ajax({
	            type        : 'PUT', // define the type of HTTP verb we want to use (POST for our form)
	            url         : 'show_info2/' +id, // the url where we want to POST
	            data        : formData, // our data object
	            dataType    : 'json', // what type of data do we expect back from the server
	            success: function(data){


                    

	            	console.log(data);
	            	student = data;
	            	var view_table1 ='<tr><td id="id">'+student.id+'</td><td id="fname">'+student.fname+'</td><td id="lname">'+student.lname+'</td><td id="sgname">'+student.gname+'</td><td id="sgoccup">'+student.goccup+'</td><td id="gphone">'+student.gphone+'</td><td id="sphone">'+student.sphone+'</td><td id="sdob">'+student.sdob+'</td><td id="sblood">'+student.sblood+'</td><td><a  href="#" id="editbtn">Edit</a></td></tr>';
	            	var view_table2 ='<tr><td>'+student.sclass+'</td><td>'+student.ssection+'</td><td>'+student.sgroup+'</td><td>'+student.sshift+'</td><td><a href="#" id="editbtn2" >Edit</a></td></tr>';
	            	var view_table3 ='<tr><td>'+student.speradd+'</td><td>'+student.spreadd+'</td><td><a href="#" id="editbtn3">Edit</a></td></tr>';
	            	 

	            	//$('#view_table1').replaceWith(table1);
	            	
	            	$("#table1 tbody tr:first-child").remove();
	            	$("#table2 tbody tr:first-child").remove();
	            	$("#table3 tbody tr:first-child").remove();
	            	$('#table1').append(view_table1);
	            	$('#table2').append(view_table2);
	            	$('#table3').append(view_table3);
	            	
	            	
	            	

	            	$("#tableC").show();
	            	
	            	$("#tableF").hide();

	            	
	            //$('#myModal').modal('show');

	            		
	            	

	            },
	            error: function(err){

	            }



	        });
	}

	$(document).on('click','#savebtn',function(){
		updatePInfo();
	});

	$(document).on('click','#savebtn2',function(){
		updateEinfo();
	});

	$(document).on('click','#savebtn3',function(){
		updateAinfo();	
	});
	</script>
</head>

<body>
	<div id="navbar" class="navbar navbar-default navbar-fixed-top navbar-inverse" 
	role="navigation">
		<div class="container">
			<div class="navbar-header">
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
	<!-- Side nave start -->
	<div class="container-fluid" style="background-color: #fff;">
		<div class="row content" >
			<div class="col-sm-3 sidenav hidden-xs navbar-fixed-top">
				<ul class="nav nav-pills nav-stacked">
				    <li class="dropdown">
						<button class="btn btn-primary dropdown-toggle"type="button" data-toggle="dropdown">
						Student Information
							<span class="caret"></span>
						</button>
							<ul class="dropdown-menu">
								<li><a href="{{ url('stu_info_new/create') }}">New Student</a></li>
							    <li><a href="{{ url('show_info') }}">Show information</a></li>     
							</ul>	
				    </li>
				    <li class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
						Student Attendance
							<span class="caret"></span>
						</button>
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
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
							Result Processing
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="insert_result.blade.php">Insert Result</a></li>
							<li><a href="search_result.blade.php">Show Result</a></li>
							<li><a href="#">Marksheet</a></li>
							<li><a href="#">Tabulation Sheet</a></li>
						</ul>	
				    </li>
				    <li class="">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
							Teacher Login
						</button> 	
				    </li>
				    <li class="">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
							Classified Bulk Sms
						</button> 	
				    </li>
				    <li class="">	
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
							Academic Calender
						</button>	   	
				    </li>

      			</ul><br>
			</div>
		</div>
		<br>
		<div class="row" id="row_form">

					<!-- <h1 class="title">Personal Information</h1> -->
					
			
		
		<div class="row" id="row_form "  >
			<div class="col-sm-12 col-md-12" id="row_1st_col_rId" style="">
				<form class="form-horizontal" method="POST" action="{{url('show_info')}}" >
					{{csrf_field()}}			
					<div class="form-group, col-sm-6 col-md-6" >
						<label for="rId" id="label_rId" class="control-label">Enter Registration Number: </label>
							<input type="text" class="form-control" id="rId" placeholder="Registration Number" data-error="Enter Student's Registration Number" required name="rId">
							<div class="help-block with-errors"></div>
							<button type="submit" class="btn btn-primary" id="btn_profile"   name="seeprofile">See Profile</button>
					</div>							
				</form>			
			</div>
		</div>
	
		
		
									    
			<!-- Modal Start -->

	
	<div class="modal fade left modal1" id="myModal" role="dialog"> 
		<div class="modal-dialog"> 
			<div class="modal-content"> 
				<div class="modal-header"> 
						<!-- <h3 class="pull-left no-margin">Contact Form</h3> -->
					<button type="submit" id="button1" name="submit" class="btn-lg btn-primary buttons" data-toggle="" data-target="" 
									onClick="showTable('tableA','tableB','tableC')">Personal Information</button>
					<button type="submit"  id="button2" name="submit" class="btn-lg btn-primary buttons" data-toggle="" data-target=""  
									onClick="showTable('tableB','tableA','tableC')">Education</button>
					<button type="submit"  id="button3" name="submit" class="btn-lg btn-primary buttons" onClick="showTable('tableC','tableA','tableB')">Address</button>
					<button onclick="reload()" type="submit" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
					</button> 

				</div> 
				<div class="modal-body">
					<div class="table-responsive" id="tableA" style="display: none">
						<div class="pinformation" id="pinformation" >
						    <h1>Personal Information</h1>
						   </div>          
						<table class="table" id="table1" >
							<thead>
								<tr>
									<th>Registration Number</th>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Guardian's Name</th>
									<th>Guardian's Occupation</th>
									<th>Guardian's Phone Number</th>
									<th>Student's Phone Number</th>
									<th>Blood Group</th>
									<th>Date of Birth</th>
									<th>Edit</th>       
								</tr>
							</thead>
							<tbody>
						
								
							
							 </tbody>
						</table>															
					</div>

					<div class="table-responsive" id="tableB" style="display: none" > 	 
						<div class="pinformation" id="pinformation">
							<h1>Educational Information</h1>
						</div>     
						<table class="table" id="table2" >
							<thead>
								<tr>       
									<th>Class</th>
									<th>Section</th>
									<th>Group</th>
									<th>Shift</th>
									<th>Edit</th>
								</tr>
							</thead>
							<tbody> </tbody>
						</table>															
					</div>
					<div class="table-responsive" id="tableC" style="display: none">    
						<div class="pinformation" id="pinformation">
							   <h1>Address</h1>
						</div>
						<table class="table" id="table3">
							<thead>
								<tr>	        
									<th>Present Address</th>
									<th>Permanent Address</th>
									<th>Edit</th>	        
								</tr>
							</thead>
							<tbody> </tbody>
						</table>
					</div>
					<form>
						
					
					<div class="table-responsive" id="tableD" style="display: none">    
						<div class="pinformation" id="pinformation">
							   <h1>Personal Information (Please Update your Information)</h1>
						</div>
						<table class="table" id="table4">
							<thead>
								<tr>
									<th>Registration Number</th>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Guardian's Name</th>
									<th>Guardian's Occupation</th>
									<th>Guardian's Phone Number</th>
									<th>Student's Phone Number</th>
									<th>Date of Birth</th>
									<th>Blood Group</th>
									
									<th>Save</th>       
								</tr>
							</thead>
							<tbody><tr><td><input type="number" name="id1" class="form-control" disabled="true" value="disabled" name="id1"></td>
							 			<td><input type="text" name="fname1" class="form-control"></td>
							 			<td><input type="text" name="lname1" class="form-control"></td>
							 			<td><input type="text" name="gname1" class="form-control"></td>
							 			<td><input type="text" name="goccup1" class="form-control"></td>
							 			<td><input type="number" name="gphone1" class="form-control"></td>
							 			<td><input type="number" name="sphone1" class="form-control"></td>
							 			<td><input type="Date" name="sdob1" class="form-control"></td>
							 			<td><input type="text" name="sblood1" class="form-control"></td>
							 			<td><button type="button" id="savebtn" class="form-control" name="submit" value="Save">Save</button></td>
							 		</tr> 
							 </tbody>
						</table>
					</div>
					</form>

					
					<form>
						
					
					<div class="table-responsive" id="tableE" style="display: none">    
						<div class="pinformation" id="pinformation">
							   <h1>Educational Information (Please Update your Information)</h1>
						</div>
						<table class="table" id="table5">
							<thead>
								<tr>
									<th>Registration number</th>
									<th>Class</th>
									<th>Section</th>
									<th>Group</th>
									<th>Shift</th>
									<th>Save</th>       
								</tr>
							</thead>
							<tbody><tr><td><input type="number" name="id2" class="form-control" disabled="true" value="disabled" ></td>
							 			<td><input type="text" name="sclass1" class="form-control"></td>
							 			<td><input type="text" name="ssection1" class="form-control"></td>
							 			<td><input type="text" name="sgroup1" class="form-control"></td>
							 			<td><input type="text" name="sshift1" class="form-control"></td>
							 			<td><button type="button" id="savebtn2" class="form-control" name="submit" value="Save">Save</button></td>
							 		</tr> 
							 </tbody>
						</table>
					</div>
					</form>
					<form>
						
					
					<div class="table-responsive" id="tableF" style="display: none">    
						<div class="pinformation" id="pinformation">
							   <h1>Address (Please Update your Information)</h1>
						</div>
						<table class="table" id="table6">
							<thead>
								<tr>
									<th>Registration id</th>
									<th>Present Address</th>
									<th>Permanent Address</th>
									<th>Save</th>       
								</tr>
							</thead>
							<tbody><tr><td><input type="number" name="id3" class="form-control" disabled="true" value="disabled" ></td>
							 			<td><input type="text" name="spreadd1" class="form-control"></td>
							 			<td><input type="text" name="speradd1" class="form-control"></td>
							 			
							 			<td><button type="button" id="savebtn3" class="form-control" name="submit" value="Save">Save</button></td>
							 		</tr> 
							 </tbody>
						</table>
					</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	
		
	
	

	
</body>
</html>