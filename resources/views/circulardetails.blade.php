@include("layouts.app-title")
<body>
@include("layouts.app-sidebar")
@include("layouts.app-header")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Circulars</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0" style="background-color: transparent;">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-copy"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Create New Circular</li>
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
							<h4 class="mb-0">Circular Details</h4>
						</div>
						<div class="dropdown ms-auto">
							<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="javascript:;">Edit Circular</a>
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
					 		<label for="inputFirstName" class="form-label">Circular Title</label>
							<p class="form-control" name="title">{{ $circular[0]->title }}</p>
					 	</div><br />
					 	<div class="col-sm-12">
					 	<div class="row g-3">
						 	<div class="col-sm-12">
								<label for="inputFirstName" class="form-label">Circular Recipient</label>

								@php $recipients = explode( ",", $circular[0]->sendto) @endphp
								@php $count = count($recipients) @endphp
								{{ $count }}
								<p class="form-control" name="title">
									@for($i=0; $i<$count; $i++)
									{{ app\Http\Controllers\Controller::staffname($recipients[$i]) }},
									@endfor
								</p>
							</div>
						</div>
					</div>
					 	<div class="col-sm-12">
					 		<label for="inputFirstName" class="form-label">Circular Body</label>
							<p class="form-control" name="title">{{ $circular[0]->body }}</p>
								
					 	</div>
					 	@if(!empty( $circular[0]->attachment ))
					 	<div class="col-sm-12">
						 	<iframe src="{{ asset($circular[0]->attachment) }}" width="100%" height="1000px"></iframe>
						</div>

						@endif
						<br /><br />
						<div class="col-sm-12" style="margin-top: 50px;">
					 		
							<p id="signature"><img src="{{ asset(app\Http\Controllers\Controller::staffsignature($circular[0]->sentform)) }}" width="150px"></p>
							<p id="sender"><b>@php echo app\Http\Controllers\Controller::staffname($circular[0]->sentform) @endphp</b></p>
								
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
							<h4 class="mb-0">Circular Status</h4>
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