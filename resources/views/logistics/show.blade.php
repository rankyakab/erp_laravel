<x-layout>
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Logistics</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0" style="background-color: transparent;">
								<li class="breadcrumb-item"><a href="/logistics"><i class="bx bx-copy"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"> {{$logistic->title}}  Request Page</li>
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
                                                <h4 class="mb-0">{{$logistic->title}}  Request Details</h4>
                                                <p>View details of logistic request</p>
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
                                <form method="POST" action="/logistic/{{$logistic->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button  class="btn btn-danger" id="delete-task" onclick="return confirm('Are you sure you want to delete this Logistic request?')">
                                         Delete<i class='bx bxs-trash'></i> 
                                    </button>
                                </form>
                              
                            </div>
                            <div class="col-lg-10 ">
                                @php
                                 
                                    echo " <p class='text-warning'><i class='bx bx-stats '></i>{$logistic->status}</p>";
                                   

                                @endphp

                                 
                            </div>
                            </div>
                             <div class="row">
                                    <div class="col-lg-12">
                                         <h1>{{$logistic->title}}</h1>
                                        
                                    </div>
                            </div>
                             
                             <div class="row">
                                    <div class="col-lg-2">
                                        <p>Purpose:</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                          <p>{{$logistic->purpose}} </p>
                                    </div>
                            </div>
                             <div class="row">
                                    <div class="col-lg-2">
                                        <p>Amount</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                          <p>N {{$logistic->amount}} </p>
                                    </div>
                            </div>
                           
                            
                            <div class="row">
                                    <div class="col-lg-2">
                                        <p>Requested By:</p>
                                    </div>
                                    <div class="col-lg-10">
                                            <p>  {{$logistic->requestedBy->name}}</p>

                                    </div>
                            </div>
                         <div class="row">
                                    <div class="col-lg-2">
                                        <p>Sent To:</p>
                                    </div>
                                    <div class="col-lg-10">
                                            <p>  {{$logistic->sentTo->name}}</p>

                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-lg-2">
                                        <p>Duration:</p>
                                    </div>
                                    <div class="col-lg-10">
                                        <p> 
                                        @php
                                            $date1 = "2007-03-24";
                                        $date2 = "2009-06-26";

                                        $diff = abs(strtotime($logistic->end_date) - strtotime($logistic->start_date));

                                        $years = floor($diff / (365*60*60*24));
                                        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                        printf(" %d months, %d days\n", $months, $days);
                                        @endphp
                                           - {{$logistic->start_date}}-{{$logistic->end_date}}
                                        
                                        </p>

                                    </div>
                            </div>
                           
                            <div class="row">
                                    <div class="col-lg-2">
                                        <p>Request Status:</p>
                                    </div>
                                    <div class="col-lg-10">
                                            <p>  {{$logistic->status}}</p>

                                    </div>
                            </div>
                           

                    
               
                              <div class="row">
                                
                       
                       <div class="col-lg-2">
                               
                                    
                               <p>Attachment? </p>
                              
                            </div>
                            <div class="col-lg-10 ">
                                @if(!is_null($logistic->status)){{ "Yes"}} @else {{ "No" }} @endif
                       
                                 
                            </div>
                                <div class="col-lg-2">
                               
                                    
                               <p>Edit:</p>
                              
                            </div>
                            <div class="col-lg-10 ">
                                <a href="/logistic/edit/{{$logistic->id}}">
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