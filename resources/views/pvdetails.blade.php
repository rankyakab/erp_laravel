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
								<li class="breadcrumb-item active" aria-current="page">Payment Voucher Details</li>
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
					 
					 	<div class="col-sm-12">
					 		<label for="inputFirstName" class="form-label">PV Title</label>
							<p class="form-control" id="title">{{ $pvs[0]->title }}</p>
					 	</div><br />
					 	<div class="col-sm-12">
					 	<div class="row g-3">
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">PV Recipient</label>
								<p class="form-control" id="pvrecipient">{{ $pvs[0]->sendto }}</p>
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">PV CC</label>
								<p class="form-control" id="pvcc">{{ $pvs[0]->copies }}</p>
							</div>
						</div>
					</div>
					 	<div class="col-sm-12">
					 		<label for="inputFirstName" class="form-label">Memo Body</label>
							<p class="form-control" id="pvrecipient">{{ $pvs[0]->body }}</p>
								
					 	</div>

					 	@if(!empty(pvs[0]->attachment))
					 	<div class="col-sm-12" style="margin-top: 20px;" id="attachbutton">
						<div class="row g-3">
						 	<div class="col-sm-6">
								<a href="#" class="btn btn-primary">PV Attachment</a>
							</div>
						 	<div class="col-sm-6 text-right float-right">
								
							</div>
						</div>
					</div><br /><br />


					 	<div class="col-sm-12" style="display: none;" id="showattachment">
						 	<iframe src="{{ asset(memo[0]->sendto) }}" width="100%" height="1000px"></iframe>
						</div>
						@endif
						
					 
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
								@php $x=1 @endphp
								@foreach($vsheets as $vsheet)
								<tr>
									<td><p id="sn">{{ $x++ }}</p></td>
									<td><p id="description[]">{{ $vsheet->description }}</p></td>
									<td><p id="qty[]">{{ $vsheet->qty }}</p></td>
									<td><p id="price[]">{{ $vsheet->unitprice }}</p></td>
									<td><p id="amount[]">{{ $vsheet->amount }}</p>
									<td><p id="vatp[]">{{ $vsheet->vatpercent }}</p></td>
									<td><p id="amount[]">{{ $vsheet->vatamount }}</p></td>
									<td><p id="amount[]">{{ $vsheet->grossamount }}</p></td>
									<td><p id="whtp[]">{{ $vsheet->whtpercent }}</p></td>
									<td><p id="amount[]">{{ $vsheet->whtamount }}</p></td>
									<td><p id="amount[]">{{ $vsheet->netamount }}</p></td>
								</tr>
								@endforeach
							</tbody>
							<tfoot>
								<tr>	
							 		<th class="tdsn"><b></b></th>
							 		<th class="tdds"><b>Total</b></th>
							 		<th class="tdqt"><b></b></th>
							 		<th class="tdpr"><b>{{ $pvs[0]->totalprices }} </b></th>
							 		<th class="tdam"><b>{{ $pvs[0]->totalamounts }} </b></th>
							 		<th class="tdva"><b></b></th>
							 		<th class="tdvt"><b>{{ $pvs[0]->totalvats }}</b></th>
							 		<th class="tdgr"><b>{{ $pvs[0]->totalgrosses }} </b></th>
							 		<th class="tdwh"><b></b></th>
							 		<th class="tdwt"><b>{{ $pvs[0]->totalwhts }} </b></th>
							 		<th class="tdnt"><b>{{ $pvs[0]->totalnets }} </b></th>


							</tfoot>
						</table>
					</div>
						</div>
						<div class="col-sm-12">
					 		<label for="inputFirstName" class="form-label">Net Amount in Words</label>
							<p class="form-control" id="title">{{ $pvs[0]->amountinwords }}</p>
					 	</div><br />
					</div>
					<br /><br />
						<div class="col-sm-12" style="margin-top: 50px;">
					 		
							<p id="signature"><imp src="{{ asset(app\Http\Controllers\Controller::staffsignature(pvs[0]->sentfrom)) }}" width="50px"></p>
							<p id="sender"><b>@php echo app\Http\Controllers\Controller::staffname(pvs[0]->sentfrom)) @endphp</b></p>
								
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
								<p class="form-control" id="title">{{ $pvs[0]->bankname }}</p>
							</div>
							<div class="col-sm-4">
						 		<label for="inputFirstName" class="form-label">Account Number</label>
								<p class="form-control" id="title">{{ $pvs[0]->accountnumber }}</p>
							</div>
							<div class="col-sm-4">
						 		<label for="inputFirstName" class="form-label">Account Name</label>
								<p class="form-control" id="title">{{ $pvs[0]->accountname }}</p>
							</div>
						</div>
					</div><br /><br />
					</div>
				</div>

				<form class="row g-3" action="submitpvstatus" id="submitpvstatus" method="post">
					@csrf
					<input type="hidden" name="pvid" value="{{ $pvs[0]->id }}">
					<input type="hidden" name="sentfrom" value="{{ $pvs[0]->sentfrom }}">
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
								<select name="status" id="status" class="form-control">
									<option value="">Select Status</option>
								</select>
							</div>
							<div class="col-sm-8">
						 		<label for="inputFirstName" class="form-label">Remark</label>
								<input type="text" name="remark" class="form-control" placeholder="Remark">
							</div>
						 	<div class="col-sm-1 text-right float-right">
						 		<label for="inputFirstName" class="form-label"><br /></label>
								<button class="btn btn-info" type="submit" id="button">Submit</button>
								<img src="{{ asset('assets/images/processing.gif') }}" width="50px;" id="processing" class="processing" style="display: none;">
							</div>
						</div>
					</div><br /><br />
					</div>
				</div>
				</form>

				<div class="card" style="padding-bottom: 30px;">
					<div class="card-body">
						<div class="card-header">
							<h4 class="mb-0">PV Trail</h4>
						</div>
						<hr/>
					@foreach($pvtrails as $pvtrail)
					<div class="col-sm-12">
						<div class="row g-3">
							<div class="col-sm-2">
						 		<label for="inputFirstName" class="form-label">Date</label>
								<p>{{ $pvtrail->created_at }}</p>
							</div>
						 	<div class="col-sm-2">
						 		<label for="inputFirstName" class="form-label">Status</label>
						 		@if($pvtrail->status == "Pending Approval")
								<button type="button" class="btn btn-warning btn-sm">{{ $pvtrail->status }}</button>
								@elseif($pvtrail->status == "Approved")
								<button type="button" class="btn btn-primary btn-sm">{{ $pvtrail->status }}</button>
								@elseif($pvtrail->status == "Paid")
								<button type="button" class="btn btn-success btn-sm">{{ $pvtrail->status }}</button>
								@elseid($pvtrail->status == "Rejected")
								<button type="button" class="btn btn-danger btn-sm">{{ $pvtrail->status }}</button>
								@else
								<button type="button" class="btn btn-info btn-sm">{{ $pvtrail->status }}</button>
								@endif
							</div>
							<div class="col-sm-6">
						 		<label for="inputFirstName" class="form-label">Remark</label>
								<p>{{ $pvtrail->status }}</p>
							</div>
						 	<div class="col-sm-2 text-right float-right">
						 		<p><p id="signature"><imp src="{{ asset(app\Http\Controllers\Controller::staffsignature($pvtrail->actor)) }}" width="50px"></p>
							<p id="sender"><b>@php echo app\Http\Controllers\Controller::staffname($pvtrail->actor)) @endphp</b></p></p>
							</div>
						</div>
					</div><br /><br />
					@endforeach
					</div>
				</div>

</div>
<!--end page wrapper -->
@include("layouts.app-footer")
@include("process.paymentvoucher")