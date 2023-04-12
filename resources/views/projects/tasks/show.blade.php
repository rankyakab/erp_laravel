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
								<li class="breadcrumb-item"><a href="/project/{{$task->project->id}}"><i class="bx bx-copy"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">This is a task that is meant to be done on  {{$task->project->name}} Project</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
    


          <div class="row">
                <div class="col-lg-12 col-sm-12">
                   
                    <div class="card" style="padding-bottom: 30px;">
                          
                                <div class=" radius-10">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h4 class="mb-0">{{$task->name}} Task on  {{$task->project->name}} Project</h4>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                           
                     </div>
                </div>
             
         </div>


        <div class="card" style="padding-bottom: 30px;">
          <div class="row">
                <div class="col-lg-12 col-sm-12" style="padding: 30px;">
                   
                          <div class="row">
                            <div class="col-lg-2">
                                <form method="POST" action="/project/task/{{$task->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button  class="btn btn-danger" id="delete-task" onclick="return confirm('Are you sure you want to delete this task?')">
                                         Delete<i class='bx bxs-trash'></i> 
                                    </button>
                                </form>
                              
                            </div>
                            <div class="col-lg-10 ">
                                @php
                                   if($task->status=='backlog'){
                                    echo " <p class=''><i class='bx bx-stats '></i>{$task->status}</p>";
                                   }
                                   if($task->status=='ongoing'){
                                    echo " <p class='text-warning'><i class='bx bx-stats '></i>{$task->status}</p>";
                                   }
                                   if($task->status=='completed'){
                                    echo " <p class='text-success'><i class='bx bx-stats text-success'></i>{$task->status}</p>";
                                   }

                                @endphp

                                 
                            </div>
                            </div>
                             <div class="row">
                                    <div class="col-lg-2">
                                        <p>Asssignee:</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                        @php 
                                        $assignees =  explode(',', $task->assignee);
                             
                                        @endphp
                                        
                                                    @foreach($assignees as $assign)
                                                    
                                            <img 
                                            src="@if(!is_null(DB::table('profile')->where('id', $assign)->pluck('image')[0])){{ DB::table('profile')->where('id', $assign)->pluck('image')[0] }} @else {{ asset('assets/images/default-avatar.png') }} @endif" 
                                            class="user-img" alt="user avatar">
                                           
                                            @endforeach
                                    </div>
                            </div>
                              @php
											$startDate = \Carbon\Carbon::parse($task->start_date);
											$endDate = \Carbon\Carbon::parse($task->end_date);

											$numberOfDays = $endDate->diffInDays($startDate);


											@endphp 
                             <div class="row">
                                    <div class="col-lg-2">
                                        <p>Task Duration:</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                          <p>{{$numberOfDays}} Days <i class='bx bxs-calendar'></i></p>
                                    </div>
                            </div>
                             <div class="row">
                                    <div class="col-lg-2">
                                        <p>Start Date:</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                          <p>{{$task->start_date}} <i class='bx bxs-calendar'></i></p>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-lg-2">
                                        <p>Due Date:</p>
                                    </div>
                                    <div class="col-lg-10">
                                          <p>{{$task->end_date}} <i class='bx bxs-calendar'></i></p>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-lg-2">
                                        <p>Priority:</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                          <p> <button class="btn default"><i class='bx bxs-circle'></i> {{$task->priority}}</button></p>
                                    </div>
                            </div>
                            @if($task->status != 'completed')
                            <div class="row">
                                    <div class="col-lg-2">
                                        <p>Change Task Status:</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                      <form method="POST" action="/project/move/task/{{$task->id}}">
                                        
                                       @csrf
                                        @method('PUT ')
                                    <input name="status" value="{{$task->status}}" hidden/>
                                      
								  @error('status')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                        @enderror
                                   
                                    <button  class="btn btn-warning" id="move-task" type="submit">
                                         Change<i class='bx bxs-chevrons-right' ></i>
                                    </button>
                                </form>
                              
                                    </div>
                            </div>
                            @endif
                            <div class="row">
                                    <div class="col-lg-2">
                                        <p>Task Description:</p>
                                    </div>
                                    <div class="col-lg-10">
                                          	<textarea class="form-control" id="description" name="description" placeholder="Details of tasks, requirements, salary, etc" style="height: 10fr;" disabled>{{$task->description}}</textarea>
							

                                    </div>
                            </div>
                        
                            <div class="row">
                                   <hr/>
                                    <div class="col-lg-2">
                                        <p>Comment:</p>
                                    </div>
                                    <div class="col-lg-10">
                                        	<div class="form-body">
                                                <form class="row g-3" action="/project/task/{{$task->id}}" id="submitproject" method="POST" >
                                                    @csrf
                                                     @method('PUT ')
                                                     <div class="col-sm-12  float-left">
                                                	<textarea class="form-control" id="comment" name="comment" placeholder="Enter Comment here" style="height: 200px;">{{old('comment')}}</textarea>
                                                     </div>
                                                     <input name="id" value="{{Auth::user()->profileid}}" hidden/>
                                                    <div class="col-sm-1 text-right float-left">
                                                        <button class="btn btn-info" type="submit" id="button">Submit</button>
                                                        <img src="{{ asset('assets/images/processing.gif') }}" width="50px;" id="processing" class="processing" style="display: none;">
                                                    </div>
                                                </form>
                                                </div>
                                    </div>
                            </div>

                    
                </div>
                  <div class="col-lg-12 col-sm-12">
                    <h4> Comment Trail </h4>
                    <hr/>
                    @php
                    $assignees =  explode(',', $task->comment);
                  //  dd($assignees);
                    foreach($assignees as $assign){
                        if($assign != ""){
                       
                       
                          
                                $comment =  explode('*', $assign);
                           
                                     $commenter = DB::table('profile')->where('id',  $comment[1])->get();

                                echo "   <div class='chat-content-leftside'>
							<div class='d-flex'>
								<img src='".asset($commenter[0]->image)."' width='48' height='48' class='rounded-circle' alt=''>
								<div class='flex-grow-1 ms-2'>
									<p class='mb-0 chat-time'>{$commenter[0]->surname} {$commenter[0]->firstname}</p>
									<p class='chat-left-msg'>{$comment[0]}</p>
								</div>
							</div>
						</div>";
                       
                  
                        }
                    }
                   
                    @endphp
                      
                     
                </div>
             
             
         </div>
 </div>
		
	</div>
</div>
<!--end page wrapper -->
				



</x-layout>