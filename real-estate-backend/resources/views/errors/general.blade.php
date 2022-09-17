<title>{{ $errorTitle }}</title>
@extends('layouts.error')

@section('template_linked_css')

@endsection

@section('content')
   <div class="wrapper not-found">
		<h1 class="animated fadeIn">500</h1>
		<div class="desc animated fadeIn"><span>OOPS!</span><br/>{{ $errorMessage }}</div>
		<a href="/" class="btn btn-primary btn-back-home mt-4 animated fadeInUp">
			<span class="btn-label mr-2">
				<i class="flaticon-home"></i>
			</span>
			Back To Home
		</a>
	</div>
@stop


@section('footer_scripts')

@endsection

