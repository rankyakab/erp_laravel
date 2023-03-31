<script>
	

	$("#submiaction").on('submit', function(event){
	      event.preventDefault();
	      
	      $.ajax({
	        type: 'POST',
	        url: 'submiaction',
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
	        	Swal.fire('Success!', data.info, 'success');
	        	setTimeout(function() {
				    location.reload();
				}, 3000);
	        }else{
	        	Swal.fire("Error!", data.info, "error");
	        }
	          
              $("#button").show();
              $("#processing").hide();
	        }
	      });
	    });



	$("#submitprocess").on('submit', function(event){
	      event.preventDefault();
	      
	      $.ajax({
	        type: 'POST',
	        url: 'submitprocess',
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
	        	Swal.fire('Success!', data.info, 'success');
	        	setTimeout(function() {
				    location.reload();
				}, 3000);
	        }else{
	        	Swal.fire("Error!", data.info, "error");
	        }
	          
              $("#button").show();
              $("#processing").hide();
	        }
	      });
	    });


	$("#submitrole").on('submit', function(event){
	      event.preventDefault();
	      
	      $.ajax({
	        type: 'POST',
	        url: 'submitrole',
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
	        	Swal.fire('Success!', data.info, 'success');
	        	setTimeout(function() {
				    location.reload();
				}, 3000);
	        }else{
	        	Swal.fire("Error!", data.info, "error");
	        }
	          
              $("#button").show();
              $("#processing").hide();
	        }
	      });
	    });


	$("#checkall").click(function(){
	  	if($(this).prop("checked") == true){
                $('input[type="checkbox"]').prop("checked", true);
            }else{
            	$('input[type="checkbox"]').prop("checked", false);
            }
	  });



	$("#submitprivileges").on('submit', function(event){
	      event.preventDefault();
	      
	      $.ajax({
	        type: 'POST',
	        url: 'submitprivileges',
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
	        	Swal.fire('Success!', data.info, 'success');
	        	/*setTimeout(function() {
				    location.reload();
				}, 3000);*/
	        }else{
	        	Swal.fire("Error!", data.info, "error");
	        }
	          
              $("#button").show();
              $("#processing").hide();
	        }
	      });
	    });


</script>