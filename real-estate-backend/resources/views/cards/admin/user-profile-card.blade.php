@php
	if(Auth::user()->profile->avatar){
		$userGravImage = Auth::user()->profile->avatar;
	}else{
		$userGravImage = Auth::user()->avatar_url;
	}
@endphp
<div class="main-panel">
	@if (Auth::user()->id == $user->id)
		
		<div class="container">
			<div class="page-inner">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="card-title">My Account</div>
							</div>
							<form id="exampleValidation" method="POST" action="/profile/{{$user->id}}/updateAccount" enctype="multipart/form-data">
            					{{ csrf_field() }}
								<div class="card-body">
									<div class="form-group form-show-validation row">
										<label for="first_name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">First Name <span class="required-label">*</span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" value="{{ $user->first_name }}" required>
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="last_name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Last Name <span class="required-label">*</span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" value="{{ $user->last_name }}" required>
										</div>
									</div>
									<!-- <div class="form-group form-show-validation row">
										<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Username <span class="required-label">*</span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" id="username-addon">@</span>
												</div>
												<input type="text" class="form-control" placeholder="Enter User Name" aria-label="name" aria-describedby="username-addon" id="username" name="name" value="{{ $user->name }}" required>
											</div>
										</div>
									</div> -->
									<div class="form-group form-show-validation row">
										<label for="company" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Company </span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="company" name="company" placeholder="Enter Company" value="{{ $user->profile->company }}" >
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="email" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Email Address <span class="required-label">*</span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{ $user->email }}" required>
											<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
										</div>
									</div>
									<div class="separator-solid"></div>
									<div class="form-group form-show-validation row">
										<label for="address" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Address </span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="{{ $user->profile->address }}" >
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="city" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">City </span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="{{ $user->profile->city }}" >
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="state" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">State </span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="state" name="state" placeholder="Enter State" value="{{ $user->profile->state }}" >
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="zipcode" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Zipcode </span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Enter Zipcode" value="{{ $user->profile->zipcode }}" >
										</div>
									</div>
									<div class="form-group form-show-validation row">
										<label for="country" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Country </span></label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<input type="text" class="form-control" id="country" name="country" placeholder="Enter Country" value="{{ $user->profile->country }}" >
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
												<input type="text" class="form-control" id="billing_address" name="billing_address" placeholder="Enter Address" value="{{ $user->profile->billing_address }}" >
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="billing_city" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Billing City </span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="billing_city" name="billing_city" placeholder="Enter City" value="{{ $user->profile->billing_city }}" >
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="billing_state" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Billing  State </span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="billing_state" name="billing_state" placeholder="Enter State" value="{{ $user->profile->billing_state }}" >
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="billing_zipcode" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Billing Zipcode </span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="billing_zipcode" name="billing_zipcode" placeholder="Enter Zipcode" value="{{ $user->profile->billing_zipcode }}" >
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="billing_country" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Billing Country </span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="billing_country" name="billing_country" placeholder="Enter Country" value="{{ $user->profile->billing_country }}" >
											</div>
										</div>
									</div>
									<div class="separator-solid"></div>
									<div class="form-check">
										<div class="row">
											<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> </span></label>
											<div class="col-lg-4 col-md-9 col-sm-8 d-flex align-items-center">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check_password_change" name="check_password_change" checked required>
													<label class="custom-control-label" for="check_password_change">I'll not change password.</label>
												</div>
											</div>
										</div>
									</div>
									<div class ="display_password_setting" style = "display:none">
										<div class="form-group form-show-validation row">
											<label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Password </label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" >
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Confirm Password </label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Enter Password" >
											</div>
										</div>
									</div>
									
									<div class="separator-solid"></div>
									<div class="form-group form-show-validation row">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Image </label>
										<div class="col-lg-4 col-md-9 col-sm-8">
											<div class="input-file input-file-image">
												<img class="img-upload-preview img-circle" width="100" height="100" src="{{ $userGravImage }}" alt="preview">
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
											<a href="/home" class="btn btn-danger">Cancel</a>
										</div>										
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	@else
		<p>{{ trans('profile.notYourProfile') }}</p>
	@endif
</div>

<script>
	console.log("testing ------------>");
	$('input[name="check_billing_address"]').click(function(){
		if($(this).is(":checked")){
			$('.show_billing_address').css('display', 'none');

		}
		else if($(this).is(":not(:checked)")){
			$('.show_billing_address').css('display', 'block');
		}
	});
	$('input[name="check_password_change"]').click(function(){
		if($(this).is(":checked")){
			$('.display_password_setting').css('display', 'none');

		}
		else if($(this).is(":not(:checked)")){
			$('.display_password_setting').css('display', 'block');
		}
	});
</script>
