<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true"  style="background-color: #1434A4;">
			<div class="sidebar-header" style="background-color: #1434A4;">
				<div>
					<img src="{{ asset('assets/images/RELIA-ENERGY-Logo-2020 (1).png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Relia Energy</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{ url('dashboard') }}">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<!--<li class="menu-label">UI Elements</li>-->
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
						</div>
						<div class="menu-title">Memo</div>
					</a>
					<ul>
						<li> <a href="{{ url('creatememo') }}"><i class="bx bx-right-arrow-alt"></i>Create Memo</a>
						</li>
						<li> <a href="{{ url('memoinbox') }}"><i class="bx bx-right-arrow-alt"></i>Memo Inbox</a>
						</li>
						<li> <a href="{{ url('sentmemo') }}"><i class="bx bx-right-arrow-alt"></i>Sent Memo</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Payment Voucher</div>
					</a>
					<ul>
						<li> <a href="{{ url('paymentvoucher') }}"><i class="bx bx-right-arrow-alt"></i>New PV</a>
						</li>
						<li> <a href="{{ url('allpvs') }}"><i class="bx bx-right-arrow-alt"></i>View PV</a>
						</li>
						<!--<li> <a href="content-text-utilities.html"><i class="bx bx-right-arrow-alt"></i>Text Utilities</a>-->
						</li>
					</ul>
				</li>
				
				<!--<li class="menu-label">Addons</li>-->
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-lock"></i>
						</div>
						<div class="menu-title">Circulars</div>
					</a>
					<ul>
						<li> <a href="{{ url('createcircular') }}" target="_blank"><i class="bx bx-right-arrow-alt"></i>Create Circular</a>
						</li>
						<li> <a href="{{ url('listcirculars') }}" target="_blank"><i class="bx bx-right-arrow-alt"></i>View Circular</a>
						</li>
						<!--<li> <a href="authentication-forgot-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Forgot Password</a>
						</li>
						<li> <a href="errors-404-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>404 Error</a></li>
						<li> <a href="error-blank-page.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Blank Page</a>
						</li>-->
					</ul>
				</li>

				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">Staff</div>
					</a>
					<ul>
						<li> <a href="{{ url('addstaff') }}" target="_blank"><i class="bx bx-right-arrow-alt"></i>Create Staff</a>
						</li>
						<li> <a href="{{ url('stafftable') }}" target="_blank"><i class="bx bx-right-arrow-alt"></i>View Staff</a>
						</li>
						<li> <a href="{{ url('usertable') }}" target="_blank"><i class="bx bx-right-arrow-alt"></i>View Users</a>
						</li>
						<!--<li> <a href="errors-404-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>404 Error</a></li>
						<li> <a href="error-blank-page.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Blank Page</a>
						</li>-->
					</ul>
				</li>

				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-video-recording"></i>
						</div>
						<div class="menu-title">Setup</div>
					</a>
					<ul>
						<li> <a href="{{ url('departments') }}" target="_blank"><i class="bx bx-right-arrow-alt"></i>Departments</a>
						</li>
						<li> <a href="{{ url('designations') }}" target="_blank"><i class="bx bx-right-arrow-alt"></i>Designations</a>
						</li>
						<li> <a href="{{ url('offices') }}" target="_blank"><i class="bx bx-right-arrow-alt"></i>Offices</a>
						</li>
						<li> <a href="{{ url('banks') }}" target="_blank"><i class="bx bx-right-arrow-alt"></i>Banks</a></li>
						<!--<li> <a href="error-blank-page.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Blank Page</a>
						</li>-->
					</ul>
				</li>
				<!--<li>
					<a href="charts-chartjs.html">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">Charts</div>
					</a>
				</li>
				<li>
					<a href="table-datatable.html">
						<div class="parent-icon"> <i class="bx bx-video-recording"></i>
						</div>
						<div class="menu-title">Tables</div>
					</a>
				</li>-->
			</ul>
			<!--end navigation-->
			
		</div>
		<!--end sidebar wrapper -->