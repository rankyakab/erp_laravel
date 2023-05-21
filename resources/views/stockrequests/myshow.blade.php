<x-layout>
<!--start page wrapper -->
<div class="page-wrapper">
       @php
        $stock_name=null;
        $stock_image= null;
        $stock_category = null;
        $requester=null;
        $treater = null;
           $stock_quantity=null;
        if($stockrequest && !is_null($stockrequest->stock)){
													$stock_name = $stockrequest->stock->name;
													$stock_image= $stockrequest->stock->image;
                                                    $stock_quantity =  $stockrequest->stock->qty_in_stock;
																			}
        if($stockrequest && !is_null($stockrequest->treater)){
													$treater =  $stockrequest->treater->name;
																			}
                                                                
                                                                     
             if($stockrequest && !is_null($stockrequest->stock)&&!is_null($stockrequest->stock->categories)){
													$stock_category = $stockrequest->stock->categories->name;
																			}
												@endphp		
	<div class="page-content">
		<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Stock Request</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0" style="background-color: transparent;">
								<li class="breadcrumb-item"><a href="/mystockrequest"><i class="bx bx-copy"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">  {{ucfirst( $stock_name)}}  Stock request Page</li>
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
                                            <div  class="m-3">
                                                <h4 class="mb-0">Request for {{ucfirst( $stock_name)}} Stock Details</h4>
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
                   
                         <div class="row my-3">
                                       

                                    @if($stockrequest->status=="pending")
                            <div class="col-lg-2">
                                <form method="POST" action="/mystockrequest{{$stockrequest->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button  class="btn btn-danger" id="delete-stock" type="submit" data-src="delete">
                                         Delete<i class='bx bxs-trash'></i> 
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
                                                                if($stockrequest->status=="pending"){
                                                                    echo "<span class='badge bg-warning'>Request Pending Approval</span> ";
                                                                }else if($stockrequest->status=="approved"){
                                                                    echo "<span class='badge bg-success'>Request Approved</span> ";
                                                                } elseif($stockrequest->status=="disbursed") {
                                                                     echo "<span class='badge bg-info'>Request Disbursed</span> ";
                                                           
                                                                } else {
                                                                  echo "<span class='badge bg-danger'>Request Disbursed</span> ";
                                                           
                                                                }
                                                                

                                                                @endphp
                                       
                                        </div>
                                        <x-flash-message />
                                    </div>
                                  </div>

                            </div>

                         </div>

                         <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Item Image:</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                         
                                            <img 
                                            src="@if(!is_null( $stock_image)){{ asset( $stock_image)}} @else {{ asset('assets/images/signature.jpg') }} @endif" 
                                            class="user-img" alt="user avatar">
                                           
                                        
                                    </div>
                        </div>
                             


                         <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Stock Name:</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                          <p><b>{{ucfirst( $stock_name)}} </b></p>
                                    </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-lg-2">
                                <p>Category</p>
                            </div>
                            <div class="col-lg-10 ">
                          
                                    <p><b>{{ucfirst( $stock_category)}}</b> </p>
                            </div>
                       </div>
                        <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Requested By:</p>
                                    </div>
                                    <div class="col-lg-10">
                                          <p> <b> {{$requester}}</b></p>
                                    </div>
                       </div>
                       <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Treated By:</p>
                                    </div>
                                    <div class="col-lg-10">
                                          <p> <b> {{$treater}}</b></p>
                                    </div>
                       </div>
                       <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Treated By:</p>
                                    </div>
                                    <div class="col-lg-10">
                                          <p> <b> {{$stockrequest->treat_comment}}</b></p>
                                    </div>
                       </div>
                       <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Quantity Requested:</p>
                                    </div>
                                    <div class="col-lg-10">
                                          <p> <b> {{number_format($stockrequest->qty_requested)}}</b></p>
                                    </div>
                       </div>
                       <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Purpose of Request:</p>
                                    </div>
                                    <div class="col-lg-10">
                                          <p> <b> {{$stockrequest->purpose}}</b></p>
                                    </div>
                       </div>
                        <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Quantity in Stock:</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                          <p> <b> {{number_format($stock_quantity)}}</b></p>
                                    </div>
                        </div>
                        
                       <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Date of Request:</p>
                                    </div>
                                    <div class="col-lg-10 ">
                                         <p> <b> {{ucfirst($stockrequest->request_date)}}</b></p>
                              
                                    </div>
                        </div>
                        <div class="row my-3">
                                                <div class="col-lg-2">
                                                    <p>Approval Commnet:</p>
                                                </div>
                                                <div class="col-lg-10 ">
                                                    <p> <b> {{ucfirst($stockrequest->treat_comment)}}</b></p>
                                        
                                                </div>
                                    </div>
                           
                       <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Date of Approval :</p>
                                    </div>
                                    <div class="col-lg-10">
                                            <p><b> 
                                          {{ is_null($stockrequest->approval_date)?"--":$stockrequest->approval_date}}</b></p>

                                     </div>
                        </div>
                    
               
                         <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Date of Rejection :</p>
                                    </div>
                                    <div class="col-lg-10">
                                            <p> <b> {{is_null($stockrequest?->decline_date)?"--": $stockrequest?->decline_date}} </b></p>

                                    </div>
                        </div>
                        
                        
                         <div class="row my-3">
                                    <div class="col-lg-2">
                                        <p>Date of Disbursment :</p>
                                    </div>
                                    <div class="col-lg-10">
                                            <p> <b> {{is_null($stockrequest?->disburse_date)?"--": $stockrequest?->disburse_date}} </b></p>

                                    </div>
                        </div>
 

                           @if($stockrequest->status=="pending")
                        
                                        <div class="row my-5">
                                        <div class="col-lg-2">
                                        
                                                
                                        <p>Edit:</p>
                                        
                                        </div>
                                        <div class="col-lg-10 ">
                                            <a href="/mystockrequestedit{{$stockrequest->id}}">
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


//	import swal from 'sweetalert';
	//Adding bank into the system
$("form").on("submit",function(event) {
    event.preventDefault(); // prevent the form from submitting
     $("#delete-stock").hide();
	$("#processing").show();
    var dataSrc = $('#delete-stock').data('src');
if(dataSrc == "delete"){
    var title = 'Are you sure you want to Delete this Request?';
}
   
	
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-danger',
    cancelButton: 'btn btn-success'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: title,
  text: "You won't be able to revert this Action!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, Delete !',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
	 $(this).unbind('submit').submit();
    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Request Delete in process.',
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
	$("#delete-stock").show();
	$("#processing").hide();
  }
})


});


</script>