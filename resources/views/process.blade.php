@include("layouts.app-title")
<body>
@include("layouts.app-sidebar")
@include("layouts.app-header")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<div class="card">
		       <div class="col-12 col-lg-12">
		          <div class=" radius-10">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<div>
							<h4 class="mb-0">Add New Process</h4>
						</div>
					</div>
				</div>
				  <div class="card-body">
				  	<div class="form-body">
					 <form class="row g-2" method="POST" action="submitprocess" id="submitprocess">
					 	@csrf
					 	<div class="col-sm-5">

					 		<input type="text" name="process" id="process" class="form-control" placeholder="Enter Process" required>
						
					 	</div>
					 	<div class="col-sm-5">

					 		<select name="actions[]" id="actions" multiple class="form-control">
					 			<option></option>
					 			@foreach($actions as $action)
					 			<option value="{{ $action->id }}">{{ $action->action }}</option>
					 			@endforeach
					 		</select>
						
					 	</div>
					 	<div class="col-sm-2">
								<button class="btn btn-info" type="submit" id="button">Submit</button>
								<img src="{{ asset('assets/images/processing.gif') }}" width="50px;" id="processing" class="processing" style="display: none;">
						</div>
					 </form>
					 </div>
				  </div>
			  </div>
		   </div>
		</div>

		<div class="card">
					<div class="card-body">
						<div class="card-title">
							<h4 class="mb-0">Available Processes</h4>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>SN</th>
										<th>Processes</th>
										<th>Actions</th>
										<th>Created At</th>
									</tr>
								</thead>
								<tbody>
									@php $x=1 @endphp
									@foreach($processes as $process)
									<tr>
										<td>{{ $x++ }}</td>
										<td>{{ $process->process }}</td>
										@php $action = explode(",", $process->actions) @endphp
										@php $count = count($action) @endphp
										<td>
										@for($i=0; $i<$count; $i++)
										@php echo app\Http\Controllers\Controller::getaction($action[$i]) @endphp, 
										@endfor
										</td>
										<td>{{ $process->created_at }}</td>
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
@include("process.access-control")