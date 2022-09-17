@extends('layouts.admin')


@section('template_title')
  Create New User
@endsection

@section('header')
  Create New User
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
        <a itemprop="item" href="/users" disabled>
            <span itemprop="name">
                Users List
            </span>
        </a>
        <meta itemprop="position" content="2" />
    </li>
@endsection

@section('content')

  <div class="main-panel">
    <div class="container">
      <div class = "page-inner">
        <div class = "row">
          <div class = "col-md-12">
            <div class="card" style="width:100%;" itemscope itemtype="http://schema.org/Person">
              <div class = "card-header">
                <div class="card-title">
                  Create New User
                </div>
              </div>
              
      
              <!-- {!! Form::open(array('action' => 'UsersManagementController@store', 'method' => 'POST', 'role' => 'form')) !!} -->
			  <form id="exampleValidation" method="POST" action="/users/store" enctype="multipart/form-data">
            					{{ csrf_field() }}
              <div class="card-body">
					<div class="form-group form-show-validation row">
						<label for="first_name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">First Name <span class="required-label">*</span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name"  required>
						</div>
					</div>
					<div class="form-group form-show-validation row">
						<label for="last_name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Last Name <span class="required-label">*</span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name"  required>
						</div>
					</div>
					<!-- <div class="form-group form-show-validation row">
						<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Username <span class="required-label">*</span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="username-addon">@</span>
								</div>
								<input type="text" class="form-control" placeholder="Enter User Name" aria-label="name" aria-describedby="username-addon" id="username" name="name" required>
							</div>
						</div>
					</div> -->
					<div class="form-group form-show-validation row">
						<label for="company" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Company <span class="required-label">*</span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<select class="form-control input-solid" id="selectFloatingLabel1" name = "company" require>
								<option value="0">Select company</option>
								<?php
									foreach($companies as $company){
										echo '<option value = "'.$company->id.'">'.$company->name.'</option>';
									}
								?>
								
							</select>
							<!-- <input type="text" class="form-control" id="company" name="company" placeholder="Enter Company"  required> -->
						</div>
					</div>
					<div class="form-group form-show-validation row">
						<label for="user_type" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">User Type <span class="required-label">*</span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<select class="form-control input-solid" id="selectFloatingLabel2" name = "user_type" required>
								<option value="0">Select User Type</option>
								<?php
									foreach($roles as $role){
										if($role->name != "Admin"){

											echo '<option value = "'.$role->name.'">'.$role->name.'</option>';
										}
									}
								?>
								
							</select>
							<!-- <input type="text" class="form-control" id="company" name="company" placeholder="Enter Company"  required> -->
						</div>
					</div>
					<div class="form-group form-show-validation row">
						<label for="email" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Email Address <span class="required-label">*</span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email"  required>
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
					</div>
					<div class="separator-solid"></div>
					<div class="form-group form-show-validation row">
						<label for="address" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Address </span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
						</div>
					</div>
					<div class="form-group form-show-validation row">
						<label for="city" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">City </span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<input type="text" class="form-control" id="city" name="city" placeholder="Enter City"  required>
						</div>
					</div>
					<div class="form-group form-show-validation row">
						<label for="state" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">State </span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<input type="text" class="form-control" id="state" name="state" placeholder="Enter State" required>
						</div>
					</div>
					<div class="form-group form-show-validation row">
						<label for="zipcode" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Zipcode </span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Enter Zipcode" required>
						</div>
					</div>
					<div class="form-group form-show-validation row">
						<label for="country" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Country </span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<input type="text" class="form-control" id="country" name="country" placeholder="Enter Country"  required>
						</div>
					</div>
					<div class="form-check">
						<div class="row">
							<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> </span></label>
							<div class="col-lg-4 col-md-9 col-sm-8 d-flex align-items-center">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="check_billing_address" name="check_billing_address" checked required>
									<label class="custom-control-label" for="check_billing_address">Set Billing address the same as my address.</label>
								</div>
							</div>
						</div>
					</div>
					<div class = "row show_billing_address" style = "display:none">
						<div class="form-group form-show-validation row">
							<label for="billing_address" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Billing Address </span></label>
							<div class="col-lg-4 col-md-9 col-sm-8">
								<input type="text" class="form-control" id="billing_address" name="billing_address" placeholder="Enter Address">
							</div>
						</div>
						<div class="form-group form-show-validation row">
							<label for="billing_city" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Billing City </span></label>
							<div class="col-lg-4 col-md-9 col-sm-8">
								<input type="text" class="form-control" id="billing_city" name="billing_city" placeholder="Enter City"  >
							</div>
						</div>
						<div class="form-group form-show-validation row">
							<label for="billing_state" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Billing  State </span></label>
							<div class="col-lg-4 col-md-9 col-sm-8">
								<input type="text" class="form-control" id="billing_state" name="billing_state" placeholder="Enter State"  >
							</div>
						</div>
						<div class="form-group form-show-validation row">
							<label for="billing_zipcode" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Billing Zipcode </span></label>
							<div class="col-lg-4 col-md-9 col-sm-8">
								<input type="text" class="form-control" id="billing_zipcode" name="billing_zipcode" placeholder="Enter Zipcode"  >
							</div>
						</div>
						<div class="form-group form-show-validation row">
							<label for="billing_country" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Billing Country </span></label>
							<div class="col-lg-4 col-md-9 col-sm-8">
								<input type="text" class="form-control" id="billing_country" name="billing_country" placeholder="Enter Country"  >
							</div>
						</div>
					</div>
					<div class="separator-solid"></div>
					<div class="form-group form-show-validation row">
						<label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Password <span class="required-label">*</span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
						</div>
					</div>
					<div class="form-group form-show-validation row">
						<label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Confirm Password <span class="required-label">*</span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Enter Password" required>
						</div>
					</div>
					
					<div class="separator-solid"></div>
					<div class="form-group form-show-validation row">
						<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Image <span class="required-label">*</span></label>
						<div class="col-lg-4 col-md-9 col-sm-8">
							<div class="input-file input-file-image">
								<img class="img-upload-preview img-circle" width="100" height="100" src="/assets/img/default.jpg" alt="preview">
								<input type="file" class="form-control form-control-file" id="avatar" name="avatar" accept="image/*" required >
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
							<a href="/users" class="btn btn-danger">Cancel</a>
						</div>										
					</div>
				</div>
    
                <!-- @include('dialogs.dialog-save') -->
    
              <!-- {!! Form::close() !!} -->
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

  <script type="text/javascript">
    mdl_dialog('.dialog-button-save');
    mdl_dialog('.dialog-button-icon-save');
  </script>
  <script>
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
	console.log("testing ------------>");
	$('input[name="check_billing_address"]').click(function(){
		if($(this).is(":checked")){
			$('.show_billing_address').css('display', 'none');

		}
		else if($(this).is(":not(:checked)")){
			$('.show_billing_address').css('display', 'block');
		}
	});
</script>
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