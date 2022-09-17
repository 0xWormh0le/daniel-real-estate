@extends('layouts.admin')


@section('template_title')
  detail New application
@endsection

@section('header')
  detail New application
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
        <a itemprop="item" href="/detail" disabled>
            <span itemprop="name">
                detail List
            </span>
        </a>
        <meta itemprop="position" content="2" />
    </li>
@endsection
@php
	if($application->logo){
		$applicationLogoImage = $application->logo;
	}else{
		$applicationLogoImage = '/assets/img/default.jpg';
	}
@endphp
@section('content')
<div class="main-panel">
	<div class="container">
		<div class="page-inner">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header d-flex">
							<div class="card-title p-2">Customer: {{$application->customer->first_name}} {{$application->customer->last_name}} </div>
							<div class="card-title ml-auto p-2" style="color:#f15e47;"> @if ($application->status == 0) Pending @elseif ($application->status == 1) Accepted @else Rejected @endif </div>
						</div>
						<form method="POST" action="{{ route('create_contract') }}">
							{{ csrf_field() }}
							<div class="card-body">
								<div class="row">

									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Email </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="email" class="form-control" value="{{$application->email}}" >
										</div>
									</div>

									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">HomeTitle </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->property->title}}" >
										</div>
									</div>

									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Rent/Buy </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											@if($application->rent_or_buy === 1)
												<input disabled type="text" class="form-control" value="Buy" >
											@else
												<input disabled type="text" class="form-control" value="Rent" >
											@endif
										</div>
									</div>

									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Period </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->period}} months" >
										</div>
									</div>

									
								</div>

								<div class="separator-solid"></div>

								<div class="row">
									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Address </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->address}}" >
										</div>
									</div>

									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">City </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->city}}" >
										</div>
									</div>

									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">State </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->state}}" >
										</div>
									</div>

									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Zip Code</label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->zip}}" >
										</div>
									</div>

									

								</div>
								
								<div class="separator-solid"></div>

								<div class="row">
									
									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">How long live?</label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->how_long_live}} year(s)" >
										</div>
									</div>

									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Phone Number </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->phone_number}}" >
										</div>
									</div>

									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Pet </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->pet}}" >
										</div>
									</div>

									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Pet Count </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->pet_count}}" >
										</div>
									</div>		

								</div>
								
								<div class="separator-solid"></div>

								<div class = "row">
									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Job </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->job}}" >
									</div>
									</div>
									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Job City </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->job_city}}" >
										</div>
									</div>

									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Job State </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->job_state}}" >
										</div>
									</div>
									
									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">How long work? </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->how_long_work}} year(s)" >
										</div>
									</div>

								</div>

								<div class="separator-solid"></div>

								<div class = "row">

								<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Monthly Income </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->monthly_income}} $" >
										</div>
									</div>

									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Sign </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<input disabled type="text" class="form-control" value="{{$application->sign}}" >
										</div>
									</div>		
									
									<div class="form-group form-show-validation col">
										<div class="col-lg-8 col-md-9 col-sm-8">
										</div>
									</div>	
									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre"></label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											
										</div>
									</div>	
								</div>					

								<div class="separator-solid"></div>
								
								<div class="row">
									<div class="form-group form-show-validation col">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Content </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<textarea class="form-control" disabled id="w3review" name="w3review" rows="10" cols="40"> {{$application->content}} </textarea>
										</div>
									</div>
								</div>
							</div>
							@if( $application->status == 0)

								<div class="card-action">
									<div class="row">
										<div class="col-md-10 text-right col">
											<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1" data-whatever="{{$application->email}}">Aceept</a>
										</div>	
										<div class="col-md-2 text-left col">
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="{{$application->email}}">Reject</a>
										</div>																		
									</div>
								</div>
							@endif
							<input type="hidden" name="user_id" value="{{$application->user_id}}">
							<input type="hidden" name="property_id" value="{{$application->property_id}}">
							<input type="hidden" name="application_id" value="{{$application->id}}">
							<input type="hidden" name="period" value="{{$application->period}}">
							<input type="hidden" name="type" value="{{$application->rent_or_buy}}">
							<input type="hidden" name="detail" value="{{$application->content}}">

							<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title text-dark" id="exampleModalLabel1">New message</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="form-group row">
											<h1 class = "col-7">Down Payment:</h1>
											<input name="down_payment" class="col form-control m-1" id="message-text"></input>
											<h1 class = "col-1">$</h1>
										</div>
										
										<div class="form-group row">
											<h1 class = "col-7">Monthly Payment:</h1>
											<input name="monthly_payment" class="col form-control m-1" id="message-text"></input>
											<h1 class = "col-1">$</h1>
										</div>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button id="idOK" type="submit" class="btn btn-primary">OK</button>
									</div>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	

	<form method="POST" action="{{route('reason_update', ['id' => $application->id] ) }}">
		{{ csrf_field() }}
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-dark" id="exampleModalLabel">New message</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<div for="recipient-name" class="col-form-label text-dark">Recipient:</div>
						<input type="text" class="form-control" id="recipient-name">
					</div>

					<div class="form-group">
						<div for="message-text" class="col-form-label text-dark">Reason:</div>
						<textarea name="reason" id = "idReason" class="form-control" id="message-text"></textarea>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Send message</button>
				</div>
			</div>
		</div>
	</form>

	
		
</div>
@endsection

@section('footer_scripts')

  @include('scripts.mdl-required-input-fix')
  @include('scripts.gmaps-address-lookup-api3')
<script>
	$('document').ready(function() {
		pricecount = 1;
	})
	$('#exampleModal').on('show.bs.modal', function (event) 
	{
		var button = $(event.relatedTarget) 
		var recipient = button.data('whatever') 
		var modal = $(this)
		modal.find('.modal-title').text('Message to ' + recipient)
		modal.find('.modal-body input').val(recipient)
	})

	$('#exampleModal1').on('show.bs.modal', function (event) 
	{
		var modal = $(this)
		modal.find('.modal-title').text('Payment Settings');
	})
	
</script>
@endsection
