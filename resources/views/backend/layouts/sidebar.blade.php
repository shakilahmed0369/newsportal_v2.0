@php
		use Bitfumes\Multiauth\Model\Admin;
		$admin = Admin::find(Auth::user('admin')->id);
@endphp
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header" onclick="$('#nav-user-link').slideToggle(400)">
						<img class="img-radius" src="{{ asset('backend/assets/images/user/avatar-2.jpg') }}" alt="User-Profile-Image">
						<div class="user-details">
							<span>{{ Auth('admin')->user()->name }}</span>
							<div id="more-details">
								@foreach ($admin->roles as $admin)
								{{ $admin->name }}
								@endforeach
								<i class="fa fa-chevron-down m-l-5"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="{{ route('admin.password.change') }}"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();" ><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
							<form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
              				</form>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="{{ route('admin.dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>

					{{-- Category items --}}
					@permitToParent('Category')
					<li class="nav-item pcoded-hasmenu {{ (request()->is('admin/category*')) ? 'pcoded-toggle' : '' }}">
						<a href="" onclick="event.preventDefault()" class="nav-link "><span class="pcoded-micon"><i class="fas fa-list"></i></i></span><span class="pcoded-mtext">Category</span></a>
						<ul class="pcoded-submenu">
							@permitTo('ReadCategory')
								<li><a href="{{ route('admin.category.index') }}" >Manage Category</a></li>	
							@endpermitTo
						</ul>
					</li>
					@endpermitTo

					{{-- News item --}}
					@permitToParent('News')
					<li class="nav-item pcoded-hasmenu {{ (request()->is('admin/news*')) ? 'pcoded-toggle' : '' }}">
						<a href="" onclick="event.preventDefault()" class="nav-link "><span class="pcoded-micon"><i class="far fa-newspaper"></i></span><span class="pcoded-mtext">News</span></a>
						<ul class="pcoded-submenu">
							@permitTo('CreateNews')
								<li><a href="{{ route('admin.news.create') }}" >Publish News</a></li>
							@endpermitTo
							@permitTo('ReadNews')
								<li><a href="{{ route('admin.news.index') }}" >Manage News</a></li>
							@endpermitTo
							@permitTo('DeleteNews')
								<li><a href="{{ route('admin.news.trash.index') }}" >Trash bin</a></li>	
							@endpermitTo
						</ul>
					</li>
					@endpermitTo

					{{-- Gallery item --}}
					@admin('publisher')
					<li class="nav-item pcoded-hasmenu {{ (request()->is('admin/gallery*')) ? 'pcoded-toggle' : '' }}">
						<a href="" onclick="event.preventDefault()" class="nav-link "><span class="pcoded-micon"><i class="far fa-images"></i></span><span class="pcoded-mtext">Gallery</span></a>
						<ul class="pcoded-submenu">
								<li><a href="{{ route('admin.gallery.create') }}" >Publish Photo</a></li>
								<li><a href="{{ route('admin.gallery.index') }}" >Manage Photo</a></li>	
						</ul>
					</li>
					@endadmin

					{{-- Video item --}}
					@admin('publisher')
					<li class="nav-item pcoded-hasmenu {{ (request()->is('admin/video*')) ? 'pcoded-toggle' : '' }}">
						<a href="" onclick="event.preventDefault()" class="nav-link "><span class="pcoded-micon"><i class="fas fa-video"></i></span><span class="pcoded-mtext">Video</span></a>
						<ul class="pcoded-submenu">
								<li><a href="{{ route('admin.video.create') }}" >Publish Video</a></li>
								<li><a href="{{ route('admin.video.index') }}" >Manage Video</a></li>	
						</ul>
					</li>
					@endadmin

					{{-- Add pag item --}}
					@admin('publisher')
					<li class="nav-item pcoded-hasmenu {{ (request()->is('admin/video*')) ? 'pcoded-toggle' : '' }}">
						<a href="" onclick="event.preventDefault()" class="nav-link "><span class="pcoded-micon"><i class="far fa-file-alt"></i></span><span class="pcoded-mtext">Pages</span></a>
						<ul class="pcoded-submenu">
								<li><a href="{{ route('admin.page.create') }}" >Add Page</a></li>
								<li><a href="{{ route('admin.page.index') }}" >Manage Page</a></li>	
						</ul>
					</li>
					@endadmin

					{{-- customize item --}}
					@admin('publisher')
					<li class="nav-item pcoded-hasmenu {{ (request()->is('admin/customize*')) ? 'pcoded-toggle' : '' }}">
						<a href="" onclick="event.preventDefault()" class="nav-link "><span class="pcoded-micon"><i class="fas fa-th-large"></i></span><span class="pcoded-mtext">Site Customization</span></a>
						<ul class="pcoded-submenu">
								<li><a href="{{ route('admin.navIndex') }}" >Customize Navbar</a></li>
								<li><a href="{{ route('admin.homeCustomize') }}" >Manage Video</a></li>	
						</ul>
					</li>
					@endadmin



					{{-- customize item --}}
					@admin('publisher')
					<li class="nav-item pcoded-hasmenu {{ (request()->is('admin/customize*')) ? 'pcoded-toggle' : '' }}">
						<a href="" onclick="event.preventDefault()" class="nav-link "><span class="pcoded-micon"><i class="fas fa-ad"></i></span><span class="pcoded-mtext">Advertisement</span></a>
						<ul class="pcoded-submenu">
								<li><a href="{{ route('admin.ad.index') }}" >Ad Unit</a></li>	
						</ul>
					</li>
					@endadmin

					{{-- customize item --}}
					@admin('publisher')
					<li class="nav-item pcoded-hasmenu {{ (request()->is('admin/settings*')) ? 'pcoded-toggle' : '' }}">
						<a href="{{ route('admin.settings.index') }}" class="nav-link "><span class="pcoded-micon"><i class="fas fa-cog"></i></span><span class="pcoded-mtext">Settings</span></a>
					</li>
					@endadmin

					{{-- Admin item --}}
					@admin('super') 
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
					@endadmin
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
		
			
	</header>
	<!-- [ Header ] end -->