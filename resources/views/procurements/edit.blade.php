
<x-layout>
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Procurement</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0" style="background-color: transparent;">
								<li class="breadcrumb-item"><a href="/procurements"><i class="bx bx-user"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit {{$procurement->item}} Request Item</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
		<div class="row">
		       <div class="col-12 col-lg-12">
		          <div class="card radius-10">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<div>
							<h5 class="mb-0">Edit Procurement Request </h5>
						</div>
						<div class="dropdown ms-auto">
							<!--<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="javascript:;">Action</a>
								</li>
								<li><a class="dropdown-item" href="javascript:;">Another action</a>
								</li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="javascript:;">Something else here</a>
								</li>
							</ul>-->
						</div>
					</div>
				</div>
				  <div class="card-body" style="padding-top: 40px;">
				  	<div class="form-body">
						  <x-flash-message />
					 <form class="row g-3" action="/procurementedit{{$procurement->id}}" id="submitstaff" method="post" enctype="multipart/form-data" name="edit-procurement">
					 	@csrf
                        @method('PUT')
					 <div class="col-sm-12">
					 	<div class="row">
						 	<div class="col-sm-4">
								<label for="item" class="form-label">Item Name<small style="color:#ff0000">*</small></label>
								<input type="text" class="form-control" id="item" name="item" placeholder="Item  Name"  value="{{$procurement->item}}"  required>
                                 @error('item')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
							</div>
                            <div class="col-sm-4">
								<label for="quantity" class="form-label">Quantity<small style="color:#ff0000">*</small></label>
								<input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quntity"  value="{{$procurement->quantity}}"  required>
                                 @error('quantity')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
							</div>
						 	<div class="col-sm-4">
								<label for="date" class="form-label">Date<small style="color:#ff0000">*</small></label>
                                	@php
									$date_input_format = date('Y-m-d', strtotime($procurement->date));

									@endphp
								<input type="date" class="form-control" id="date" name="date"  placeholder="Choose date" value="{{$date_input_format}}"  required >
                                 @error('date')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
							</div>
							<!--
                            <div class="col-sm-3">
								<label for="amount" class="form-label">Amount<small style="color:#ff0000">*</small></label>
								<input type="number" class="form-control" id="amount" name="amount" placeholder="Enter Amount"  value="{{$procurement->amount}}"  required>
                                 @error('amount')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
							</div>
								-->
						</div><br />
				
                       <div class="row">
						 	<div class="col-sm-4">
								<label for="unit_price" class="form-label">Unit Price<small style="color:#ff0000">*</small></label>
								<input type="number" class="form-control" id="unit_price" name="unit_price" placeholder="Unit Price"  value="{{$procurement->unit_price}}"  required>
                                 @error('unit_price')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
							</div>
                            <div class="col-sm-4">
								<label for="total_price" class="form-label">Total Price<small style="color:#ff0000">*</small></label>
								<input type="number" class="form-control" id="total_price2" name="total_price2" placeholder="Unit Price"  value="{{$procurement->total_price}}" disabled required>
                           
								<input type="number" class="form-control" id="total_price" name="total_price" placeholder="Unit Price"  value="{{$procurement->total_price}}" hidden  required>
                           
                                 @error('total_price')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
							</div>
						 	<div class="col-sm-4">
								<label for="date" class="form-label">Requested By<small style="color:#ff0000">*</small></label>
								<input type="text" class="form-control" id="dte" name="req" placeholder="{{Auth::user()->name}}"  value="" disabled>
                                <input type="text" class="form-control" id="requested_by" name="requested_by" placeholder=""  value="{{Auth::user()->profileid}}" hidden >
                                
							</div>
					</div>
                        <br />


						<div class="row">

                            <div class="col-sm-4">
								<label for="sent_to" class="form-label">Send To</label>
								<select class="form-control" id="sent_to" name="sent_to">
									<option value="">Select Category</option>
									@foreach($staffs as $staff)
									<option
                                    @php
                                        if($staff->id ==$procurement->sent_to){ echo "selected";}
                                    @endphp
                                     
                                     
                                     value="{{$staff->id}}">{{ $staff->surname }} {{$staff->firstname}}</option>
									@endforeach
                                    
								</select>
                                 @error('sent_to')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
							</div>



						 	<div class="col-sm-4">
								<label for="qty_purchased" class="form-label">Add Attachment<small style="color:#ff0000">*</small></label>
								<input type="file" class="form-control"   name="attachment"  value="{{old('attachment')}}" placeholder="Add Attachment">
                                   @error('attachmentnt')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
							</div>

                             <div class="col-sm-4">
								<label for="attachment_type" class="form-label"> To</label>
								<select class="form-control" id="attachment_type" name="attachment_type">
									<option value="">Select Attachment Type</option>
									 @php
                                        if($staff->id ==$procurement->sent_to){ echo "selected";}
                                    @endphp

                                    @foreach(["normal","admin"] as $attachment_type)
									<option
                                    @php
                                        if($attachment_type ==$procurement->attachment_type){ echo "selected";}
                                    @endphp
                                     
                                     
                                     value="{{$attachment_type}}">{{ $procurement->attachment_type }} Attachment</option>
									@endforeach

								
                                    
								</select>
                                 @error('attachment_type')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
							</div>
						</div><br />
						
					
						
                       
						<div class="row">
						 	<div class="col-sm-6">
								
							</div>
						 	<div class="col-sm-6 text-right float-right">
								<button class="btn btn-info" type="submit" id="button">Submit</button>
								<img src="{{ asset('assets/images/processing.gif') }}" width="50px;" id="processing" class="processing" style="display: none;">
							</div>
						</div><br />
						</div>
					 </form>
					 </div>
				  </div>
			  </div>
		   </div>
		
		   </div>
		</div>
	</div>
