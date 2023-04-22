<x-layout>
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Procurement</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0" style="background-color: transparent;">
								<li class="breadcrumb-item"><a href="/procurements"><i class="bx bx-copy"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"> {{$procurement->item}}  Request Page</li>
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
                                                <h4 class="mb-0">{{$procurement->item}}  Request Details</h4>
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
                                <form method="POST" action="/procurement/{{$procurement->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button  class="btn btn-danger" id="delete-task" onclick="return confirm('Are you sure you want to delete this task?')">
                                         Delete<i class='bx bxs-trash'></i> 
                                    </button>
                                </form>
                              
                            </div>
                            <div class="col-lg-10 ">
                                @php
                                 
                                    echo " <p class='text-warning'><i class='bx bx-stats '></i>{$procurement->status}</p>";
                                   

                                @endphp

                                 
                            </div>
                            </div>
                             <div class="row">
                                    <div class="col-lg-2">
                                        <p>Item Image:</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                      
                             
                                        
                                        
                                           
                                                    
                                            <img 
                                            src="@if(!is_null($procurement->attachment)){{ asset($procurement->attachment)}} @else {{ asset('assets/images/default-avatar.png') }} @endif" 
                                            class="user-img" alt="user avatar">
                                           
                                        
                                    </div>
                            </div>
                             
                             <div class="row">
                                    <div class="col-lg-2">
                                        <p>Request Item Name:</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                          <p>{{$procurement->item}} </p>
                                    </div>
                            </div>
                             <div class="row">
                                    <div class="col-lg-2">
                                        <p>Quantity</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                          <p>{{$procurement->amount}} </p>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-lg-2">
                                        <p>Unit Price:</p>
                                    </div>
                                    <div class="col-lg-10">
                                          <p> N {{$procurement->unit_price}}</p>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-lg-2">
                                        <p> Date:</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                          <p>  {{$procurement->date}}</p>
                                    </div>
                            </div>
                        
                          
                            
                            <div class="row">
                                    <div class="col-lg-2">
                                        <p>Requested By:</p>
                                    </div>
                                    <div class="col-lg-10">
                                            <p>  {{$procurement->requestedBy->name}}</p>

                                    </div>
                            </div>
                         <div class="row">
                                    <div class="col-lg-2">
                                        <p>Total Amount price:</p>
                                    </div>
                                    <div class="col-lg-10">
                                            <p>  {{$procurement->sentTo->name}}</p>

                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-lg-2">
                                        <p>Request Status:</p>
                                    </div>
                                    <div class="col-lg-10">
                                            <p>  {{$procurement->status}}</p>

                                    </div>
                            </div>
                           

                    
               
                              <div class="row">
                                
                       
                       <div class="col-lg-2">
                               
                                    
                               <p>Attachment? </p>
                              
                            </div>
                            <div class="col-lg-10 ">
                                @if(!is_null($procurement->attachment)){{ "Yes"}} @else {{ "No" }} @endif
                       
                                 
                            </div>
                                <div class="col-lg-2">
                               
                                    
                               <p>Edit:</p>
                              
                            </div>
                            <div class="col-lg-10 ">
                                <a href="/procurement/edit/{{$procurement->id}}">
                                <button  class="btn btn-warning" id="delete-task" >
                                         Edit<i class='bx bx-edit'></i>
                                    </button>
                                </a>
                                 
                            </div>
                            </div>
       
               
                        </div>
                
             
       
       
                              
       
                    </div>
 </div>
		
	</div>
</div>
<!--end page wrapper -->
				



</x-layout>