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
								<li class="breadcrumb-item"><a href="/projects"><i class="bx bx-copy"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"> Task for {{$project->name}}</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
       <div class="card" style="padding: 30px;">         
          <div class="row">
                <div class="col-lg-4 col-sm-12">
                <div class="card-body">
								<h5 class="card-title">Project Name</h5>
								<h4 class="card-text">{{$project->name}}</h4>
				</div>
                </div>
                 <div class="col-lg-2 col-sm-12">
                         <div class="card-body">
								<h5 class="card-title">Project Status</h5>
								<h4 class="card-text">{{$project->status}}</h4>
							</div>
                </div>
                <div class="col-lg-2 col-sm-12">
                         <div class="card-body">
                            @php
                            $startDate = \Carbon\Carbon::parse($project->start_date);
                            $endDate = \Carbon\Carbon::parse($project->end_date);

                            $numberOfDays = $endDate->diffInDays($startDate);


                            @endphp 
								<h5 class="card-title">Project duration</h5>
								<h4 class="card-text">{{$numberOfDays}}</h4>
							</div>
                </div>
                 <div class="col-lg-2 col-sm-12">
                         <div class="card-body">
								<h5 class="card-title">Project Start Date</h5>
								<h4 class="card-text">{{$project->start_date}}</h4>
							</div>
                </div>
                <div class="col-lg-2 col-sm-12">
                         <div class="card-body">
								<h5 class="card-title">Project End Date</h5>
								<h4 class="card-text">{{$project->end_date}}</h4>
							</div>
                </div>
            </div>

        <div class="row mt-5">
                        <div class="col-lg-8 col-sm-12">
                                <div class="card-body">
                                        <h5 class="card-title">Description</h5>
                                    <p class="card-text mt-2">{{$project->description}}</p>
                                </div>
                    </div>
                     <div class="col-lg-4 col-sm-12">
                            <div class="card">
                                    <div class="card-body">
                                       
                                    </div>
                            </div>
                     </div>
        </div>
          <div class="row">
                <div class="col-lg-12 col-sm-12" style="padding: 30px;">
                   
                          <div class="row">
                            <div class="col-lg-2">
                                <form method="POST" action="/project/{{$project->id}}" id="my-form">
                                    @csrf
                                    @method('DELETE')
                                    <button  class="btn btn-danger">
                                         Delete<i class='bx bxs-trash'></i> 
                                    </button>
                                </form>
                              
                            </div>
                          </div>
                </div>
          </div>
    </div>



          <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <h1>Backlog</h1>
                    <div class="card" style="padding-bottom: 30px;">
                          
                                <div class=" radius-10">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h4 class="mb-0">Backlog</h4>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="card-body" style="padding-top: 30px;">
                                           @unless (count($project->tasks)==0)
                                        
                                            @foreach($project->tasks as $key => $task)
                                                @if ( $task->status=='backlog')
                                                    <div class="form-group row  " >
                                                        <a href="/task/{{$task->id}}/show">
                                                        <div class="col-sm-12 p-3 mb-2  text-darkradius-3 radius-10" style="background-color: #1434A4; color:#fff;">
                                                        <p> {{$task->name}} <i class='bx bx-dots-vertical'></i></p>
                                                        
                                                        
                                                       
                                                        </div>
                                                         </a>

                                                        
                                                
                                                </div>
                                                @endif

                                                 
                                              @endforeach
                                            @else
                                            <p>No Backlog Task for Project</p>
                                            @endunless

                                            <p>  <a href="/project/{{$project->id}}/task/create">+ Add Task </a> </p>
                               
                                    </div>
                                </div>
                           
                     </div>
                </div>
               
                <div class="col-lg-4 col-sm-12">
                    <h1 class="text-warning">Ongoing</h1>
                    <div class="card" style="padding-bottom: 30px;">
                          
                                <div class=" radius-10">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h4 class="mb-0 text-warning" >Ongoing</h4>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="card-body" style="padding-top: 30px;">
                                        <!--
                                        <div class="form-group row">
                                                <div class="col-sm-2">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="exampleCheckbox">
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-sm-7">
                                                    <textarea class="form-control" id="description" name="description" placeholder="Details of tasks, requirements, salary, etc" disabled></textarea>
                                                </div>
                                                <div class="col-sm-2">
                                                    <button type="submit" class="btn btn-primary">
                                                    <i class='bx bxs-send' ></i>
                                                    </button>
                                                </div>
                                         </div>
                                        -->

                                           @unless (count($project->tasks)==0)
                                           @php
                                                $ongoing_count=0;
                                              @endphp
                                            @foreach($project->tasks as $key => $task)
                                                @if ( $task->status=='ongoing')
                                                    @php
                                                        $ongoing_count++;
                                                    @endphp

                                                     <div class="form-group row  " >
                                                        <a href="/task/{{$task->id}}/show">
                                                        <div class="col-sm-12 p-3 mb-2  text-darkradius-3 radius-10 bg-warning" style=" color:#000;">
                                                        <p> {{$task->name}} <i class='bx bx-dots-vertical'></i></p>
                                                        
                                                        
                                                       
                                                        </div>
                                                         </a>

                                                        
                                                
                                                </div>
                                                @endif

                                                 
                                              @endforeach
                                                   @if ( $ongoing_count==0)
                                                  <p>No Ongoing Task for Project</p>
                                                @endif
                                                
                                            @else
                                           <p>No Ongoing Task for Project</p>
                                            @endunless
                                    </div>
                                </div>
                           
                     </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <h1 class="text-success">Completed</h1>
                    <div class="card" style="padding-bottom: 30px;">
                          
                                <div class=" radius-10">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h4 class="mb-0 text-success">Completed</h4>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="card-body" style="padding-top: 30px;">
                                          @unless (count($project->tasks)==0)
                                           @php
                                                $completed_count=0;
                                              @endphp
                                            @foreach($project->tasks as $key => $task)
                                                @if ( $task->status=='completed')
                                                    @php
                                                        $completed_count++;
                                                    @endphp

                                                        <div class="form-group row  " >
                                                        <a href="/task/{{$task->id}}/show">
                                                        <div class="col-sm-12 p-3 mb-2  text-darkradius-3 radius-10 bg-success" style=" color:#000;">
                                                        <p> {{$task->name}} <i class='bx bx-dots-vertical'></i></p>
                                                        
                                                        
                                                       
                                                        </div>
                                                         </a>

                                                        
                                                
                                                </div>
                                                @endif

                                                 
                                              @endforeach
                                                   @if ( $ongoing_count==0)
                                                  <p>No Completed Task for Project</p>
                                                @endif
                                                
                                            @else
                                           <p>No Completed Task for Project</p>
                                            @endunless

                                    </div>
                                </div>
                           
                     </div>
                </div>
         </div>

		
	</div>
</div>
<!--end page wrapper -->
				


</x-layout>
<script>
    $(document).ready(function() {
        $('#my-form').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to Delete this Project?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, Delete'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    });
</script>

