@include("layouts.app-title")
<body>
@include("layouts.app-sidebar")
@include("layouts.app-header")
<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">DataTable Example</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Name</th>
										<th>Department</th>
										<th>Designation</th>
										<th>Office</th>
										<th>Start date</th>
										<th>System Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($staffs as $staff)
									<tr>
										<td>{{ $staff->firstname.' '.$staff->surname.' '.$staff->othername}}</td>
										<td>{{ $staff->department }}</td>
										<td>{{ $staff->designation }}</td>
										<td>{{ $staff->office }}</td>
										<td>{{ $staff->doe }}</td>
										<td>@if(app\Http\Controllers\Controller::checkuser($staff->id)[0]->status != 'Active') <button class="btn btn-warning px-5">Suspended</button> @elseif(app\Http\Controllers\Controller::checkuser($staff->id)->count() == 1) <button href="{{ url('staffprofile?id='.$staff->id) }}" class="btn btn-primary px-5">User</button> @else <button class="btn btn-danger px-5 convertuser" id="{{ $staff->id }}">Convert User</button> @endif</td>
										<td><a href="{{ url('staffprofile?id='.$staff->id) }}" class="btn btn-dark px-5">View Details</a></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>


@include("layouts.app-footer")
@include("process.staffprofile")
