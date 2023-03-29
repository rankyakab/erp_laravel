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
					 
					 	<div class="col-sm-12">
					 		<label for="inputFirstName" class="form-label">Memo Title</label>
							<p class="form-control" name="title">{{ memo[0]->title }}</p>
					 	</div><br />
					 	<div class="col-sm-12">
					 	<div class="row g-3">
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Memo Recipient</label>
								<p class="form-control" name="title">{{ memo[0]->sendto }}</p>
							</div>
						 	<div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Memo CC</label>
								<p class="form-control" name="title">{{ memo[0]->copies }}</p>
							</div>
						</div>
					</div>
					 	<div class="col-sm-12">
					 		<label for="inputFirstName" class="form-label">Memo Body</label>
							<p class="form-control" name="title">{{ memo[0]->body }}</p>
								
					 	</div>
					 	@if(!empty(memo[0]->attachment))
					 	<div class="col-sm-12">
						 	<iframe src="{{ asset(memo[0]->sendto) }}" width="100%" height="1000px"></iframe>
						</div>
						@endif<br /><br />
						<div class="col-sm-12" style="margin-top: 50px;">
					 		
							<p id="signature"><imp src="{{ asset(app\Http\Controllers\Controller::staffsignature(memo[0]->sentfrom)) }}" width="50px"></p>
							<p id="sender"><b>@php echo app\Http\Controllers\Controller::staffname(memo[0]->sentfrom)) @endphp</b></p>
								
					 	</div>
					 
					 </div>
				  </div>
			  </div>
		   </div>
		</div>

		@if(memo[0]->sentfrom != Auth::user()->profileid)
		<form class="row g-3" action="memoreaction" id="memoreaction" method="post">
		<div class="card" style="padding-bottom: 30px;">
					<div class="card-body">
						<div class="card-header">
							<h4 class="mb-0">Memo Status</h4>
						</div>
						<hr/>
						<input type="hidden" name="id" value="{{ memo[0]->id }}">
						<input type="hidden" name="sentfrom" value="{{ memo[0]->sentfrom }}">
						<input type="hidden" name="title" value="{{ memo[0]->title }}">
					<div class="col-sm-12">
						<div class="row g-3">
						 	<div class="col-sm-3">
						 		<label for="inputFirstName" class="form-label">Status</label>
								<select name="sendto" id="status" class="form-control">
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
		</form>
		@endif

		<div class="card" style="padding-bottom: 30px;">
					<div class="card-body">
						<div class="card-header">
							<h4 class="mb-0">Memo Trail</h4>
						</div>
						<hr/>
				@foreach($memotrails as $memotrail)
					@if($memotrail[0]->actor_type == "Sender")
					<div class="col-sm-12">
						<div class="row g-3">
						 	<div class="col-sm-12">
						 		<h5>{{ $memotrail[0]->title }}</h5>
						 		<p>{{ $memotrail[0]->body }}</p>
						 		@if(!empty($memotrail[0]->attachment))<a href="{{ $memotrail[0]->attachment }}" class="btn btn-primary"> Download Attachment</a>@endif
						 		<br /><br />
						 		<p id="signature"><imp src="{{ asset(app\Http\Controllers\Controller::staffsignature($memotrail[0]->actor)) }}" width="50px"></p>
								<p id="sender"><b>@php echo app\Http\Controllers\Controller::staffname($memotrail[0]->actor)) @endphp</b></p>
								<p>{{ $memotrail[0]->created_at }}</p>
							</div>
						</div>
					</div><br /><br /><hr /><br /><br />
					@else
					<div class="col-sm-12">
						<div class="row g-3">
						 	<div class="col-sm-12">
						 		<h5>@if($memotrail[0]->status != 'Pending Approval') <button class="btn btn-warning px-5">{{ $memotrail[0]->status }}</button> @elseif($memotrail[0]->status != 'Approved') <button class="btn btn-success px-5">{{ $memotrail[0]->status }}</button> @elseif($memotrail[0]->status != 'Rejected') <button class="btn btn-danger px-5">{{ $memotrail[0]->status }}</button> 
										@else <button class="btn btn-primary px-5 convertuser">{{ $memotrail[0]->status }}</button> 
										@endif</h5>
						 		<p>{{ $memotrail[0]->remark }}</p>
						 		<br /><br />
						 		<p id="signature"><imp src="{{ asset(app\Http\Controllers\Controller::staffsignature($memotrail[0]->actor)) }}" width="50px"></p>
								<p id="sender"><b>@php echo app\Http\Controllers\Controller::staffname($memotrail[0]->actor)) @endphp</b></p>
								<p>{{ $memotrail[0]->created_at }}</p>
							</div>
						</div>
					</div><br /><br /><hr /><br /><br />
					@endif
					@endif
				@endforeach
					<br /><br />
					</div>
				</div>
	</div>
</div>
<!--end page wrapper -->
@include("layouts.app-footer")