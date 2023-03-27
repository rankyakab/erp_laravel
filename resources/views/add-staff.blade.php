@include("layouts.app-title")
<body>
@include("layouts.app-sidebar")
@include("layouts.app-header")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
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
					 		<div class="col">
								<img src="https://via.placeholder.com/120x120" height="120" alt="..." class="img-fluid rounded-circle">
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
								<input type="text" class="form-control" id="sname" name="sname" placeholder="Jhon">
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
								<input type="email" class="form-control" id="dob" name="dob" placeholder="Jhon">
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Office</label>
								<input type="email" class="form-control" id="inputFirstName" placeholder="Jhon">
							</div>
						</div><br /><div class="row">
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Email Address</label>
								<input type="email" class="form-control" id="inputFirstName" placeholder="Jhon">
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Account Number</label>
								<input type="email" class="form-control" id="inputFirstName" placeholder="Jhon">
							</div>
						</div><br /><div class="row">
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Phone Number</label>
								<input type="email" class="form-control" id="inputFirstName" placeholder="Jhon">
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Bank Name</label>
								<input type="email" class="form-control" id="inputFirstName" placeholder="Jhon">
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