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
							<input type="text" class="form-control" id="title" name="title" placeholder="Memo Title">
					 	</div><br />
					 	<div class="col-sm-12">
					 	<div class="row g-3">
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">PV Recipient</label>
								<select name="sendto" id="sendto" class="form-control">
									<option value="">Select Recipient</option>
								</select>
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">PV CC</label>
								<select data-placeholder="Begin typing a name to filter..." multiple class=" form-control" name="test">
								    
								    <option>American Black Bear</option>
								    <option>Asiatic Black Bear</option>
								    <option>Brown Bear</option>
								    <option>Giant Panda</option>
								    <option>Sloth Bear</option>
								    <option>Sun Bear</option>
								    <option>Polar Bear</option>
								    <option>Spectacled Bear</option>
								  </select>
							</div>
						</div>
					</div>
					 	<div class="col-sm-12">
					 		<label for="inputFirstName" class="form-label">Memo Body</label>
							<textarea class="form-control" id="body" name="body" placeholder="Memo Body"></textarea>
								
					 	</div>

					 	
					 	<div class="col-sm-12" style="margin-top: 20px;">
						<div class="row g-3">
						 	<div class="col-sm-6">
								<input type="file" name="attachment" class="form-control" accept=".pdf" placeholder="Select Attachment">
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
								<div class="col-sm-2 text-right float-right">
									<svg id="addsheet" class="vouchericon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M11 17h2v-4h4v-2h-4V7h-2v4H7v2h4v4Zm1 5q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Zm0-2q3.35 0 5.675-2.325T20 12q0-3.35-2.325-5.675T12 4Q8.65 4 6.325 6.325T4 12q0 3.35 2.325 5.675T12 20Zm0-8Z"/></svg>

									<svg id="minussheet" class="vouchericon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2M7 13h10v-2H7"/></svg>
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
									<td><input type="text" class="form-control" id="description[]" name="description[]" placeholder="Description"></td>
									<td><input type="text" class="form-control" id="qty[]" name="qty[]" placeholder="0"></td>
									<td><input type="text" class="form-control" id="price[]" name="price[]" placeholder="0.00"></td>
									<td><p class="form-control" id="amount[]">0.00</p>
						 			<input type="hidden" class="form-control" id="amounts[]" name="amounts[]" placeholder="0.00"></td>
									<td><input type="text" class="form-control" id="vatp[]" name="vatp[]" placeholder="0.00"></td>
									<td><p class="form-control" id="amount[]">0.00</p>
						 			<input type="hidden" class="form-control" id="vata[]" name="vata[]" placeholder="0.00"></td>
									<td><p class="form-control" id="amount[]">0.00</p>
						 			<input type="hidden" class="form-control" id="gross[]" name="gross[]" placeholder="0.00"></td>
									<td><input type="text" class="form-control" id="whtp[]" name="whtp[]" placeholder="0.00"></td>
									<td><p class="form-control" id="amount[]">0.00</p>
						 			<input type="hidden" class="form-control" id="whta[]" name="whta[]" placeholder="0.00"></td>
									<td><p class="form-control" id="amount[]">0.00</p>
						 			<input type="hidden" class="form-control" id="net[]" name="net[]" placeholder="0.00"></td>
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
							<input type="text" class="form-control" id="title" name="title" placeholder="Type Net Amount in Words">
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
						 	<div class="col-sm-3">
						 		<label for="inputFirstName" class="form-label">Bank Name</label>
								<select name="sendto" id="sendto" class="form-control">
									<option value="">Select Bank</option>
								</select>
							</div>
							<div class="col-sm-3">
						 		<label for="inputFirstName" class="form-label">Account Number</label>
								<input type="text" name="remark" maxlength="10" class="form-control" placeholder="Account Number">
							</div>
							<div class="col-sm-4">
						 		<label for="inputFirstName" class="form-label">Account Name</label>
								<input type="text" name="remark" class="form-control" placeholder="Account Number">
							</div>
						 	<div class="col-sm-2 text-right float-right" style="padding-top: 25px;">
						 		<label for="inputFirstName" class="form-label"></label>
								<button class="btn btn-info" type="submit">Submit PV</button>
							</div>
						</div>
					</div><br /><br />
					</div>
				</div>

</div>
<!--end page wrapper -->
@include("layouts.app-footer")
@include("process.paymentvoucher")