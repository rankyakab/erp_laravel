@include("layouts.app-title")
<body>
@include("layouts.app-sidebar")
@include("layouts.app-header")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Memo</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0" style="background-color: transparent;">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-copy"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Create New Memo</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="card" style="padding-bottom: 30px;">
		       <div class="col-12 col-lg-12">
		          <div class=" radius-10">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<div>
							<h4 class="mb-0">Memo Details</h4>
						</div>
						<div class="dropdown ms-auto">
							<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="javascript:;">Edit Memo</a>
								</li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="javascript:;">Back to Dashboard</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				  <div class="card-body">
				  	<div class="form-body">
					 <form class="row g-3">
					 	<div class="col-sm-12">
					 		<label for="inputFirstName" class="form-label">Memo Title</label>
							<p class="form-control" name="title">Memo Title</p>
					 	</div><br />
					 	<div class="col-sm-12">
					 	<div class="row g-3">
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Memo Recipient</label>
								<p class="form-control" name="title">Memo Recipient</p>
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Memo CC</label>
								<p class="form-control" name="title">Memo CCs</p>
							</div>
						</div>
					</div>
					 	<div class="col-sm-12">
					 		<label for="inputFirstName" class="form-label">Memo Body</label>
							<p class="form-control" name="title">Memo Body</p>
								
					 	</div>
					 	<div class="col-sm-12">
						 	<iframe src="{{ asset('assets/attachments/Adoption, Implementation and Application of IPSAS in Nigeria-1.pdf') }}" width="100%" height="1000px"></iframe>
						</div><br /><br />
						<div class="col-sm-12" style="margin-top: 50px;">
					 		
							<p id="signature">signature</p>
							<p id="sender"><b>Memo Sender</b></p>
								
					 	</div>
					 </form>
					 </div>
				  </div>
			  </div>
		   </div>
		</div>


		<div class="card" style="padding-bottom: 30px;">
					<div class="card-body">
						<div class="card-header">
							<h4 class="mb-0">Memo Status</h4>
						</div>
						<hr/>
					<div class="col-sm-12">
						<div class="row g-3">
						 	<div class="col-sm-3">
						 		<label for="inputFirstName" class="form-label">Status</label>
								<select name="sendto" id="sendto" class="form-control">
									<option value="">Select Recipient</option>
								</select>
							</div>
							<div class="col-sm-8">
						 		<label for="inputFirstName" class="form-label">Remark</label>
								<input type="text" name="remark" class="form-control" placeholder="Remark">
							</div>
						 	<div class="col-sm-1 text-right float-right">
						 		<label for="inputFirstName" class="form-label"><br /></label>
								<button class="btn btn-info" type="submit">Submit</button>
							</div>
						</div>
					</div><br /><br />
					</div>
				</div>

		<div class="card" style="padding-bottom: 30px;">
					<div class="card-body">
						<div class="card-header">
							<h4 class="mb-0">Memo Trail</h4>
						</div>
						<hr/>
					<div class="col-sm-12">
						<div class="row g-3">
						 	<div class="col-sm-3">
						 		<label for="inputFirstName" class="form-label">Status</label>
								<select name="sendto" id="sendto" class="form-control">
									<option value="">Select Recipient</option>
								</select>
							</div>
							<div class="col-sm-8">
						 		<label for="inputFirstName" class="form-label">Remark</label>
								<input type="text" name="remark" class="form-control" placeholder="Remark">
							</div>
						 	<div class="col-sm-1 text-right float-right">
						 		<label for="inputFirstName" class="form-label"><br /></label>
								<button class="btn btn-info" type="submit">Submit</button>
							</div>
						</div>
					</div><br /><br />
					</div>
				</div>
	</div>
</div>
<!--end page wrapper -->
@include("layouts.app-footer")