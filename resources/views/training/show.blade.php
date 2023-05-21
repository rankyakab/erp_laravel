<x-layout>
<!--start page wrapper -->
<div class="page-wrapper">
     @php
            $requested_by=null;
           

            if($training && !is_null($training->requestedBy)){
                 $requested_by = $training->requestedBy->name;
            }
           
	@endphp 

	<div class="page-content">
		<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Trainng</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0" style="background-color: transparent;">
								<li class="breadcrumb-item"><a href="/trainings"><i class="bx bx-copy"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"> {{$training->description}}  Request Page</li>
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
                                                <h4 class="mb-0">{{$training->description}}  Request Details</h4>
                                                <p>View details of Training request</p>
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
                      <x-flash-message />
                        
                             <div class="row my-3">
                                       

                                    @if($training->status=="to-do" && $training->requested_by == Auth::user()->profileid)
                                        <div class="col-lg-2">
                                            <form method="POST" action="/training/{{$training->id}}" name='delete'>

                                                @csrf
                                                @method('DELETE')
                                                <button  class="btn btn-danger" id="delete-budget" type="submit" data-src="delete">
                                                    Delete <i class='bx bxs-trash'></i> 
                                                </button>
                                                <img src="{{ asset('assets/images/processing.gif') }}" width="50px;" id="processing" class="processing" style="display: none;">
                                
                                            </form>
                                        
                                        </div>

                                    @endif
    

                                    <div class="col-lg-10 ">
                                        <div class="card">
                                            <div class="card-body">
                                                
                                                <div class="status mb-3">
                                                    
                                                                @php
                                                                
                                                                    if($training->status=="to-do"){
                                                                            echo "<span class='badge bg-warning'>ToDo</span> ";
                                                                        }else if($training->status=="rejected"){
                                                                            echo "<span class='badge bg-danger'>Rejected</span> ";
                                                                        }else if ($training->status=="approved") {
                                                                            echo "<span class='badge bg-success'>Approved</span> ";
                                                                        }
                                                              
                                                                @endphp
                                                                
                                                                
                                    
                                                </div>
                                            
                                            </div>
                                        </div>

                                    </div>

                           </div>
                           <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Training Description:</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                         
                                            <p><b>{{$training->description}}</b><p>

                                           
                                        
                                    </div>
                        </div>
                             
                          
                             
                            
                        
                              <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Training Type</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                           <p> <b> {{$training->training_type}} </b></p>

                                    </div>
                            </div>
                            <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Training Date:</p>
                                    </div>
                                    <div class="col-lg-10">
                                            <p> <b> {{date('Y-m-d', strtotime($training->training_date))}}</b></p>

                                    </div>
                            </div>
                            <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Training Duration</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                           <p> <b> {{number_format($training->duration)}} </b></p>

                                    </div>
                            </div>
                           
                           
                            
                           
                            <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Training Mode:</p>
                                    </div>
                                    <div class="col-lg-10">
                                            <p> <b> {{$training->training_mode}}</b></p>

                                    </div>
                            </div>
                             <div class="row my-3">
                                    <div class="col-lg-2">
                                      <p> <b> Trainee(s):</b></p>
                                    </div>
                             </div>
                             <div class="row my-3">
                                   
                                        @php 
                                        $trainees =  explode(',', $training->trainees);
                                    
                                         
                                        @endphp
                                        
                                                    @foreach($trainees as $assign)
                                                  
                                             <div class="col-md-2 ">
                                            <img 
                                            src="@if(!is_null(DB::table('profile')->where('id', $assign)->pluck('image')[0])){{ DB::table('profile')->where('id', $assign)->pluck('image')[0] }} @else {{ asset('assets/images/default-avatar.png') }} @endif" 
                                            class="user-img" alt="user avatar">
                                            <p>{{DB::table('profile')->where('id', $assign)->pluck('surname')[0]}} </p>
                                             </div>
                                            @endforeach
                                   
                            </div>
                             <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Requested By:</p>
                                    </div>
                                    <div class="col-lg-10">
                                            <p> <b> {{$requested_by}}</b></p>

                                    </div>
                            </div>

                        @if($training->status=="to-do")
                            
                           
                            <div class="row">
                                    <div class="col-lg-2">
                                        <p>Request Status:</p>
                                    </div>
                                    <div class="col-lg-10">
                                             <span class='badge bg-warning'>To-Do</span> 
                                               
                                    </div>
                            </div>

                            @endif
                         
                                                @if(!is_null($training->decline_date))
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <p>Request Status:</p>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <span class='badge bg-danger'>Rejected</span> 
                                                    </div>
                                              </div>
                                                <div class="row my-3">
                                                            <div class="col-lg-2">
                                                                <p>Date of Rejection :</p>
                                                            </div>
                                                            <div class="col-lg-10">
                                                                    <p> <b> {{is_null($training->decline_date)?"--": $training->decline_date}} </b></p>

                                                            </div>
                                                </div>
                                                @endif
                                              @if($training->status=="approved" &&  date('Y-m-d') < date('Y-m-d', strtotime($training->training_date)) )
                                              <div class="row">
                                                    <div class="col-lg-2">
                                                        <p>Request Status:</p>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <span class='badge bg-success'>Approved</span> 
                                                    </div>
                                              </div>
                                                <div class="row my-3">
                                                            <div class="col-lg-2">
                                                                <p>Date of Approval :</p>
                                                            </div>
                                                            <div class="col-lg-10">
                                                                    <p> <b> {{is_null($training->approval_date)?"--": $training->approval_date}} </b></p>

                                                            </div>
          
                                                </div>
                                                @endif
                                                 @if($training->status == "approved" && date('Y-m-d') >= date('Y-m-d', strtotime($training->training_date)) )
                                                <div class="row my-3">
                                                            <div class="col-lg-2">
                                                                <p>Status</p>

                                                            </div>
                                                            <div class="col-lg-10">
                                                                    <p> <b> <span class='badge bg-success'>Ongoing</span> </b></p>

                                                            </div>
                                                </div>
                                                @endif

                            @if(Auth::user()->profileid== $training->requested_by && $training->status=="to-do")
                        
                                    <div class="row my-3">
                                    
                            
                                        <div class="col-lg-2">
                                    
                                            
                                        <p>Edit:</p>
                                    
                                        </div>
                                        <div class="col-lg-10 ">
                                            <a href="/edittraining{{$training->id}}">
                                            <button  class="btn btn-warning" id="delete-task" >
                                                    Edit<i class='bx bx-edit'></i>
                                                </button>
                                            </a>
                                            
                                        </div>
                                    </div>
                         @endif
                                                 
                                        

                    
                    
               
                        </div>
                
             
       
       
                              
       
                    </div>
       </div>

     
		
	</div>
</div>
<!--end page wrapper -->
				



</x-layout>


<script>

$("form[name='delete']").submit(function(event) {
    event.preventDefault(); // prevent the form from submitting
     $("#button").hide();
	$("#processing").show();
	
			const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger'
			},
			buttonsStyling: false
			})

			swalWithBootstrapButtons.fire({
			title: 'Are you sure you want to Delete this  Training Request?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Yes, Delete !',
			cancelButtonText: 'No, cancel!',
			reverseButtons: true
			}).then((result) => {
			if (result.isConfirmed) {
				$(this).unbind('submit').submit();
				swalWithBootstrapButtons.fire(
				'Deleting Budget Request',
				'...',
				''
				)
			} else if (
				/* Read more about handling dismissals below */
				result.dismiss === Swal.DismissReason.cancel
				
			) {
				swalWithBootstrapButtons.fire(
				'Cancelled',
				'You Cancelled this Operation :)',
				'error'
				)
				$("#button").show();
				$("#processing").hide();
			}
			})


});

</script>