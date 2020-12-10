	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header" onclick="$('#nav-user-link').slideToggle(400)">
						<img class="img-radius" src="{{ asset('backend/assets/images/user/avatar-2.jpg') }}" alt="User-Profile-Image">
						<div class="user-details">
							<span>John Doe</span>
							<div id="more-details">UX Designer<i class="fa fa-chevron-down m-l-5"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Page layouts</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="layout-vertical.html" target="_blank">Vertical</a></li>
					        <li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
					    </ul>
					</li>

					{{-- Category items --}}

					<li class="nav-item pcoded-hasmenu {{ (request()->is('admin/category*')) ? 'pcoded-toggle' : '' }}">
						<a href="" onclick="event.preventDefault()" class="nav-link "><span class="pcoded-micon"><i class="fas fa-list"></i></i></span><span class="pcoded-mtext">Category</span></a>
						<ul class="pcoded-submenu">
								<li><a href="{{ route('admin.category.index') }}" >Manage Category</a></li>
								
						</ul>
					</li>

					{{-- News item --}}

					<li class="nav-item pcoded-hasmenu {{ (request()->is('admin/news*')) ? 'pcoded-toggle' : '' }}">
						<a href="" onclick="event.preventDefault()" class="nav-link "><span class="pcoded-micon"><i class="far fa-newspaper"></i></span><span class="pcoded-mtext">News</span></a>
						<ul class="pcoded-submenu">
								<li><a href="{{ route('admin.news.create') }}" >Publish News</a></li>
								<li><a href="{{ route('admin.news.index') }}" >Manage News</a></li>
								<li><a href="{{ route('admin.news.trash.index') }}" >Trash bin</a></li>
								
						</ul>
					</li>

					<li class="nav-item pcoded-hasmenu {{ (request()->is('admin/gallery*')) ? 'pcoded-toggle' : '' }}">
						<a href="" onclick="event.preventDefault()" class="nav-link "><span class="pcoded-micon"><i class="far fa-images"></i></span><span class="pcoded-mtext">Gallery</span></a>
						<ul class="pcoded-submenu">
								<li><a href="{{ route('admin.gallery.create') }}" >Publish Photo</a></li>
								<li><a href="{{ route('admin.gallery.index') }}" >Manage Photo</a></li>	
						</ul>
					</li>

					<li class="nav-item pcoded-hasmenu {{ (request()->is('admin/vido*')) ? 'pcoded-toggle' : '' }}">
						<a href="" onclick="event.preventDefault()" class="nav-link "><span class="pcoded-micon"><i class="fas fa-video"></i></span><span class="pcoded-mtext">Video</span></a>
						<ul class="pcoded-submenu">
								<li><a href="{{ route('admin.video.create') }}" >Publish Video</a></li>
								<li><a href="{{ route('admin.video.index') }}" >Manage Video</a></li>	
						</ul>
					</li>

					<li class="nav-item pcoded-hasmenu {{ (request()->is('admin/role')) ? 'pcoded-toggle' : '' }}">
						<a href="" onclick="event.preventDefault()" class="nav-link "><span class="pcoded-micon"><i class="fas fa-user-shield"></i></span><span class="pcoded-mtext">Admin Managmet</span></a>
						<ul class="pcoded-submenu">
								
								<li class="nav-item pcoded-hasmenu {{ (request()->is('')) ? 'pcoded-toggle' : '' }}">
									<a href="" onclick="event.preventDefault()" class="nav-link "><span class="pcoded-mtext">Role</span></a>
									<ul class="pcoded-submenu">
										<li><a href="{{ url('/admin/role/create') }}">Register Role</a></li>
										<li><a href="{{ url('/admin/roles') }}" >Manage Role</a></li>
									</ul>
								</li>

								<li class="nav-item pcoded-hasmenu {{ (request()->is('')) ? 'pcoded-toggle' : '' }}">
									<a href="" onclick="event.preventDefault()" class="nav-link "><span class="pcoded-mtext">Assign Role</span></a>
									<ul class="pcoded-submenu">
										<li><a href="{{ url('/admin/register') }}" >Register New Admin</a></li>
										<li><a href="{{ url('/admin/show') }}" >Admin List</a></li>

										
									</ul>
								</li>

						</ul>
					</li>

				</ul>

				
			</div>
		</div>
	</nav>
    <!-- [ navigation menu ] end -->
		
		
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="assets/images/logo.png" alt="" class="logo">
						<img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
									Dropdown
								</a>
								<div class="dropdown-menu profile-notification ">
									<ul class="pro-body">
										<li><a href="user-profile.html" class="dropdown-item"><i class="fas fa-circle"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="fas fa-circle"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="fas fa-circle"></i> Lock Screen</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown">
									<i class="icon feather icon-bell"></i>
									<span class="badge badge-pill badge-danger">5</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifications</h6>
										<div class="float-right">
											<a href="#!" class="m-r-10">mark as read</a>
											<a href="#!">clear all</a>
										</div>
									</div>
									<ul class="noti-body">
										<li class="n-title">
											<p class="m-b-0">NEW</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
													<p>New ticket Added</p>
												</div>
											</div>
										</li>
										<li class="n-title">
											<p class="m-b-0">EARLIER</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
													<p>currently login</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
										<span>John Doe</span>
										<a href="auth-signin.html" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->