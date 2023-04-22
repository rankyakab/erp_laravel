<x-layout>
<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Logistics</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><a href="/logistics"><i class="bx bx-user"></i></a>
								</li>
								<li class="breadcrumb-item " aria-current="page">Logistics Records</li>
							</ol>
						</nav>
					</div>

				</div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
					<div class="col">
						<div class="card radius-10 border-warning border-start border-0 border-4">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Expenses {{ date('F, Y') }}</p>
										<h4 class="my-1 text-warning">{{ number_format(app\Http\Controllers\Controller::expensesthismonth(), 2) }}</h4>
									</div>
									<div class="text-warning ms-auto font-35">&#8358;
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 border-primary border-start border-0 border-4">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Inflow {{ date('F, Y') }}</p>
										<h4 class="my-1 text-primary">0.00</h4>
									</div>
									<div class="text-primary ms-auto font-35">&#8358;
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 border-danger border-start border-0 border-4">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Expenses {{ date('Y') }}</p>
										<h4 class="my-1 text-danger">{{ number_format(app\Http\Controllers\Controller::expensesthisyear(), 2) }}</h4>
									</div>
									<div class="text-danger ms-auto font-35">&#8358;
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10  border-success border-start border-0 border-4">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Inflow {{ date('Y') }}</p>
										<h4 class="text-success my-1">0.00</h4>
									</div>
									<div class="text-success ms-auto font-35">&#8358;
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--end row-->

                <div class="row">
						 	<div class="col-sm-6">
								
			                	<h6 class="mb-0 text-uppercase">My Logistics Request List </h6>
							</div>
						 	<div class="col-sm-6">
								<a href="/logistic/create"><button class="btn btn-success"> + Add New Logistic Rquest </button> </a>
							</div>
				</div>
                <br />


   



				
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>s/n</th>
                                        <th>Title</th>
										<th>Purpose</th>
										<th>Amount</th>
										<th>Requested By</th>
										<th>Sent to</th>
										<th>Date </th>
										<th>Status</th>
                                        <th>Action</th>
                                        
									</tr>
								</thead>
								<tbody>
                                    @unless (count($logistics)==0)
                                        
                                            @foreach($logistics as $key => $logistic)

										  @php
                                          if($logistic->requested_by != Auth::user()->profileid){
                                            continue;
                                          }

											// $startDate = \Carbon\Carbon::parse($project->start_date);
                                          
										 	// $endDate = \Carbon\Carbon::parse($project->end_date);

											// $numberOfDays = $endDate->diffInDays($startDate);
                         


											@endphp 
                                            
                                            <tr>
                                                <td><a href="/logistic/{{$logistic->id}}">{{ $key+1}}  </a></td>
                                                <td>{{ $logistic->title }}</td>
                                                <td>{{ $logistic->purpose }}</td>
                                                <td>{{ $logistic->amount }}</td>
                                                <td>{{ $logistic->requestedBy->name ?? ""  }}</td>
                                                <td>{{ $logistic->sentTo->name ?? ""}}</td>
                                                <td>{{ $logistic->start_date }}</td>
                                                <td>{{ $logistic->status }}</td>
                                                <td><a href="/logistic/{{$logistic->id}}"><i class='bx bx-movie' style="color:orange;font-size: 3em;"></i></td>
                                                 </tr>
                                          
                                            @endforeach
                                    @else
                                    <p>No Logistic Request found</p>
                                    @endunless
								</tbody>
							</table>
                           
						</div>
                        
					</div>
				</div>
                <div class=" mt-6 p-4">
                          
                </div>


</x-layout>