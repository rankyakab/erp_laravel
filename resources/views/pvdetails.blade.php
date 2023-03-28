@include("layouts.app-title")
<body>
@include("layouts.app-sidebar")
@include("layouts.app-header")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Payment Voucher</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0" style="background-color: transparent;">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-copy"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Create New Payment Voucher</li>
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
							<h4 class="mb-0">Payment Voucher (PV) Info</h4>
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
				  <div class="card-body" style="padding-top: 30px;">
				  	<div class="form-body">
					 <form class="row g-3">
					 	<div class="col-sm-12">
					 		<label for="inputFirstName" class="form-label">PV Title</label>
							<p class="form-control" id="title">PV Title"</p>
					 	</div><br />
					 	<div class="col-sm-12">
					 	<div class="row g-3">
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">PV Recipient</label>
								<p class="form-control" id="pvrecipient">PV Recipient"</p>
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">PV CC</label>
								<p class="form-control" id="pvcc">PV CC"</p>
							</div>
						</div>
					</div>
					 	<div class="col-sm-12">
					 		<label for="inputFirstName" class="form-label">Memo Body</label>
							<p class="form-control" id="pvrecipient">Memo Body"</p>
								
					 	</div>

					 	
					 	<div class="col-sm-12" style="margin-top: 20px;">
						<div class="row g-3">
						 	<div class="col-sm-6">
								<a href="#" class="btn btn-primary">PV Attachment</a>
							</div>
						 	<div class="col-sm-6 text-right float-right">
								
							</div>
						</div>
					</div><br /><br />
						
					 </form>
					 </div>
				  </div>
			  </div>
		   </div>
		</div>


		<div class="card" style="padding-bottom: 30px;">
					<div class="card-body">
						<div class="card-header">
							<div class="row">
								<div class="col-sm-10">
									<h4 class="mb-0">Voucher Sheet</h4>
								</div>
								
							</div>
						</div>
						<hr/>
					<div class="col-sm-12">
						<div class="row g-3">
							<div class="table-responsive">
							<table class="table" style="width:100%">
							<thead>
								<tr>	
							 		<th class="tdsn"><b>SN</b></th>
							 		<th class="tdds"><b>Description</b></th>
							 		<th class="tdqt"><b>QTY</b></th>
							 		<th class="tdpr"><b>Price (&#8358;)</b></th>
							 		<th class="tdam"><b>Amount (&#8358;)</b></th>
							 		<th class="tdva"><b>VAT (%)</b></th>
							 		<th class="tdvt"><b>VAT (&#8358;)</b></th>
							 		<th class="tdgr"><b>Gross (&#8358;)</b></th>
							 		<th class="tdwh"><b>WHT (%)</b></th>
							 		<th class="tdwt"><b>WHT (&#8358;)</b></th>
							 		<th class="tdnt"><b>Net (&#8358;)</b></th>
							</thead>
							<tbody id="sheetdata">
								<tr>
									<td><p id="sn">1</p></td>
									<td><p id="description[]">Description</p></td>
									<td><p id="qty[]">0</p></td>
									<td><p id="price[]">0.00</p></td>
									<td><p id="amount[]">0.00</p>
									<td><p id="vatp[]">0.00</p></td>
									<td><p id="amount[]">0.00</p></td>
									<td><p id="amount[]">0.00</p></td>
									<td><p id="whtp[]">0.00</p></td>
									<td><p id="amount[]">0.00</p></td>
									<td><p id="amount[]">0.00</p></td>
								</tr>

							</tbody>
							<tfoot>
								<tr>	
							 		<th class="tdsn"><b></b></th>
							 		<th class="tdds"><b>Total</b></th>
							 		<th class="tdqt"><b></b></th>
							 		<th class="tdpr"><b>0.00 </b></th>
							 		<th class="tdam"><b>0.00 </b></th>
							 		<th class="tdva"><b></b></th>
							 		<th class="tdvt"><b>0.00</b></th>
							 		<th class="tdgr"><b>0.00 </b></th>
							 		<th class="tdwh"><b></b></th>
							 		<th class="tdwt"><b>0.00 </b></th>
							 		<th class="tdnt"><b>0.00 </b></th>
							</tfoot>
						</table>
					</div>
						</div>
						<div class="col-sm-12">
					 		<label for="inputFirstName" class="form-label">Net Amount in Words</label>
							<p class="form-control" id="title">Type Net Amount in Words</p>
					 	</div><br />
					</div>
				</div>

	</div>


	<div class="card" style="padding-bottom: 30px;">
					<div class="card-body">
						<div class="card-header">
							<h4 class="mb-0">Beneficiary Bank Details</h4>
						</div>
						<hr/>
					<div class="col-sm-12">
						<div class="row g-3">
						 	<div class="col-sm-4">
						 		<label for="inputFirstName" class="form-label">Bank Name</label>
								<p class="form-control" id="title">Bank Name</p>
							</div>
							<div class="col-sm-4">
						 		<label for="inputFirstName" class="form-label">Account Number</label>
								<p class="form-control" id="title">Account Number</p>
							</div>
							<div class="col-sm-4">
						 		<label for="inputFirstName" class="form-label">Account Name</label>
								<p class="form-control" id="title">Account Name</p>
							</div>
						</div>
					</div><br /><br />
					</div>
				</div>

				<div class="card" style="padding-bottom: 30px;">
					<div class="card-body">
						<div class="card-header">
							<h4 class="mb-0">PV Status</h4>
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
							<h4 class="mb-0">PV Trail</h4>
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
<!--end page wrapper -->
@include("layouts.app-footer")
@include("process.paymentvoucher")