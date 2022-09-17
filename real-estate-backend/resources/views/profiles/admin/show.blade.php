@extends('layouts.admin')

@section('template_title')
	{{ $user->first_name }}'s Profile
@endsection

@section('header')
	<small>
		{{ trans('profile.showProfileTitle',['userid' => $user->id]) }}
	</small>
@endsection

@section('content')

	@include('cards.admin.user-profile-card')

	

@endsection

@section('footer_scripts')

	{{-- <script src="/assets/js/plugin/select2/select2.full.min.js"></script>
	<script src="/assets/js/atlantis.min.js"></script>
	<script src="/assets/js/setting-demo2.js"></script>
	<script src="/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

	 --}}
	<!-- Moment JS -->
	<script src="/assets/js/plugin/moment/moment.min.js"></script>
	<!-- DateTimePicker -->
	<script src="/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
	<!-- Select2 -->
	<script src="/assets/js/plugin/select2/select2.full.min.js"></script>
	<!-- jQuery Validation -->
	<script src="/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>
	<!-- Atlantis JS -->
	<script src="/assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="/assets/js/setting-demo2.js"></script>
	<script>
	
		// validation when inputfile change
		$("#uploadImg").on("change", function(){
			$(this).parent('form').validate();
		})

		$("#exampleValidation").validate({
			validClass: "success",
			rules: {
				gender: {required: true},
				confirmpassword: {
					equalTo: "#password"
				},
				uploadImg: {
					required: true, 
				},
			},
			highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
			},
			success: function(element) {
				$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			},
		});
	</script>
@endsection
