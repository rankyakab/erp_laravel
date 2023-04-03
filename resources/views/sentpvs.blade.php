@include("layouts.app-title")
<body>
@include("layouts.app-sidebar")
@include("layouts.app-header")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		
		<div class="card">
					<div class="card-body">
						<div class="card-title">
							<h4 class="mb-0">All Payment Vouchers</h4>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Date</th>
										<th>Title</th>
										<th>Net Amount (&#8358;)</th>
										<th>Created By</th>
										<th>Sent To</th>
										<th>CCs</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($pvs as $pv)
									<tr>
										<td>{{ $pv->created_at }}</td>
										<td>{{ $pv->title }}</td>
										<td>{{ $pv->totalnet }}</td>
										<td>{{ $pv->sentfrom }}</td>
										<td>{{ $pv->sendto }}</td>
										<td>{{ $pv->copies }}</td>
										<td>
											@if($pv->status == "Pending Approval")
											<button type="button" class="btn btn-warning btn-sm">{{ $pv->status }}</button>
											@elseif($pv->status == "Approved")
											<button type="button" class="btn btn-primary btn-sm">{{ $pv->status }}</button>
											@elseif($pv->status == "Paid")
											<button type="button" class="btn btn-success btn-sm">{{ $pv->status }}</button>
											@elseid($pv->status == "Rejected")
											<button type="button" class="btn btn-danger btn-sm">{{ $pv->status }}</button>
											@else
											<button type="button" class="btn btn-info btn-sm">{{ $pv->status }}</button>
											@endif
											</td>
										<td><a href="{{ url('pvdetails?id='.$pv->id) }}" class="btn btn-dark px-5">View More</a></td>
										
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
	</div>
</div>
<!--end page wrapper -->
@include("layouts.app-footer")