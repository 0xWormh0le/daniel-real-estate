@php
	if(Auth::user()->profile->avatar){
		$userGravImage = Auth::user()->profile->avatar;
	}else{
		$userGravImage = Auth::user()->avatar_url;
	}
@endphp

<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="dark2">			
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="{{ $userGravImage }}" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info" style = "margin-top: 8px; margin-left: 50px;">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
							
						</span>
					</a>
					<div class="clearfix"></div>

					<!-- <div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="{{ url('/profile/'.Auth::user()->name) }}">
									<span class="link-collapse">My Account</span>
								</a>
							</li>
						</ul>
					</div> -->
				</div>
			</div>
			<?php
				$current_url = Request::path();
			?>
			<ul class="nav nav-primary" data-background-color="dark">
				<!-- <li class="nav-item @if($current_url == 'home') active @endif">
					<a href="/home">
						<i class="fas fa-home"></i>
						<p>Home</p>
					</a>
				</li> -->
				
				@if (Auth::user()->hasRole('admin'))
				<li class="nav-item @if($current_url == 'admin/users') active @endif">
					<a href="/admin/users">
						<i class="fas fa-user-friends"></i>
						<p>Users</p>
					</a>
				</li>
				@elseif(Auth::user()->hasRole('companymgt'))
				<li class="nav-item @if($current_url == 'admin/users/'.Auth::user()->company_id) active @endif">
					<a href="/admin/users/{{Auth::user()->company_id}}">
						<i class="fas fa-user-friends"></i>
						<p>Users</p>
					</a>
				</li>
				@endif
				
				@if (Auth::user()->hasRole('admin'))
				<li class="nav-item @if($current_url == 'admin/companies') active @endif">
					<a href="/admin/companies">
						<i class="fas fa-building"></i>
						<p>Companies</p>
					</a>
				</li>
				@endif

				@if (Auth::user()->hasRole('admin'))
				<li class="nav-item @if($current_url == 'admin/properties') active @endif">
					<a href="/admin/properties">
						<i class="fas fa-cog"></i>
						<p>Properties</p>
					</a>
				</li>
				@else
				<li class="nav-item @if($current_url == 'admin/properties'.Auth::user()->company_id) active @endif">
					<a href="/admin/properties/{{Auth::user()->company_id}}">
						<i class="fas fa-cog"></i>
						<p>Properties</p>
					</a>
				</li>
				@endif
				
				<li class="nav-item @if($current_url == 'admin/applications') active @endif">
					<a href="/admin/applications">
						<i class="fas fa-cog"></i>
						<p>Applications</p>
					</a>
				</li>

				<li class="nav-item @if($current_url == 'admin/contracts') active @endif">
					<a href="/admin/contracts">
						<i class="fas fa-cog"></i>
						<p>Contracts</p>
					</a>
				</li>

			</ul>
		</div>
	</div>
</div>
<style>

</style>
<!-- End Sidebar -->
