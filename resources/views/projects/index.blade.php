<x-layout>
<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Projects</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item " aria-current="page">Project Records</li>
							</ol>
						</nav>
					</div>
					<!--<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>-->
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">ALl Project Table</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>s/n</th>
                                        <th>Name</th>
										<th>Type</th>
										<th>Status</th>
										<th>Duration</th>
										<th>Budget</th>
										<th>Expenditure</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @unless (count($projects)==0)
                                        
                                            @foreach($projects as $key => $project)
										  @php
											$startDate = \Carbon\Carbon::parse($project->start_date);
											$endDate = \Carbon\Carbon::parse($project->end_date);

											$numberOfDays = $endDate->diffInDays($startDate);


											@endphp 
                                            
                                            <tr>
                                                <td><a href="/project/{{$project->id}}">{{ $key+1}}  </a></td>
                                                <td>{{ $project->name}}</td>
                                                <td>{{ $project->type }}</td>
                                                <td>{{ $project->status }}</td>
                                                <td>{{ $numberOfDays }}</td>
                                                <td>{{ $project->budget }}</td>
                                                <td>{{ $project->expenditure }}</td>
                                                <td><a href="/project/{{$project->id}}"><i class='bx bxs-show text-lg'></i><br/>View</a></td>
                                                </tr>
                                          
                                            @endforeach
                                    @else
                                    <p>No Project found</p>
                                    @endunless
								</tbody>
							</table>
                           
						</div>
                        
					</div>
				</div>
                <div class=" mt-6 p-4">
                          
                </div>


</x-layout>