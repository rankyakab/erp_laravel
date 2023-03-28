<script>

	//Adding departments into the system

	$("#submitdepartment").on('submit', function(event){
	      event.preventDefault();
	      
	      $.ajax({
	        type: 'POST',
	        url: 'submitdepartment',
	        data: new FormData(this),
	        contentType: false,
	        cache: false,
	        processData: false,
	        beforeSend:function(){
	                $("#button").hide();
	                $("#processing").show();
	            },
	        success: function(data){

	        if(data.message == 'success'){
	        	Swal.fire('Success!', 'Department successfully created!', 'success');
	        	setTimeout(function() {
				    location.reload();
				}, 3000);
	        }else{
	        	Swal.fire("Error!", "Error creating department, is possible the department already exist. Please try again!", "error");
	        }
	          
              $("#button").show();
              $("#processing").hide();
	        }
	      });
	    });





	//Adding designation into the system

	$("#submitdesignation").on('submit', function(event){
	      event.preventDefault();
	      
	      $.ajax({
	        type: 'POST',
	        url: 'submitdesignation',
	        data: new FormData(this),
	        contentType: false,
	        cache: false,
	        processData: false,
	        beforeSend:function(){
	                $("#button").hide();
	                $("#processing").show();
	            },
	        success: function(data){

	        if(data.message == 'success'){
	        	Swal.fire('Success!', 'Designation successfully created!', 'success');
	        	setTimeout(function() {
				    location.reload();
				}, 3000);
	        }else{
	        	Swal.fire("Error!", "Error creating designation, is possible the designation already exist. Please try again!", "error");
	        }
	          
              $("#button").show();
              $("#processing").hide();
	        }
	      });
	    });



	//Adding offices into the system

	$("#submitoffices").on('submit', function(event){
	      event.preventDefault();
	      
	      $.ajax({
	        type: 'POST',
	        url: 'submitoffices',
	        data: new FormData(this),
	        contentType: false,
	        cache: false,
	        processData: false,
	        beforeSend:function(){
	                $("#button").hide();
	                $("#processing").show();
	            },
	        success: function(data){

	        if(data.message == 'success'){
	        	Swal.fire('Success!', 'Office successfully created!', 'success');
	        	setTimeout(function() {
				    location.reload();
				}, 3000);
	        }else{
	        	Swal.fire("Error!", "Error creating office, is possible the office already exist. Please try again!", "error");
	        }
	          
              $("#button").show();
              $("#processing").hide();
	        }
	      });
	    });



	//Adding bank into the system

	$("#submitbank").on('submit', function(event){
	      event.preventDefault();
	      
	      $.ajax({
	        type: 'POST',
	        url: 'submitbank',
	        data: new FormData(this),
	        contentType: false,
	        cache: false,
	        processData: false,
	        beforeSend:function(){
	                $("#button").hide();
	                $("#processing").show();
	            },
	        success: function(data){

	        if(data.message == 'success'){
	        	Swal.fire('Success!', 'Bank successfully created!', 'success');
	        	setTimeout(function() {
				    location.reload();
				}, 3000);
	        }else{
	        	Swal.fire("Error!", "Error creating bank, is possible the bank already exist. Please try again!", "error");
	        }
	          
              $("#button").show();
              $("#processing").hide();
	        }
	      });
	    });

	
</script>