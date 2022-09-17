@extends('layouts.admin')


@section('template_title')
  Edit New Company
@endsection

@section('header')
  Edit New Company
@endsection


@section('breadcrumbs')
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{url('/')}}">
            <span itemprop="name">
                {{ trans('titles.app') }}
            </span>
        </a>
        <i class="material-icons">chevron_right</i>
        <meta itemprop="position" content="1" />
    </li>
    <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="/companies" disabled>
            <span itemprop="name">
                Companies List
            </span>
        </a>
        <meta itemprop="position" content="2" />
    </li>
@endsection
@php
	if($company->logo){
		$companyLogoImage = $company->logo;
	}else{
		$companyLogoImage = '/assets/img/default.jpg';
	}
@endphp
@section('content')
<div class="main-panel">
	
		
		<div class="container">
			<div class="page-inner">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="card-title">Edit Company: {{$company->id}}</div>
							</div>
							<form id="exampleValidation" method="POST" action="/companies/{{$company->id}}/update" enctype="multipart/form-data">
            					{{ csrf_field() }}
								<div class="card-body">
									<div class="form-group form-show-validation row">
										<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Company <span class="required-label">*</span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="name" name="name" placeholder="Enter First Name" value="{{ $company->name }}" required>
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="phone1" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Phone1 <span class="required-label">*</span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="phone1" name="phone1" placeholder="Enter Phone1" value="{{ $company->phone1 }}" required>
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="phone2" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Phone2 <span class="required-label">*</span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Enter Phone2" id="phone2" name="phone2" value="{{ $company->phone2 }}" required>
											</div>
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="fax" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Fax <span class="required-label">*</span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="fax" name="fax" placeholder="Enter Fax" value="{{ $company->fax }}" required>
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="email" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Email Address <span class="required-label">*</span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{ $company->email }}" required>
											<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="description" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Description </span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" value="{{ $company->description }}" required>
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="about_us" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">About Us </span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="about_us" name="about_us" placeholder="Enter About Us" value="{{ $company->about_us }}" required>
										</div>
									</div>
									<div class="separator-solid"></div>
									<div class="form-group form-show-validation row">
										<label for="address1" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Address1 </span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="address1" name="address1" placeholder="Enter Address1" value="{{ $company->address1 }}" required>
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="address2" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Address2 </span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="address2" name="address2" placeholder="Enter Address2" value="{{ $company->address2 }}" required>
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="city" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">City </span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="{{ $company->city }}" required>
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="state" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">State </span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="state" name="state" placeholder="Enter State" value="{{ $company->state }}" required>
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="zip" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Zip </span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="zip" name="zip" placeholder="Enter Zip" value="{{ $company->zip }}" required>
										</div>
									</div>
									
									
								
									
									<div class="separator-solid"></div>
									<div class="form-group form-show-validation row">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Image </label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<div class="input-file input-file-image">
												<img class="img-upload-preview img-circle" width="100" height="100" src="{{ $companyLogoImage }}" alt="preview">
												<input type="file" class="form-control form-control-file" id="avatar" name="avatar" accept="image/*"  >
												<label for="avatar" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload a Image</label>
											</div>
										</div>
									</div>
									<div class="form-check">
										<div class="row">
											<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Agree <span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8 d-flex align-items-center">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="agree" name="agree" required>
													<label class="custom-control-label" for="agree">Agree with terms and conditions</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-action">
									<div class="row">
										<div class="col-md-12 text-right">
											<input id="btn_save_accout" class="btn btn-success" type="submit" value="Save">
											<a href="/admin/companies" class="btn btn-danger">Cancel</a>
										</div>										
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	
</div>
@endsection

@section('footer_scripts')

  @include('scripts.mdl-required-input-fix')
  @include('scripts.gmaps-address-lookup-api3')


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
	// console.log("testing ------------>");
	$('input[name="check_billing_address"]').click(function(){
		if($(this).is(":checked")){
			$('.show_billing_address').css('display', 'none');

		}
		else if($(this).is(":not(:checked)")){
			$('.show_billing_address').css('display', 'block');
		}
	});
</script>
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
