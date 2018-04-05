
/*Select Particular Student*/
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
	            type        : 'POST', 
	            contentType: "application/json; charset=utf-8",// define the type of HTTP verb we want to use (POST for our form)
	            url         : 'show_info', // the url where we want to POST
	            data        : formData, // our data object
	            dataType    : 'json',
	            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, // what type of data do we expect back from the server
	            success: function(data){

	            	//console.log(data[]);
	            	student = data[0];
	            	var view_table1 ='<tr><td>'+student.id+'</td><td id="fname">'+student.fname+'</td><td id="lname">'+student.lname+'</td><td id="sgname">'+student.gname+'</td><td id="sgoccup">'+student.goccup+'</td><td id="gphone">'+student.gphone+'</td><td id="sphone">'+student.sphone+'</td><td id="sdob">'+student.sdob+'</td><td id="sblood">'+student.sblood+'</td><td><a  href="#" id="editbtn">Edit</a></td></tr>';
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