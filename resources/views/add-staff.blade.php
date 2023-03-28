@include("layouts.app-title")
<body>
@include("layouts.app-sidebar")
@include("layouts.app-header")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Staff</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0" style="background-color: transparent;">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-user"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add New Staff</li>
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
							<h6 class="mb-0">Add New Staff</h6>
						</div>
						<div class="dropdown ms-auto">
							<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
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
							</ul>
						</div>
					</div>
				</div>
				  <div class="card-body">
				  	<div class="form-body">
					 <form class="row g-3">
					 	<div class="col-sm-4">
					 	<center>



					 		<!--image upload starts here--->
	                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
	                    <div class="fileinput-new  avatar border-gray">
	                      <img src="{{ asset('assets/images/default-avatar.png') }}" width="250px" alt="...">
	                    </div>
	                    <div class="fileinput-preview fileinput-exists avatar border-gray">
	                      <img src="{{ asset('assets/images/default-avatar.png') }}" width="250px" alt="...">
	                    </div>
	                    <div>
	                    	
	                      <!--<span class="btn btn-round btn-rose btn-file">
	                        <span class="fileinput-new">Add Photo</span>
	                        <span class="fileinput-exists">Change</span>
	                        <input type="file" name="pics" id="pics" />
	                      </span>
	                      <br />
	                      <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>-->
	                    </div>
	                    
	                  </div><br /><br />




	                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
	                    <div class="fileinput-new  border-gray">
	                      <img src="{{ asset('assets/images/signature.jpg') }}" width="250px" alt="...">
	                    </div>
	                    <div class="fileinput-preview fileinput-exists  border-gray">
	                      <img src="{{ asset('assets/images/signature.jpg') }}" width="250px" alt="...">
	                    </div>
	                    <div>
	                    	<!--<label>Signature</label>
	                      <span class="btn btn-round btn-rose btn-file">
	                        <span class="fileinput-new">Add Photo</span>
	                        <span class="fileinput-exists">Change</span>
	                        <input type="file" name="pics" id="pics" />
	                      </span>
	                      <br />
	                      <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>-->
	                    </div>
	                    
	                  </div>


					 		
						</center>
					 	</div>
					 	<div class="col-sm-8">
					 	<div class="row">
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">First Name</label>
								<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Staff ID</label>
								<input type="text" class="form-control" id="stafid" name="staffid" placeholder="Staff ID">
							</div>
						</div><br />
						<div class="row">
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Other Names</label>
								<input type="text" class="form-control" id="onames" name="onames" placeholder="Other Names">
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Date of Employment</label>
								<input type="date" class="form-control" id="doe" name="doe" placeholder="Date of Employment">
							</div>
						</div><br />
						<div class="row">
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Surname</label>
								<input type="text" class="form-control" id="sname" name="sname" placeholder="Surname">
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Department</label>
								<select class="form-control" id="department" name="department">
									<option value="">Select Department</option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div>
						<br />
						<div class="row">
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Gender</label>
								<select class="form-control" id="gender" name="gender">
									<option value="">Select Gender</option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Designation</label>
								<select class="form-control" id="designation" name="designation">
									<option value="">Select Designation</option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div><br />
						<div class="row">
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Date of Birth</label>
								<input type="date" class="form-control" id="dob" name="dob">
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Office</label>
								<select class="form-control" id="designation" name="designation">
									<option value="">Select Office</option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div><br /><div class="row">
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Email Address</label>
								<input type="email" class="form-control" id="inputFirstName" placeholder="Email Address">
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Account Number</label>
								<input type="number" class="form-control" id="accountnumber" placeholder="Account Number">
							</div>
						</div><br /><div class="row">
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Phone Number</label>
								<input type="text" class="form-control" id="phonenumber" placeholder="Phone Number">
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Bank Name</label>
								<input type="bankname" class="form-control" id="bankname" placeholder="Bank Name">
							</div>
						</div><br />
						<div class="row">
						 	<div class="col-sm-6">
								
							</div>
						 	<div class="col-sm-6 text-right float-right">
								<button class="btn btn-info" type="submit">Submit</button>
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
<!--end page wrapper -->
@include("layouts.app-footer")