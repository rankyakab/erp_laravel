@include("layouts.app-title")
<body>
@include("layouts.app-sidebar")
@include("layouts.app-header")
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<div class="row">
		       <div class="col-12 col-lg-12">
		          <div class="card radius-10">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<div>
							<h4 class="mb-0">Add New Department</h4>
						</div>
					</div>
				</div>
				  <div class="card-body">
				  	<div class="form-body">
					 <form class="row g-2">
					 	<div class="col-sm-8">

					 		<input type="text" name="departments" id="departments" class="form-control" placeholder="Enter Designation">
						
					 	</div>
					 	<div class="col-sm-4">
								<button class="btn btn-info" type="submit">Submit</button>
						</div>
					 </form>
					 </div>
				  </div>
			  </div>
		   </div>
		</div>

		<div class="card">
					<div class="card-body">
						<div class="card-title">
							<h4 class="mb-0">Available Departments</h4>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Breakpoint</th>
										<th>Class infix</th>
										<th>Dimensions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>X-Small</td>
										<td><em>None</em>
										</td>
										<td>&lt;576px</td>
									</tr>
									<tr>
										<td>Small</td>
										<td><code>sm</code>
										</td>
										<td>≥576px</td>
									</tr>
									<tr>
										<td>Medium</td>
										<td><code>md</code>
										</td>
										<td>≥768px</td>
									</tr>
									<tr>
										<td>Large</td>
										<td><code>lg</code>
										</td>
										<td>≥992px</td>
									</tr>
									<tr>
										<td>Extra large</td>
										<td><code>xl</code>
										</td>
										<td>≥1200px</td>
									</tr>
									<tr>
										<td>Extra extra large</td>
										<td><code>xxl</code>
										</td>
										<td>≥1400px</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
	</div>
</div>
<!--end page wrapper -->
@include("layouts.app-footer")