@include("layouts.app-title")
<body>
@include("layouts.app-sidebar")
@include("layouts.app-header")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Task</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0" style="background-color: transparent;">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-copy"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Task</li>
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
							@php $projects = app\Http\Controllers\Controller::projectdetail($task[0]->projectid) @endphp
							<h4 class="mb-0">Edit Task Assigned to the Project: {{ $projects[0]->title }}</h4>
						</div>
						<!--<div class="dropdown ms-auto">
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
						</div>-->
					</div>
				</div>
				  <div class="card-body" style="padding-top: 30px;">
				  	<div class="form-body">
					 <form class="row g-3" action="submitedittask" id="submitedittask" method="post" enctype="multipart/form-data">
					 	@csrf
					 	<input type="hidden" name="projectid" value="{{ $projects[0]->id }}">
					 	<input type="hidden" name="taskid" value="{{ $task[0]->id }}">
					 	<div class="col-sm-12">
					 		<label for="inputFirstName" class="form-label">Task Name <span class="required" >*</span></label>
							<input type="text" class="form-control" id="taskname" name="taskname" value="{{ $task[0]->taskname }}" maxlength="225" required>
					 	</div><br />
					 	<div class="col-sm-12">
					 	<div class="row g-3">
							<div class="col-sm-4">
								<label for="inputFirstName" class="form-label">Assignees <span class="required" >*</span></label>
								<select data-placeholder="Begin typing a name to filter..." multiple class=" form-control" name="assignees[]" required>
									@php $assignees = explode(",", $task[0]->assignees) @endphp
									<option value=""></option>
								    @foreach($staffs as $staff)
								    @if(Auth::user()->name != $staff->firstname.' '.$staff->surname.' '.$staff->othername)
								    @if($staff->id != 1)
								    @if(in_array($staff->id, $assignees))
								    <option value="{{ $staff->id }}" selected>{{ $staff->firstname.' '.$staff->surname.' '.$staff->othername }}</option>
								    @else
								    <option value="{{ $staff->id }}">{{ $staff->firstname.' '.$staff->surname.' '.$staff->othername }}</option>
								    @endif
								    @endif
								    @endif
								    @endforeach
								  </select>
							</div>
						 	<div class="col-sm-2">
								<label for="inputFirstName" class="form-label">Start Date <span class="required" >*</span></label>
								<input type="date" class="form-control" id="startdate" name="startdate" max="{{ $projects[0]->enddate }}" min="{{ date('Y-m-d') }}" value="{{ $task[0]->startdate }}">
							</div>
						 	<div class="col-sm-2">
								<label for="inputFirstName" class="form-label">End Date <span class="required" ></span></label>
								<input type="date" class="form-control" id="enddate" name="enddate" max="{{ $projects[0]->enddate }}" min="" value="{{ $task[0]->enddate }}">
							</div>
							<div class="col-sm-4">
								<label for="inputFirstName" class="form-label">Priority <span class="required" >*</span></label>
								<select name="priority" class="form-control" required>
									<option>{{ $task[0]->priority }}</option>
									<option>Low</option>
									<option>Medium</option>
									<option>High</option>
								</select>
							</div>
						</div>
					</div>
					 	<div class="col-sm-12">
					 		<label for="inputFirstName" class="form-label">Task Description <span class="required" >*</span></label>
							<textarea class="form-control" id="body" name="description" placeholder="Brief description of the project" style="height: 200px;" maxlength="5000">{{ $task[0]->description }}</textarea>
					 	</div>
					 	<div class="col-sm-12">
						<div class="row g-3">
						 	<div class="col-sm-6">
						 		<label for="inputFirstName" class="form-label">Replace Attachment</label>
								<input type="file" id="pics" name="attachment" class="form-control" accept=".pdf" placeholder="Select Attachment">
							</div>
						 	<div class="col-sm-6 text-right float-right">
								
							</div>
						</div>
					</div>
					@if(!empty($task[0]->attachment))
					 	<div class="col-sm-12" style="margin-top: 10px;">
					 	<button class="btn btn-info" type="button" id="showattachment">Display Attachment</button>
					 	</div><br /><br />
					 	<div class="col-sm-12" id="hideattachment" style="display: none;">
						 	<iframe src="{{ asset($task[0]->attachment) }}" width="100%" height="1000px"></iframe>
						</div>
					@endif
					<br /><br />
					<div class="col-sm-12" style="margin-top: 50px;">
					 		
							<p id="signature"><img src="{{ asset(app\Http\Controllers\Controller::staffsignature(Auth::user()->profileid)) }}" width="150px"></p>
							<p id="sender"><b>{{ app\Http\Controllers\Controller::staffname(Auth::user()->profileid) }}</b><br />
							{{ app\Http\Controllers\Controller::staffdesignation(Auth::user()->profileid) }}</p>
								
					 	</div>
					 	<br /><br />
						<div class="col-sm-12">
						<div class="row g-3">
						 	<div class="col-sm-6">
								
							</div>
						 	<div class="col-sm-6 text-right float-right">
								<button class="btn btn-info" type="submit" id="button">Update</button>
								<img src="{{ asset('assets/images/processing.gif') }}" width="50px;" id="processing" class="processing" style="display: none;">
							</div>
						</div>
					</div><br /><br />
						
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
@include('process.project')