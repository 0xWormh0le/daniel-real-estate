@extends('layouts.admin')


@section('template_title')
  Edit New Property
@endsection

@section('header')
  Edit New Property
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
        <a itemprop="item" href="/properties" disabled>
            <span itemprop="name">
                Properties List
            </span>
        </a>
        <meta itemprop="position" content="2" />
    </li>
@endsection

@section('content')
<div class="main-panel">
	<div class="container">
		<div class="page-inner">
			<div class="page-header">
				<!-- <h4 class="page-title">Add Exsiting Domain</h4> -->
				
			</div>
			<div class="row">
				<div class="wizard-container wizard-round col-md-9">
					<div class="wizard-header text-center">
						<h3 class="wizard-title"><b>Edit</b> Property</h3>
					</div>
					<form id="exampleValidation" method="POST" action="/properties/{{$property->id}}/update" enctype="multipart/form-data">
            			{{ csrf_field() }}
						<div class="wizard-body">
							<div class="row">

								<ul class="wizard-menu nav nav-pills nav-primary">
									<li class="step" style="width: 25%;">
										<a class="nav-link active" href="#basic" data-toggle="tab" aria-expanded="true"> Basic</a>
									</li>
									<li class="step" style="width: 25%;">
										<a class="nav-link" href="#address" data-toggle="tab">Address</a>
									</li>
									<li class="step" style="width: 25%;">
										<a class="nav-link" href="#additional" data-toggle="tab">Additional</a>
									</li>
									<li class="step" style="width: 25%;">
										<a class="nav-link" href="#media" data-toggle="tab">Media</a>
									</li>
									
									
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane active" id="basic">
									<div class="row">
										<div class="col-md-12">
											<h4 class="info-text">Basic</h4>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Title * :</label>
												<input name="title" type="text" class="form-control" id = "property_title" required="" value = "{{$property->title}}">
											</div>
											<div class="form-group">
												<label>Description :</label>
												<textarea name="description" class="form-control" rows="5">{{$property->description}}</textarea>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Sale Price ($) :</label>
												<input name="property_detail[0][name]"  style = "display:none" value = "price_dollar_sale">
												<input name="property_detail[0][value]" type="number" class="form-control" value = "<?php foreach($property_details as $property_detail) { if($property_detail->name == "price_dollar_sale") echo  $property_detail->value; }?>">														
											</div>

											<div class="form-group">
												<label for="selectPropertyType" class="placeholder">Property Type *</label>
												<select class="form-control" id="selectPropertyType" required="" name= "property_type_id">
													
													<?php 
														foreach($property_types as $property_type){
															if ($property_type->id == $property->property_type_id){
																echo "<option value = $property_type->id selected >".$property_type->name."</option>";
															}else{
																echo "<option value = $property_type->id >".$property_type->name."</option>";
															}
														}
													?>
													
												</select>
												
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Rent Price ($) :</label>
												<input name="property_detail[1][name]" style = "display:none" value = "price_dollar_rent">
												<input name="property_detail[1][value]" type="number" class="form-control" value = "<?php foreach($property_details as $property_detail) { if($property_detail->name == "price_dollar_rent") echo  $property_detail->value; }?>">														
											</div>
											<div class="form-group">
												<label for="selectPropertyStatus" class="placeholder">Property Status *</label>
												<div class="select2-input select2-primary">
													<select id="selectPropertyStatus" class="form-control" name = "property_status[]" style="width:100%" multiple="multiple" required>
														<?php 
															foreach($property_statuses as $property_status){
																$temp = 0;
																foreach ($property_current_statuses as $property_current_status){
																	if($property_status->id == $property_current_status->property_status_id){

																		echo "<option value = $property_status->id selected>".$property_status->name."</option>";
																		$temp = 1;
																	break;
																	}
																}
																if($temp == 0){
																	echo "<option value = $property_status->id >".$property_status->name."</option>";
																}
															}
														?>
													</select>
												</div>												
												
											</div>
										</div>
										<div class = "col-md-12">
											
											{!! csrf_field() !!}
											<div class="form-group">
												<label for="file-1" class="placeholder">Gallery *</label>
												<div class="file-loading">

													<input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="1">

												</div>
												

											</div>
											
										</div>
									</div>
								</div>
								<div class="tab-pane" id="address">
									
									<div class="row">
											<div class="col-md-12">
												<h4 class="info-text">Address </h4>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<div class="input-group mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon1"> <i class="la flaticon-placeholder"></i></span>
														</div>
														<input type="text" class="form-control" name = "location" placeholder="Location" aria-label="Location" aria-describedby="basic-addon1"
														value = "<?php
														foreach($property_details as $property_detail) {
															if($property_detail->name == "address"){
																echo  $property_detail->value;
																break;
															}
														  }
														  foreach($property_details as $property_detail) {
															if($property_detail->name == "city"){
																echo  ", ".$property_detail->value;
															}elseif($property_detail->name == "street"){
																echo  ", ".$property_detail->value;
															}
														  }
														  foreach($property_details as $property_detail) {
															if($property_detail->name == "zipcode"){
																echo  ", ".$property_detail->value.", USA";
															}
														  }?>">
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="contact-map">
													<iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJqc7gmEQayUwRON6JKxG6eLc&key=AIzaSyDZMqGhn3cZWwhu18VfxzOKq5HkvdX3SM4" width="100%" height="280" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input name="property_detail[2][name]"  style = "display:none" value = "city">
													<label for="selectFloatingLabel1" class="placeholder">City *</label>
													<select class="form-control" id="selectFloatingLabel1" required=""  name="property_detail[2][value]">
													<option value="">&nbsp;</option>
														<option value="New York">New York</option>
														<option value="Chicago">Chicago</option>
														<option value="Los Angeles">Los Angeles</option>
														<option value="Seattle">Seattle</option>
													</select>
													
												</div>

												<div class="form-group">
													<input name="property_detail[3][name]"  style = "display:none" value = "neighborhood">
													<label for="selectFloatingLabel2" class="placeholder">Neighborhood *</label>
													<select class="form-control" id="selectFloatingLabel2" required="" name="property_detail[3][value]">
													<option value="">&nbsp;</option>
														<option value="Austin">Austin</option>
														<option value="Englewood">Englewood</option>
														<option value="Riverdale">Riverdale</option>																
													</select>
													
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Zip Code :</label>
													<input name="property_detail[10][name]"  style = "display:none" value = "zipcode">
													<input name="property_detail[10][value]" type="text" class="form-control">														
												</div>
												<div class="form-group">
													<input name="property_detail[4][name]"  style = "display:none" value = "street">
													<label for="selectFloatingLabel1" class="placeholder">Street *</label>
													<select class="form-control" id="selectFloatingLabel1" required="" name="property_detail[4][value]">
													<option value="">&nbsp;</option>
														<option value="Austin Street #1">Austin Street #1</option>
														<option value="Austin Street #2">Austin Street #2</option>
														<option value="Englewood Street #1">Englewood Street #1</option>	
														<option value="Englewood Street #2">Englewood Street #2</option>	
														<option value="Riverdale Street #1">Riverdale Street #1</option>	
														<option value="Riverdale Street #2">Riverdale Street #2</option>		
													</select>
													
													
												</div>
											</div>
											
											
									</div>
								</div>
								<div class="tab-pane" id="additional">
									
									<div class="row">
											<div class="col-md-12">
												<h4 class="info-text">Additional</h4>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Bedrooms :</label>
													<input name="property_detail[5][name]" style = "display:none" value = "bedrooms">
													<input name="property_detail[5][value]" type="number" class="form-control" value = "<?php
														foreach($property_details as $property_detail) {
															if($property_detail->name == "bedrooms"){
																echo  $property_detail->value;
																break;
															}
														  }?>" >														
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Bathrooms :</label>
													<input name="property_detail[6][name]" style = "display:none" value = "bathrooms">
													<input name="property_detail[6][value]" type="number" class="form-control" value = "<?php
														foreach($property_details as $property_detail) {
															if($property_detail->name == "bathrooms"){
																echo  $property_detail->value;
																break;
															}
														  }?>">														
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Garages :</label>
													<input name="property_detail[7][name]" style = "display:none" value = "garages">
													<input name="property_detail[7][value]" type="number" class="form-control" value = "<?php
														foreach($property_details as $property_detail) {
															if($property_detail->name == "garages"){
																echo  $property_detail->value;
																break;
															}
														  }?>">														
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Area (ft²) :</label>
													<input name="property_detail[8][name]" style = "display:none" value = "area">
													<input name="property_detail[8][value]" type="number" class="form-control" value = "<?php
														foreach($property_details as $property_detail) {
															if($property_detail->name == "area"){
																echo  $property_detail->value;
																break;
															}
														  }?>">														
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Year built :</label>
													<input name="property_detail[9][name]" style = "display:none" value = "year">
													<input name="property_detail[9][value]" type="number" class="form-control"value = "<?php
														foreach($property_details as $property_detail) {
															if($property_detail->name == "year"){
																echo  $property_detail->value;
																break;
															}
														  }?>" >														
												</div>
											</div>
											<div class="col-md-12" style = "margin-top: 20px">
												<label>Features :</label>
												<div class="form-check">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck1" name = "features[]"
														<?php foreach($property_current_features as $property_current_feature) {
															if($property_current_feature->property_feature_id == '1'){
																echo  "checked";
																break;
															}
														  } ?>>
														<label class="custom-control-label" for="customCheck1" >Air Conditioning</label>
													</div>

													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck2" name = "features[]"
														<?php foreach($property_current_features as $property_current_feature) {
															if($property_current_feature->property_feature_id == '2'){
																echo  "checked";
																break;
															}
														  } ?>>
														<label class="custom-control-label" for="customCheck2">Barbeque</label>
													</div>

													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck3"  name = "features[]"
														<?php foreach($property_current_features as $property_current_feature) {
															if($property_current_feature->property_feature_id == '3'){
																echo  "checked";
																break;
															}
														  } ?>>
														<label class="custom-control-label" for="customCheck3">Dryer</label>
													</div>

													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck4" name = "features[]"
														<?php foreach($property_current_features as $property_current_feature) {
															if($property_current_feature->property_feature_id == '4'){
																echo  "checked";
																break;
															}
														  } ?>>
														<label class="custom-control-label" for="customCheck4">Microwave</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck5" name = "features[]"
														<?php foreach($property_current_features as $property_current_feature) {
															if($property_current_feature->property_feature_id == '5'){
																echo  "checked";
																break;
															}
														  } ?>>
														<label class="custom-control-label" for="customCheck5">Refrigerator</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck6" name = "features[]"
														<?php foreach($property_current_features as $property_current_feature) {
															if($property_current_feature->property_feature_id == '6'){
																echo  "checked";
																break;
															}
														  } ?>>
														<label class="custom-control-label" for="customCheck6">TV Cable</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck7" name = "features[]"
														<?php foreach($property_current_features as $property_current_feature) {
															if($property_current_feature->property_feature_id == '7'){
																echo  "checked";
																break;
															}
														  } ?>>
														<label class="custom-control-label" for="customCheck7">Sauna</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck8" name = "features[]"
														<?php foreach($property_current_features as $property_current_feature) {
															if($property_current_feature->property_feature_id == '8'){
																echo  "checked";
																break;
															}
														  } ?>>
														<label class="custom-control-label" for="customCheck8">WiFi</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck9" name = "features[]"
														<?php foreach($property_current_features as $property_current_feature) {
															if($property_current_feature->property_feature_id == '9'){
																echo  "checked";
																break;
															}
														  } ?> >
														<label class="custom-control-label" for="customCheck9">Fireplace</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck10" name = "features[]"
														<?php foreach($property_current_features as $property_current_feature) {
															if($property_current_feature->property_feature_id == '10'){
																echo  "checked";
																break;
															}
														  } ?> >
														<label class="custom-control-label" for="customCheck10">Swimming Pool</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck11" name = "features[]"
														<?php foreach($property_current_features as $property_current_feature) {
															if($property_current_feature->property_feature_id == '11'){
																echo  "checked";
																break;
															}
														  } ?>>
														<label class="custom-control-label" for="customCheck11">Gym</label>
													</div>
												</div>
											</div>
									</div>
								</div>
								<div class="tab-pane" id="media">
									<h4> VIDEOS </h4>
									<div class="row">
										@if(!empty($property_videos))
											<?php $count_video = 0;?>
											@foreach($property_videos as $property_video)
											<div class="demo col-md-12" style="padding: 0; clear: both;">
												<div class="col-md-4">
													<div class="form-group">
														<input class="form-control" placeholder="Name" type="text" name = "galleries_video[0][name]" id="video_name_{{$count_video}}" value = "{{$property_video->name}}">
													</div>
												</div>
												<div class="col-md-7">
													<div class="form-group">
														<input class="form-control" placeholder="Link" type="text" name = "galleries_video[0][link]" id="video_link_{{$count_video}} " value = "{{$property_video->small}}">														
													</div>
												</div>
												@if($count_video == 0)
												<div class="col-md-1"> 
													<a href="javascript:void(0)" class="addnew">
														<div class="rmv_crcl">
															<i class="fa fa-plus-circle" aria-hidden="true"></i>
														</div>
													</a> 
												</div>
												@else
												<div class="col-md-1">
													<a href="javascript:void(0)" class="" onClick="removeMe(this,'demo')">
														<div class="rmv_crcl">
															<i class="fa fa-minus-circle" aria-hidden="true"></i>
														</div>
													</a>
												</div>
												@endif
											</div>
											<?php $count_video++;?>
											@endforeach
										@else
											<div class="demo col-md-12" style="padding: 0; clear: both;">
												<div class="col-md-4">
													<div class="form-group">
														<input class="form-control" placeholder="Name" type="text" id="video_name_0" name = "galleries_video[0][name]" >
													</div>
												</div>
												<div class="col-md-7">
													<div class="form-group">
														<input class="form-control" placeholder="Link" type="text" id="video_link_0" name = "galleries_video[0][link]" >														
													</div>
												</div>
												<div class="col-md-1"> 
													<a href="javascript:void(0)" class="addnew">
														<div class="rmv_crcl">
															<i class="fa fa-plus-circle" aria-hidden="true"></i>
														</div>
													</a> 
												</div>
											</div>
										@endif
									</div>

									<h4> PLANS </h4>
									<div class="row">
										@if(!empty($property_plans))	
										<?php $count_plans = 0;?>		
											@foreach($property_plans as $property_plan)
												<div class="demo_1 col-md-12" style="padding: 0; clear: both;">
													<div class = "row plan" >
														<div class="col-md-4">
															<div class="form-group">
																<input class="form-control" placeholder="Name" type="text" id="plans_name_{{$count_plans}}"  name = "plan[0][name]" value = "{{$property_plan->name}}">
															</div>
														</div>
														<div class="col-md-7">
															<div class="form-group">
																<input class="form-control" placeholder="Description" type="text" id="plans_desc_{{$count_plans}}" name = "plan[0][description]" value = "{{$property_plan->description}}">														
															</div>
														</div>
														@if($count_plans == 0)
														<div class="col-md-1"> 
															<a href="javascript:void(0)" class="addnew_1">
																<div class="rmv_crcl">
																	<i class="fa fa-plus-circle" aria-hidden="true"></i>
																</div>
															</a> 
														</div>
														@else
														<div class="col-md-1"> 
															<a href="javascript:void(0)" class="" onClick="removeMe(this,'demo_1')">
																<div class="rmv_crcl">
																	<i class="fa fa-minus-circle" aria-hidden="true"></i>
																</div>
															</a>
														</div>

														@endif
													</div>
													<div class = "row plan">
														<div class = "col-md-4">
															<div class="form-group">
																<input class="form-control" placeholder="Area (ft²)" type="text" name = "plan[0][area]" id="area_{{$count_plans}}" value = "{{$property_plan->area}}">
															</div>
														</div>
														<div class = "col-md-4">
															<div class="form-group">
																<input class="form-control" placeholder="Rooms" type="text" name = "plan[0][rooms]" id="room_{{$count_plans}}" value = "{{$property_plan->rooms}}">
															</div>
														</div>
														<div class = "col-md-3">
															<div class="form-group">
																<input class="form-control" placeholder="Baths" type="text" name = "plan[0][baths]" id="bath_{{$count_plans}}" value = "{{$property_plan->baths}}">
															</div>
														</div>
														<div class = "col-md-1">
														</div>
													</div>
													<div class = "row plan">
														<div class="form-group">
															<label class="text-left col-md-3">Upload Image or Add a Link</label>
															<div class ="col-md-12">
																<img class="img-upload-preview" id="blah_{{$count_plans}}" src="http://{{$_SERVER['HTTP_HOST']}}/{{$property_plan->small}}" name = "plan[0][image]" alt="preview" width = "100" >
															</div>
															<div class ="col-md-12">
																<input type='file' id="imgInp_{{$count_plans}}" onchange = "upload_image({{$count_plans}})"/>
															</div>
															<div class ="col-md-12">
																<input class="form-control" placeholder="Add a Link" type="text" id="image_link_{{$count_plans}}" style = "width: 550px;" onchange = "add_image_link({{$count_plans}})">	
															</div>															
														</div>
													</div>
												</div>
											<?php $count_plans ++;?>
											@endforeach
										@else
										<div class="demo_1 col-md-12" style="padding: 0; clear: both;">
											<div class = "row plan" >
												<div class="col-md-4">
													<div class="form-group">
														<input class="form-control" placeholder="Name" type="text" id="plans_name_0" name = "plan[0][name]">
													</div>
												</div>
												<div class="col-md-7">
													<div class="form-group">
														<input class="form-control" placeholder="Description" type="text" id="plans_desc_0" name = "plan[0][description]">														
													</div>
												</div>
												<div class="col-md-1"> 
													<a href="javascript:void(0)" class="addnew_1">
														<div class="rmv_crcl">
															<i class="fa fa-plus-circle" aria-hidden="true"></i>
														</div>
													</a> 
												</div>
											</div>
											<div class = "row plan">
												<div class = "col-md-4">
													<div class="form-group">
														<input class="form-control" placeholder="Area (ft²)" type="text" id="area_0"  name = "plan[0][area]">
													</div>
												</div>
												<div class = "col-md-4">
													<div class="form-group">
														<input class="form-control" placeholder="Rooms" type="text" id="room_0" name = "plan[0][rooms]">
													</div>
												</div>
												<div class = "col-md-3">
													<div class="form-group">
														<input class="form-control" placeholder="Baths" type="text" id="bath_0" name = "plan[0][baths]">
													</div>
												</div>
												<div class = "col-md-1">
												</div>
											</div>
											<div class = "row plan">
												<div class="form-group">
													<label class="text-left col-md-3">Upload Image or Add a Link</label>
													<div class ="col-md-12">
														<img class="img-upload-preview" id="blah_0" src="/assets/img/default.jpg" alt="preview" width = "100" name = "plan[0][image]">
													</div>
													<div class ="col-md-12">
														<input type='file' id="imgInp_0" onchange = "upload_image(0)"/>
													</div>
													<div class ="col-md-12">
														<input class="form-control" placeholder="Add a Link" type="text" id="image_link_0" style = "width: 550px;" onchange = "add_image_link(0)">	
													</div>															
												</div>
											</div>
										</div>
										@endif
									</div>

									<h4> ADDITIONAL FEATURES </h4>
									<div class="row">
										@if(!empty($property_additional_features))
										<?php $count_additional_features = 0;?>
											@foreach($property_additional_features as $property_additional_feature)
												<div class="demo_2 col-md-12" style="padding: 0; clear: both;">
													<div class="col-md-4">
														<div class="form-group">
															<input class="form-control" placeholder="Name" type="text" id="additional_feature_name_{{$count_additional_features}}" value = "{{$property_additional_feature->name}}" name = "additional_features[0][name]">
														</div>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input class="form-control" placeholder="Value" type="text" id="additional_feature_value_{{$count_additional_features}}" value = "{{$property_additional_feature->value}}" name = "additional_features[0][value]">														
														</div>
													</div>
													@if($count_additional_features == 0)
													<div class="col-md-1"> 
														<a href="javascript:void(0)" class="addnew_2">
															<div class="rmv_crcl">
																<i class="fa fa-plus-circle" aria-hidden="true"></i>
															</div>
														</a> 
													</div>
													@else
													<div class="col-md-1"> 
														<a href="javascript:void(0)" class="" onClick="removeMe(this,'demo_2')">
															<div class="rmv_crcl">
																<i class="fa fa-minus-circle" aria-hidden="true"></i>
															</div>
														</a>
													</div>

													@endif
												</div>
												<?php $count_additional_features ++;?>
											@endforeach
										@else
										<div class="demo_2 col-md-12" style="padding: 0; clear: both;">
											
											<div class="col-md-4">
												<div class="form-group">
													<input class="form-control" placeholder="Name" type="text" id="additional_feature_name_0"  name = "additional_features[0][name]">
												</div>
											</div>
											<div class="col-md-7">
												<div class="form-group">
													<input class="form-control" placeholder="Value" type="text" id="additional_feature_value_0"  name = "additional_features[0][value]">														
												</div>
											</div>
											<div class="col-md-1"> 
												<a href="javascript:void(0)" class="addnew_2">
													<div class="rmv_crcl">
														<i class="fa fa-plus-circle" aria-hidden="true"></i>
													</div>
												</a> 
											</div>
										</div>
										@endif
									</div>
									<div class = "row">
										<div class="form-check">
											<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> </span></label>
											<div class="col-lg-4 col-md-9 col-sm-8 d-flex align-items-center">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="is_featured" name="is_featured" 
													<?php 
														if($property->featured == 1){
															echo "checked";
														}
													?>>
													<label class="custom-control-label" for="is_featured">Featured</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								
							</div>
						</div>

						<div class="wizard-action">
							<div class="pull-left">
								<input type="button" class="btn btn-previous btn-fill btn-black" name="previous" value="Previous">
							</div>
							<div class="pull-right">
								<input type="button" class="btn btn-next btn-danger" name="next" value="Next">
								<input type="submit" class="btn btn-finish btn-danger" name="finish" value="Update" style="display: none;">
							</div>
							<div class="clearfix"></div>
						</div>
					</form>
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