</div>
</x-layout>

<script>
$('#unit_price').on('input', function() {
				var amount = $('#quantity').val();
				var unit_price =$('#unit_price').val();
				
				if(amount > 0 && unit_price > 0){
				$('#total_price').val(amount * unit_price);
				$('#total_price2').val(amount * unit_price);
				}else {
					$('#total_price').val(0);
					$('#total_price2').val(0);
				}
						// Set the value of the second input field based on the value of the first using jQuery
			
	});
$('#quantity').on('input', function() {
	var amount = $('#quantity').val();
	var unit_price =$('#unit_price').val();
	
	if(amount > 0 && unit_price > 0){
       $('#total_price').val(amount * unit_price);
	    $('#total_price2').val(amount * unit_price);
	}else {
		 $('#total_price').val(0);
		  $('#total_price2').val(0);
	}
			// Set the value of the second input field based on the value of the first using jQuery
			
});


//	import swal from 'sweetalert';
	//Adding bank into the system
$("form[name='edit-procurement']").submit(function(event) {
    event.preventDefault(); // prevent the form from submitting
     $("#button").hide();
	$("#processing").show();
	
			const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger'
			},
			buttonsStyling: false
			})

			swalWithBootstrapButtons.fire({
			title: 'Are you sure you want to Edit this  Procurement Request?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Yes, Edit !',
			cancelButtonText: 'No, cancel!',
			reverseButtons: true
			}).then((result) => {
			if (result.isConfirmed) {
				$(this).unbind('submit').submit();
				swalWithBootstrapButtons.fire(
				'Editing Procurement Request',
				'...',
				''
				)
			} else if (
				/* Read more about handling dismissals below */
				result.dismiss === Swal.DismissReason.cancel
				
			) {
				swalWithBootstrapButtons.fire(
				'Cancelled',
				'You Cancelled this Operation :)',
				'error'
				)
				$("#button").show();
				$("#processing").hide();
			}
			})


});


</script>