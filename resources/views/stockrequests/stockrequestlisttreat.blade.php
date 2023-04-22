<x-layout>
<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Stock Requests Awaiting Action</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><a href="/stocks"><i class="bx bx-user"></i></a>
								</li>
								<li class="breadcrumb-item " aria-current="page">My Stock Request Awaiting Action Records</li>
							</ol>
						</nav>
					</div>

	            </div>
                

                    <div class="card" style="padding: 20px;">
                        <div class="card-body">
                            <div class="row">
                                        <div class="col-sm-6">
                                            
                                            <h6 class="mb-0 text-uppercase">My Stock Request Awaiting Action List </h6>
                                        </div>
                                        <div class="col-sm-6">
                                         </div>
                            </div>


                        </div>
                    </div>
                <br />


   
				<div class="card" style="padding: 20px;">
					<div class="card-body">
                        <div class="card-title">
							<x-flash-message />
							<h4 class="mb-0">All Stocks Request </h4>
						</div>
                        <hr/>
                        @php


                             $mystockrequests = $stockrequests
                        @endphp
                            <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <h1>Pending</h1>
                                        <div class="card" style="padding-bottom: 30px;">
                                            
                                                    <div class=" radius-10">
                                                        <div class="card-header">
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <h4 class="mb-0">Pending</h4>
                                                                </div>

                                                            </div>
                                                        </div>



                                                        <div class="card-body" style="padding-top: 30px;">
                                                            @unless (count($mystockrequests)==0)
                                                            <div class="table-responsive">


                                                                <table id="example" class="table" style="width:100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>s/n</th>
                                                                        <th>Stock Name</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                @foreach($mystockrequests as $key => $request)
                                                                    @if ( $request['status']=='pending')
                                                                        <tr>
                                                                    <td>{{ $key+1}}  </td>
                                                                    <td><a href="/stockrequestlisttreat{{$request->id}}"> <img src ="{{asset($request->stock->image) }}"  width="50px;"/></a> </td>
                                                                    <td>{{ $request->stock->name }}</td>
                                                                        </tr>
                                                                    @endif

                                                                    
                                                                @endforeach
                                                                	</tbody>
                                                                    </table>
                                                                


                                                                </div>
                        
					
                                                                @else
                                                                <p>No Backlog Task for Project</p>
                                                                @endunless

                                                                
                                                
                                                        </div>
                                                    </div>
                                            
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-4 col-sm-12">
                                        <h1 class="text-warning">Approved</h1>
                                        <div class="card" style="padding-bottom: 30px;">
                                            
                                                    <div class=" radius-10">
                                                        <div class="card-header">
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <h4 class="mb-0 text-warning" >Approved</h4>
                                                                </div>

                                                            </div>
                                                        </div>



                                                        <div class="card-body" style="padding-top: 30px;">
                                                          

                                                            @unless (count($mystockrequests)==0)
                                                            @php
                                                                    $ongoing_count=0;
                                                                @endphp
                                                                @foreach($mystockrequests as $key => $request)
                                                                    @if ( $request->status=='approved')
                                                                        @php
                                                                            $ongoing_count++;
                                                                        @endphp

                                                                         <div class="form-group row  " >
                                                                            <a href="/task/{{$request->id}}/show">
                                                                            <div class="col-sm-12 p-3 mb-2  text-darkradius-3 radius-10" style="background-color: #1434A4; color:#fff;">
                                                                            <p> {{$request->stock->name }} <i class='bx bx-dots-vertical'></i></p>
                                                                            
                                                                            
                                                                        
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
                                        <h1 class="text-success">declined</h1>
                                        <div class="card" style="padding-bottom: 30px;">
                                            
                                                    <div class=" radius-10">
                                                        <div class="card-header">
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <h4 class="mb-0 text-success">Declinded</h4>
                                                                </div>

                                                            </div>
                                                        </div>



                                                        <div class="card-body" style="padding-top: 30px;">
                                                            @unless (count($mystockrequests)==0)
                                                            @php
                                                                    $completed_count=0;
                                                                @endphp
                                                                @foreach($mystockrequests as $key => $request)
                                                                    @if ( $request->status=='declined')
                                                                        @php
                                                                            $completed_count++;
                                                                        @endphp

                                                                             <div class="form-group row  " >
                                                                            <a href="/task/{{$request->id}}/show">
                                                                            <div class="col-sm-12 p-3 mb-2  text-darkradius-3 radius-10" style="background-color: #1434A4; color:#fff;">
                                                                            <p> {{$request->stock->name }} <i class='bx bx-dots-vertical'></i></p>
                                                                            
                                                                            
                                                                        
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

            </div>
        </div>
                


</x-layout>