<!-- jQuery Validation -->
<script src="/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>
<script src="/assets/js/plugin/select2/select2.full.min.js"></script>
<!-- Atlantis JS -->
<script src="/assets/js/atlantis.min.js"></script>
<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="/assets/js/setting-demo2.js"></script>
<script src="{{ mix('/js/mdl.js') }}"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>

<!-- <script src="js/bootstrap-imgupload.js"></script> -->
<script>
		
		var count_video = <?php if(!empty($property_videos)) echo count($property_videos); else echo 0;?>;
		var count_plan = <?php if(!empty($property_plans)) echo count($property_plans); else echo 0;?>;
		var count_additional_feature = <?php if(!empty($property_additional_features)) echo count($property_additional_features); else echo 0;?>;
		var video_num = <?php if(!empty($property_videos)) echo count($property_videos); else echo 0;?>;
		var plan_num = <?php if(!empty($property_plans)) echo count($property_plans); else echo 0;?>;
		var additional_feature_num = <?php if(!empty($property_additional_features)) echo count($property_additional_features); else echo 0;?>;
		var property_galleries = [];
		property_galleries = <?php if(!empty($property_galleries)) echo json_encode($property_galleries);?>; 
		
		var $validator = $('.wizard-container form').validate({
			validClass : "success",
			highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
			},
			success: function(element) {
				$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			}
		});
	

        
		function removeMe(cc,dd){

			// console.log(dd);
			if (dd == "demo"){
				count_video --;
			}else if(dd == "demo_1"){
				count_plan --;
			}else{
				count_additional_feature--;
			}

			$(cc).closest('.'+dd).remove();

		}
		function readURL(input, id) {
			console.log(input);
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function(e) {
			$('#blah_' + id).attr('src', e.target.result);
			}
			
			reader.readAsDataURL(input.files[0]); // convert to base64 string
		}
		}
		function add_image_link(id){
			$("#imgInp_" + id).val('');		
			$('#blah_' + id).attr('src', $("#image_link_"+id).val());

		}
		function upload_image(id){
			$("#image_link_" + id).val('');
			readURL($("#imgInp_" + id)[0], id);
			
		}
		function refreshAnimation(n, t) {
			// var i = n.find("li").length
			var i = 4
			, e = n.width() / i
			, o = e;
			e *= t;
			var a = t + 1;
			// 0 == a ? e -= 10 : a == i && (e += 10),
			n.find(".moving-tab").css("width", o),
			$(".moving-tab").css({
				transform: "translate3d(" + e + "px, 0px, 0)",
				transition: "all 0.5s cubic-bezier(0.29, 1.42, 0.79, 1)"
			})
		}
		!function(n) {
			n.fn.bootstrapWizard = function(t) {
				if ("string" == typeof t) {
					var i = Array.prototype.slice.call(arguments, one);
					return one === i.length && i.toString(),
					this.data("bootstrapWizard")[t](i)
				}
				return this.each(function(i) {
					var e = n(this);
					if (!e.data("bootstrapWizard")) {
						var o = new function(t, i) {
							t = n(t);
							var e = this
							, o = 'li:has([data-toggle="tab"])'
							, a = n.extend({}, n.fn.bootstrapWizard.defaults, i)
							, r = null
							, s = null
							, d = null;
							this.rebindClick = function(n, t) {
								n.unbind("click", t).bind("click", t)
							}
							,
							this.fixNavigationButtons = function() {
								if (r.length || (s.find("a:first").tab("show"),
								r = s.find(o + ":first")),
								n(a.previousSelector, t).toggleClass("disabled", e.firstIndex() >= e.currentIndex()),
								n(a.nextSelector, t).toggleClass("disabled", e.currentIndex() >= e.navigationLength()),
								e.rebindClick(n(a.nextSelector, t), e.next),
								e.rebindClick(n(a.previousSelector, t), e.previous),
								e.rebindClick(n(a.lastSelector, t), e.last),
								e.rebindClick(n(a.firstSelector, t), e.first),
								a.onTabShow && "function" == typeof a.onTabShow && !1 === a.onTabShow(r, s, e.currentIndex()))
									return !1
							}
							,
							this.next = function(n) {
								return !t.hasClass("last") && (!a.onNext || "function" != typeof a.onNext || !1 !== a.onNext(r, s, e.nextIndex())) && void ((d = e.nextIndex()) > e.navigationLength() || s.find(o + ":eq(" + d + ") a").tab("show"))
							}
							,
							this.previous = function(n) {
								return !t.hasClass("first") && (!a.onPrevious || "function" != typeof a.onPrevious || !1 !== a.onPrevious(r, s, e.previousIndex())) && void ((d = e.previousIndex()) < 0 || s.find(o + ":eq(" + d + ") a").tab("show"))
							}
							,
							this.first = function(n) {
								return (!a.onFirst || "function" != typeof a.onFirst || !1 !== a.onFirst(r, s, e.firstIndex())) && !t.hasClass("disabled") && void s.find(o + ":eq(0) a").tab("show")
							}
							,
							this.last = function(n) {
								return (!a.onLast || "function" != typeof a.onLast || !1 !== a.onLast(r, s, e.lastIndex())) && !t.hasClass("disabled") && void s.find(o + ":eq(" + e.navigationLength() + ") a").tab("show")
							}
							,
							this.currentIndex = function() {
								return s.find(o).index(r)
							}
							,
							this.firstIndex = function() {
								return 0
							}
							,
							this.lastIndex = function() {
								return e.navigationLength()
							}
							,
							this.getIndex = function(n) {
								return s.find(o).index(n)
							}
							,
							this.nextIndex = function() {
								return s.find(o).index(r) + 1
							}
							,
							this.previousIndex = function() {
								return s.find(o).index(r) - 1
							}
							,
							this.navigationLength = function() {
								return s.find(o).length - 1
							}
							,
							this.activeTab = function() {
								return r
							}
							,
							this.nextTab = function() {
								return s.find(o + ":eq(" + (e.currentIndex() + 1) + ")").length ? s.find(o + ":eq(" + (e.currentIndex() + 1) + ")") : null
							}
							,
							this.previousTab = function() {
								return e.currentIndex() <= 0 ? null : s.find(o + ":eq(" + parseInt(e.currentIndex() - 1) + ")")
							}
							,
							this.show = function(n) {
								return isNaN(n) ? t.find(o + " a[href=#" + n + "]").tab("show") : t.find(o + ":eq(" + n + ") a").tab("show")
							}
							,
							this.disable = function(n) {
								s.find(o + ":eq(" + n + ")").addClass("disabled")
							}
							,
							this.enable = function(n) {
								s.find(o + ":eq(" + n + ")").removeClass("disabled")
							}
							,
							this.hide = function(n) {
								s.find(o + ":eq(" + n + ")").hide()
							}
							,
							this.display = function(n) {
								s.find(o + ":eq(" + n + ")").show()
							}
							,
							this.remove = function(t) {
								var i = t[0]
								, e = void 0 !== t[1] && t[1]
								, a = s.find(o + ":eq(" + i + ")");
								if (e) {
									var r = a.find("a").attr("href");
									n(r).remove()
								}
								a.remove()
							}
							;
							var l = function(t) {
								var i = s.find(o).index(n(t.currentTarget).parent(o));
								if (a.onTabClick && "function" == typeof a.onTabClick && !1 === a.onTabClick(r, s, e.currentIndex(), i))
									return !1
							}
							, f = function(t) {
								var i = n(t.target).parent()
								, d = s.find(o).index(i);
								return !i.hasClass("disabled") && (!a.onTabChange || "function" != typeof a.onTabChange || !1 !== a.onTabChange(r, s, e.currentIndex(), d)) && (r = i,
								void e.fixNavigationButtons())
							};
							this.resetWizard = function() {
								n('a[data-toggle="tab"]', s).off("click", l),
								n('a[data-toggle="tab"]', s).off("shown shown.bs.tab", f),
								s = t.find("ul:first", t),
								r = s.find(o + ".active", t),
								n('a[data-toggle="tab"]', s).on("click", l),
								n('a[data-toggle="tab"]', s).on("shown shown.bs.tab", f),
								e.fixNavigationButtons()
							}
							,
							s = t.find("ul:first", t),
							r = s.find(o + ".active", t),
							s.hasClass(a.tabClass) || s.addClass(a.tabClass),
							a.onInit && "function" == typeof a.onInit && a.onInit(r, s, 0),
							a.onShow && "function" == typeof a.onShow && a.onShow(r, s, e.nextIndex()),
							n('a[data-toggle="tab"]', s).on("click", l),
							n('a[data-toggle="tab"]', s).on("shown shown.bs.tab", f)
						}
						(e,t);
						e.data("bootstrapWizard", o),
						o.fixNavigationButtons()
					}
				})
			}
			,
			n.fn.bootstrapWizard.defaults = {
				tabClass: "nav nav-pills",
				nextSelector: ".wizard li.next",
				previousSelector: ".wizard li.previous",
				firstSelector: ".wizard li.first",
				lastSelector: ".wizard li.last",
				onShow: null,
				onInit: null,
				onNext: null,
				onPrevious: null,
				onLast: null,
				onFirst: null,
				onTabChange: null,
				onTabClick: null,
				onTabShow: null
			}
		}(jQuery),
		$(".wizard-container").bootstrapWizard({
			tabClass: "wizard-menu nav nav-pills",
			nextSelector: ".btn-next",
			previousSelector: ".btn-previous",
			onNext: function(n, t, i) {
				if (!$(".wizard-container form").valid())
					return $validator.focusInvalid(),
					!1
			},
			onPrevious: function(n, t, i) {
				if (!$(".wizard-container form").valid())
					return $validator.focusInvalid(),
					!1
			},
			onInit: function(n, t, i) {
				var e = t.find("li").length
				, o = 100 / e
				, a = t.closest(".wizard-container");
				$(document).width() < 600 && e > 3 && (o = 50),
				t.find("li").css("width", o + "%");
				var r = t.find("li:first-child a").html()
				, s = $('<div class="moving-tab"> </div>');
				s.append(r),
				$(".wizard-container .wizard-menu").append(s),
				refreshAnimation(a, i),
				$(".moving-tab").css("transition", "transform 0s")
			},
			onTabClick: function(n, t, i) {
				return !!$(".wizard-container form").valid()
			},
			onTabShow: function(n, t, i) {
				var e = t.find("li").length
				, o = i + 1
				, a = o / e * 100;
				$(".wizard-container").find(".progress-bar").css({
					width: a + "%"
				});
				var r = t.closest(".wizard-container");
				o >= e ? ($(r).find(".btn-next").hide(),
				$(r).find(".btn-finish").show()) : ($(r).find(".btn-next").show(),
				$(r).find(".btn-finish").hide());
				var s = t.find("li:nth-child(" + o + ") a").html();
				setTimeout(function() {
					$(".moving-tab").html(s)
				}, 150);
				var d = $(".footer-checkbox");
				0 == !i ? $(d).css({
					opacity: "0",
					visibility: "hidden",
					position: "absolute"
				}) : $(d).css({
					opacity: "1",
					visibility: "visible"
				}),
				refreshAnimation(r, i)
			}
		});
		$("#property_title").on('change', function(){
			$('#property_title_confirm').html($("#property_title")[0].value);
		})
		$('#selectPropertyStatus').select2({
			theme: "bootstrap"
		});
		$('.addnew').click(function(){
			count_video ++;
			video_num ++;
			var addhtml1 = '<div class="col-md-4"><div class="form-group"><input class="form-control" placeholder="Name" type="text" name = galleries_video['+video_num+'][name]  id="video_name_'+video_num+'"></div></div><div class="col-md-7"><div class="form-group"><input class="form-control" placeholder="Link" type="text" name = galleries_video['+video_num+'][link] id="video_link_'+video_num+'"></div></div><div class="col-md-1"> <a href="javascript:void(0)" class="" onClick="removeMe(this,\'demo\')"><div class="rmv_crcl"><i class="fa fa-minus-circle" aria-hidden="true"></i></div></a></div>';
		
			$(this).closest('.demo').clone().html(addhtml1).insertAfter($(this).closest('.demo'));

		})

		$('.addnew_1').click(function(){
			count_plan ++;
			plan_num ++;
			
			var addhtml1 = '<div class = "row plan" ><div class="col-md-4"><div class="form-group"><input class="form-control" placeholder="Name" type="text" name = "plan['+ plan_num +'][name]" id="plans_name_'+ plan_num +'"></div></div><div class="col-md-7"><div class="form-group"><input class="form-control" placeholder="Description" type="text" id="plans_desc_'+ plan_num +'" name = "plan['+ plan_num +'][description]"></div></div><div class="col-md-1"> <a href="javascript:void(0)" class="" onClick="removeMe(this,\'demo_1\')"><div class="rmv_crcl"><i class="fa fa-minus-circle" aria-hidden="true"></i></div></a> </div></div>';
			addhtml1 += '<div class = "row plan"><div class = "col-md-4"><div class="form-group"><input class="form-control" placeholder="Area (ft²)" type="text" id="area_'+ plan_num +'" name = "plan['+ plan_num +'][area]"></div></div><div class = "col-md-4"><div class="form-group"><input class="form-control" placeholder="Rooms" type="text" id="room_'+ plan_num +'" name = "plan['+ plan_num +'][rooms]"></div></div><div class = "col-md-3"><div class="form-group"><input class="form-control" placeholder="Baths" type="text" id="bath_'+ plan_num +'"  name = "plan['+ plan_num +'][baths]"></div></div><div class = "col-md-1"></div></div>';
			addhtml1 += '<div class = "row plan"><div class="form-group"><label class="text-left col-md-3">Upload Image or Add a Link</label><div class ="col-md-12"><img class="img-upload-preview" id="blah_'+ plan_num +'" src="/assets/img/default.jpg" alt="preview" width = "100"></div><div class ="col-md-12"><input type="file" id="imgInp_'+ plan_num +'" onchange = "upload_image('+ plan_num +')"/></div><div class ="col-md-12"><input class="form-control" placeholder="Add a Link" type="text" id="image_link_'+ plan_num+'" style = "width: 550px;" onchange = "add_image_link('+ plan_num+')"></div></div></div>';
			$(this).closest('.demo_1').clone().html(addhtml1).insertAfter($(this).closest('.demo_1'));

		})

		$('.addnew_2').click(function(){
			count_additional_feature ++;
			additional_feature_num ++;
			var addhtml1 = '<div class="col-md-4"><div class="form-group"><input class="form-control" placeholder="Name" type="text" name = "additional_features['+additional_feature_num+'][name]" id="additional_feature_name_'+additional_feature_num+'"></div></div><div class="col-md-7"><div class="form-group"><input class="form-control" placeholder="Value" type="text" name = "additional_features['+additional_feature_num+'][value]" id="additional_feature_value_'+additional_feature_num+'"></div></div><div class="col-md-1"> <a href="javascript:void(0)" class="" onClick="removeMe(this,\'demo_2\')"><div class="rmv_crcl"><i class="fa fa-minus-circle" aria-hidden="true"></i></div></a></div>';
			$(this).closest('.demo_2').clone().html(addhtml1).insertAfter($(this).closest('.demo_2'));

		})
		

		$("#file-1").fileinput({
            theme: 'fa',
            uploadUrl: "/properties/image_upload",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            overwriteInitial: false,
            maxFileSize:2000,
            maxFilesNum: 10,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
		});
		function addFile(url, i) {
			fetch(url)
			.then(res => res.blob()) // Gets the response and returns it as a blob
			.then(blob => {
				function FileListItem(a) {
					a = [].slice.call(Array.isArray(a) ? a : arguments)
					for (var c, b = c = a.length, d = !0; b-- && d;) d = a[b] instanceof Blob 
					if (!d) throw new TypeError("expected argument to FileList is File or array of File objects")
					for (b = (new ClipboardEvent("")).clipboardData || new DataTransfer; c--;) b.items.add(a[c])
					return b.files
				}
				function blobToFile(theBlob, fileName){
					//A Blob() is almost a File() - it's just missing the two properties below which we will add
					theBlob.lastModifiedDate = new Date();
					theBlob.name = fileName;
					return theBlob;
				}

				var files = [
					new File([blob], (i+1)+".jpg", {type: "image/jpeg", lastModifiedDate: new Date()})
				];

				var fileElement = $("#file-1");
				fileElement[0].files = new FileListItem(files)
				var event = new Event("change");
				fileElement[0].dispatchEvent(event);
			});
		}
		$( document ).ready(function() {
			for(let i = 0; i < property_galleries.length; i++){
				var url = 'http://' + '<?php echo $_SERVER['HTTP_HOST'];?>' + '/' + property_galleries[i].small;
				addFile(url, i);
			}
		});
</script>
<style>
	.moving-tab{
		width: 25% !important;
	}
	.wizard-container{
		background: #202940!important;
		border:none!important;
	}
	body[data-background-color="dark"] .nav-pills .nav-link:not(.active){
		background:rgba(199, 199, 199, 0.2) !important;
	}
	.wizard-container .wizard-header .wizard-title{
		color:white !important;
	}
	.main-section{
		margin:0 auto;
		padding: 20px;
		margin-top: 100px;
		background-color: #fff;
		box-shadow: 0px 0px 20px #c1c1c1;

	}

	.fileinput-remove,	.fileinput-upload{

		display: none;

	}
	.demo, .demo_2{
		display:inline-flex;
		margin-bottom: 20px;
	}
	.demo_1{
		margin-bottom: 20px;
	}
	.rmv_crcl{
		margin-top:20px
	}
	p{
		margin-left: 30px;
		margin-top: 17px;

	}
	.plan{
		margin-right: 5px;
		margin-left: 5px;
	}
	.col-md-12{
		margin-top:10px;
	}
	.nav-pills.nav-primary .nav-link.active{
		background: #1572E8 !important;
		color: white !important;
	}
</style>
@endsection
