<!-- @extends('layouts.dashboard') -->

@section('template_title')
	{{ $user->first_name }}'s Profile
@endsection

@section('template_fastload_css')

	#map-canvas{
		min-height: 300px;
		height: 100%;
		width: 100%;
	}

@endsection

@section('header')
	<small>
		<!-- {{ trans('profile.showProfileTitle',['username' => $user->name]) }} -->
	</small>
@endsection

@section('breadcrumbs')

@endsection

@section('content')

	@include('cards.user-profile-card')

@endsection

@section('footer_scripts')
	
@endsection
