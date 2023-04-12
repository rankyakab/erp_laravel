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
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-copy"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"> Task to be meat to be done on  {{$project->name}} Project</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
          <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <h1> Task to be meat to be done on  {{$project->name}} Project</h1>
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
                                        
                                    </div>
                                </div>
                           
                     </div>
                </div>
               
          
         </div>

		
	</div>
</div>
<!--end page wrapper -->
				


</x-layout>