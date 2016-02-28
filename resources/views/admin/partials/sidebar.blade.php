<div class="container-fluid content">
	
		<div class="row">
				
			<!-- start: Main Menu -->
			<div class="sidebar ">
								
				<div class="sidebar-collapse">
					<div class="sidebar-header t-center">
                    <h1>DashBoard</h1>
                    </div>										
					<div class="sidebar-menu">						
						<ul class="nav nav-sidebar">
							<li><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-laptop"></i><span class="text"> Dashboard</span></a></li>
							<li>
								<a href="#"><i class="fa fa-file-text"></i><span class="text"> Pages</span> <span class="fa fa-angle-down pull-right"></span></a>
								<ul class="nav sub">
									<li><a href="{{URL::to('admin/users')}}"><i class="fa fa-users"></i><span class="text"> Users</span></a></li>
								</ul>	
							</li>
						</ul>
					</div>					
				</div>
				<div class="sidebar-footer">					
				</div>	
				
			</div>
			<!-- end: Main Menu -->