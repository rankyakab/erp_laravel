<x-layout>
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Task</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0" style="background-color: transparent;">
								<li class="breadcrumb-item"><a href="/project/{{$project->id}}"><i class="bx bx-copy"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Create New Task for {{$project->name}}</li>
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
							<h4 class="mb-0">Create  Task</h4>
						</div>

					</div>
				</div>
				  <div class="card-body" style="padding-top: 30px;">
				  	<div class="form-body">
					 <form class="row g-3" action="/itask/store" id="submittask" method="POST" >
					 	@csrf

					 	<div class="row">
                             <div class="col-sm-6">
					 		<label for="name" class="form-label">Task Name </label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Project Name" required>
                            @error('name')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                             @enderror
					 	   </div>
                           <div class="col-sm-6">
					 			<label for="inputFirstName" class="form-label">Task Description</label>
							<textarea class="form-control" id="description" name="description" placeholder="Details of tasks, requirements, salary, etc" style="height: 10fr;">{{old('description')}}</textarea>
							

								  @error('description')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                        @enderror
					 	   </div>
                          
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
								<label for="inputFirstName" class="form-label">Assignee(s)</label>
								<select data-placeholder="Begin typing a name to filter..." multiple class=" form-control" name="assignee[]">
									<option value=""></option>
								    @foreach($staffs as $staff)
								    @if(Auth::user()->name != $staff->firstname.' '.$staff->surname.' '.$staff->othername)
								    @if($staff->id != 1)
								    <option value="{{ $staff->id }}">{{ $staff->firstname.' '.$staff->surname.' '.$staff->othername }}</option>
								    @endif
								    @endif
								    @endforeach
								  </select>
							</div>
                        
                          
                        </div>
					 	<div class="row">
                           <input type="text" class="form-control" id="name" name="project_id" value="{{$project->id}}" hidden >
						 	<div class="col-sm-6">
								<label for="start_date" class="form-label">Start Date <small style="color:#ff0000">*</small></label>
								@php $today = date('Y-m-d') @endphp
								@php $date = strtotime($today.' -15 year') @endphp
								<input type="date" class="form-control" id="dob" name="start_date" required max="{{ date('Y-m-d', $date) }}">
                                 @error('start_date')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                             @enderror
							</div>
						 	<div class="col-sm-6">
								<label for="end_date" class="form-label">End Date <small style="color:#ff0000">*</small></label>
								@php $today = date('Y-m-d') @endphp
								@php $date = strtotime($today.' -15 year') @endphp
								<input type="date" class="form-control" id="dob" name="end_date" required >
							</div>
                           
						</div>
                        
                        <br />
					 	<div class="row">
                            <div class="col-sm-12">
					 	
								
					 	</div>


                         

                        </div>
					
					 	<br /><br />
						<div class="col-sm-12">
						<div class="row g-3">
						 	<div class="col-sm-6">
								
							</div>
						 	<div class="col-sm-6 text-right float-right">
								<button class="btn btn-info" type="submit" id="button">Add Task</button>
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
				


</x-layout>