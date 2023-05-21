<x-layout>
<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				
						<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3" style="padding: 20px;">
							<div class="breadcrumb-title pe-3">Stocks</div>
							<div class="ps-3">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><a href="/stocks"><i class="bx bx-user"></i></a>
										</li>
										<li class="breadcrumb-item " aria-current="page">Stock Records</li>
									</ol>
								</nav>
							</div>
		
						</div>
		
						<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4" style="padding: 20px;">
							<div class="col">
								<div class="card radius-10 border-warning border-start border-0 border-4">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div>
												<h4 class="my-1 text-warning">{{ $categories}}</h4>
												<p class="mb-0">Categories</p>
												
											</div>
											<div class="text-warning ms-auto font-35">
												<i class='bx bxs-category'></i>
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
												<h4 class="my-1 text-primary">{{$stocks->count()}}</h4>
												<p class="mb-0">Total Items</p>
												
											</div>
											<div class="text-primary ms-auto font-35"><i class='bx bx-sitemap'></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col">
								<div class="card radius-10  border-danger border-start border-0 border-4">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div>
												
												<h4 class="text-danger my-1">{{number_format($low)}}</h4>
												<p class="mb-0">Items low in stock</p>
											</div>
											<div class="text-danger ms-auto font-35"><i class='bx bx-line-chart-down' ></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card radius-10  border-danger border-start border-0 border-4">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div>
												
												<h4 class="text-danger my-1">{{number_format($sum)}}</h4>
												<p class="mb-0">All stock Quantiy</p>
											</div>
											<div class="text-danger ms-auto font-35"><i class='bx bx-line-chart-down' ></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!--end row-->

					
					
				<div class="card">
                    <div class="col-12 col-lg-12">
                        <div class=" radius-10">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h4 class="mb-0">Generate Stock Report</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-body">
                                    <form class="row g-2" method="POST" action="reportstock" >
                                        @csrf
                                        <div class="col-sm-6">
                                           
                                            <select name="stock_id" id="stock_id" class="form-control" required>
                                                <option value="" selected disabled>Select Stock</option>
                                                @foreach($stocks as $stock)
                                        
                                                <option value="{{ $stock->id }}">{{ $stock->name }}</option>
                                            
                                                @endforeach
                                            </select>
                                        
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="month" name="search_date" id="amount" class="form-control" placeholder="Select Month" required>
                                        
                                        </div>
                                        <div class="col-sm-2 float-right text-right">
                                                <button class="btn btn-info" type="submit" id="button">Generate Report</button>
                                                <img src="{{ asset('assets/images/processing.gif') }}" width="50px;" id="processing" class="processing" style="display: none;">
                                        </div>
                                    </form>
                                    </div>
                                </div>
                        </div>
		            </div>
		        </div>
                <br />
                @if($report=="")
                <div class="card">
                    <div class="col-12 col-lg-12">
                        <div class=" radius-10">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h4 class="mb-0"> Stock Report</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                            <div class="col-lg-6 col-sm-12" style="padding: 30px;">
                                            
                                                    <div class="row my-3">
                                                                <div class="col-lg-8">
                                                                    <p>Total Stock Item:</p>
                                                                </div>
                                                                <div class="col-lg-4 ">
                                                                    <p><b>{{number_format($stocks->count())}} </b></p>
                                                                </div>
                                                    </div>
                                                     <div class="row my-3">
                                                                <div class="col-lg-8">
                                                                    <p>Total Stock Quantity:</p>
                                                                </div>
                                                                <div class="col-lg-4 ">
                                                                    <p><b>{{number_format($sum)}} </b></p>
                                                                </div>
                                                    </div>
                                            </div>
                                             <div class="col-lg-6 col-sm-12" style="padding: 30px;">
                                            
                                                    <div class="row my-3">
                                                                <div class="col-lg-8">
                                                                    <p>Total Stock Disbursed:</p>
                                                                </div>
                                                                <div class="col-lg-4 ">
                                                                    <p><b>{{number_format($disburseAmount)}} </b></p>
                                                                </div>
                                                    </div>
                                                     <div class="row my-3">
                                                                <div class="col-lg-8">
                                                                    <p>Total Restock item:</p>
                                                                </div>
                                                                <div class="col-lg-4 ">
                                                                    <p><b>{{number_format($restockAmount)}} </b></p>
                                                                </div>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                        </div>
		            </div>
		        </div>
                <br />


   
				<div class="card" >
					
						<div class="card-body" style="padding: 20px;">
							<div class="card-title">
								<x-flash-message />
								<h4 class="mb-0"><b>All Stock Activities</b> </h4>
							</div>
							<hr/>
							<div class="table-responsive">
                
                       
            
           

								<table id="example" class="table table-striped" style="width:100%">
									<thead>
										<tr  style="background-color: #0000ff; color: #fff">
											<th>s/n</th>
											<th>Stock Name</th>
											<th>Acted by</th>
                                            <th>Action</th>
											<th>Requested By</th>
											<th>QTY</th>
											<th>Date</th>
											
										
										</tr>
									</thead>
									<tbody>
										@unless (count($activities)==0)
											
												@foreach($activities as $key => $activity)
											@php
                                            $stockname = "";
                                            $acted_by="";
                                            $requested_by = "";
                                            if( is_null($activity->stock )){
															$stockname =  "NA";
														}else {
															
															$stockname=$activity->stock->name ;
														}

                                                        if( is_null($activity->actor )){
															$acted_by= "NA";
														}else {
															
															$acted_by= $activity->actor->name ;
														}

                                                        if( is_null($activity->request) ||  is_null($activity->request->requester)){
															$requested_by =  "NA";
														}else {
															
															$requested_by=$activity->request->requester->name ;
														}

												

												@endphp 
												
												<tr>
													<td>{{ $key+1}} </td>
                                                    <td>{{  $stockname }}</td>
													<td>{{ $acted_by }}</td>
                                                    <td>{{$activity->action}}</td>
												     <td>{{ $requested_by }}</td>
													<td>{{ number_format($activity->qty) }}</td>
                                                 
                                                    <td>{{$activity->action_date}}</td>
													
													
												</tr>
											
												@endforeach
										@else
										<p>No Stocks found</p>
										@endunless
									</tbody>
								</table>
							


							</div>
							
						</div>
					
				</div>
                @endif

                @if($report!="")
                 <div class="card">
                    <div class="col-12 col-lg-12">
                        <div class=" radius-10">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h4 class="mb-0"><b> {{$report->name}}  Stock Report for the month of {{$month}} - {{$year}}</b></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                            
                                             <div class="col-lg-6 col-sm-12" style="padding: 30px;">
                                            
                                                    <div class="row my-3">
                                                                <div class="col-lg-8">
                                                                    <p><b>Total {{$report->name}} Stock Disbursed: </b></p>
                                                                </div>
                                                                <div class="col-lg-4 ">
                                                                    <p><b>{{number_format($disburseAmount)}} </b></p>
                                                                </div>
                                                    </div>
                                                     <div class="row my-3">
                                                                <div class="col-lg-8">
                                                                    <p><b>Total  Restock of  {{$report->name}}: </b></p>
                                                                </div>
                                                                <div class="col-lg-4 ">
                                                                    <p><b>{{number_format($restockAmount)}} </b></p>
                                                                </div>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="table-responsive">
                
                       
            
           

								<table id="example" class="table table-striped" style="width:100%">
									<thead>
										<tr  style="background-color: #0000ff; color: #fff">
											<th>s/n</th>
											<th>Stock Name</th>
											<th>Acted by</th>
                                            <th>Action</th>
											<th>Requested By</th>
											<th>QTY</th>
											<th>Date</th>
											
										
										</tr>
									</thead>
									<tbody>
										@unless (count($activities)==0)
											
												@foreach($activities as $key => $activity)
											@php
                                            $stockname = "";
                                            $acted_by="";
                                            $requested_by = "";
                                            if( is_null($activity->stock )){
															$stockname =  "NA";
														}else {
															
															$stockname=$activity->stock->name ;
														}

                                                        if( is_null($activity->actor )){
															$acted_by= "NA";
														}else {
															
															$acted_by= $activity->actor->name ;
														}

                                                        if( is_null($activity->request) ||  is_null($activity->request->requester)){
															$requested_by =  "NA";
														}else {
															
															$requested_by=$activity->request->requester->name ;
														}

												

												@endphp 
												
												<tr>
													<td>{{ $key+1}} </td>
                                                    <td>{{  $stockname }}</td>
													<td>{{ $acted_by }}</td>
                                                    <td>{{$activity->action}}</td>
												     <td>{{ $requested_by }}</td>
													<td>{{ number_format($activity->qty) }}</td>
                                                 
                                                    <td>{{$activity->action_date}}</td>
													
													
												</tr>
											
												@endforeach
										@else
										<p>No Stocks found</p>
										@endunless
									</tbody>
								</table>
							


							</div>
                                    </div>
                                </div>
                        </div>
		            </div>
		        </div>
                <br />

                @endif
                
				</div>
		</div>

</x-layout>