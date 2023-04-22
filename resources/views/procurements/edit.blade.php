
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
					 <form class="row g-3" action="/procurement/{{$procurement->id}}" id="submitstaff" method="post" enctype="multipart/form-data">
					 	@csrf
                        @method('PUT')
					 <div class="col-sm-12">
					 	<div class="row">
						 	<div class="col-sm-3">
								<label for="item" class="form-label">Item Name<small style="color:#ff0000">*</small></label>
								<input type="text" class="form-control" id="item" name="item" placeholder="Item  Name"  value="{{$procurement->item}}"  required>
                                 @error('item')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
							</div>
                            <div class="col-sm-3">
								<label for="quantity" class="form-label">Quantity<small style="color:#ff0000">*</small></label>
								<input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quntity"  value="{{$procurement->quantity}}"  required>
                                 @error('quantity')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
							</div>
						 	<div class="col-sm-3">
								<label for="date" class="form-label">Date<small style="color:#ff0000">*</small></label>
                                	
								<input type="date" class="form-control" id="date" name="date"  placeholder="Choose date" value="{{$procurement->date}}"  required >
                                 @error('date')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
							</div>
                            <div class="col-sm-3">
								<label for="amount" class="form-label">Amount<small style="color:#ff0000">*</small></label>
								<input type="number" class="form-control" id="amount" name="amount" placeholder="Enter Amount"  value="{{$procurement->amount}}"  required>
                                 @error('amount')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
							</div>
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
								<input type="number" class="form-control" id="total_price" name="total_price" placeholder="Total Price"  value="{{$procurement->total_price}}"  required>
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
								<input type="file" class="form-control" required  name="attachment"  value="{{old('attachment')}}" placeholder="Add Attachment">
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