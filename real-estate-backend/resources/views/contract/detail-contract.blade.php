@extends('layouts.admin')


@section('template_title')
  detail New contract
@endsection

@section('header')
  detail New contract
@endsection

@section('template_linked_css')
    <link href="/assets/fonts/fonts.googleapis.css" rel="stylesheet" type="text/css">
    <link href="/assets/fonts/fonts.googleapis.icons.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mdl-themes/material.min.css') }}" id="user_theme_link">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
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
	if($contract->logo){
		$contractLogoImage = $contract->logo;
	}else{
		$contractLogoImage = '/assets/img/default.jpg';
	}
@endphp
@section('content')
	<div class="main-panel">
		<div class="container">
			<div class="page-inner">
				<div data-background-color="dark">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Customer: {{$contract->customer->first_name}} {{$contract->customer->last_name}}</div>
								</div>
								{{ csrf_field() }}
								<div class="card-body">
									<h2 class='text-center text-light'>{{$contract->property->title}}</h2>

									<div class="form-group form-show-validation">
										<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-centre">Detail </label>
										<div class="col-lg-8 col-md-9 col-sm-8">
											<textarea class="form-control" disabled id="w3review" name="w3review" rows="10" cols="40"> {{$contract->detail}} </textarea>
										</div>
									</div>

									<div class="row d-flex flex-row" style = "margin-top: 20px"  >
										<div class="col-md-3">
											<label>Buy/Rent :</label>
											<div class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="optradio" disabled <?php if($contract->type == "BUY") echo "checked"?>>
													<label class="custom-control-label">BUY</label>
											</div>

											<div class="custom-control custom-radio col-md-2">
													<input type="radio" class="custom-control-input" name="optradio" disabled <?php if($contract->type == "RENT") echo "checked"?>>
													<label class="custom-control-label">RENT</label>
											</div>

											

										</div>
										<div class="col-md-9 d-flex align-items-baseline">
											<label class=" ">Contract Date: </label>
											<input class="form-control col-md-3" style="width:100%" value="{{$contract->created_at}}">
											<div class="custom-control custom-checkbox" style="margin-left:10%">
												<input type="checkbox" class="custom-control-input"  
												<?php 
													if($contract->recurring == 1){
														echo "checked";
													}
												?>>
												<label class="custom-control-label">Recurring Payment</label>
											</div>
										</div>
							
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="card" style="overflow: visible;margin-top: 50px; border-radius: 10px; width: 100%">
							<div class="card-header">
								<div class="card-title">Payment History</div>
							</div>
							<div class="card-body">
								
								<div class="table-responsive material-table">
									<table id="user_table" class="mdl-data-table mdl-js-data-table data-table" cellspacing="0" width="100%">
									<thead>
											<tr>
												<th class="mdl-data-table__cell--non-numeric no-display">ID</th>
												<th class="mdl-data-table__cell--non-numeric">No</th>
												<th class="mdl-data-table__cell--non-numeric">Paid Amount</th>
												<th class="mdl-data-table__cell--non-numeric">Time</th> 
											</tr>
									</thead>
									<tbody>
											<?php $i = 1; ?>
											@foreach ($pay_histories as $pay_history)
												<tr>
													<td class="mdl-data-table__cell no-display"><a>{{$pay_history->id}}</a></td>
													<td class="mdl-data-table__cell"><a>{{$i++}}</a></td>
													<td class="mdl-data-table__cell"><a>{{$pay_history->paid_amount}} $</a></td>
													<td class="mdl-data-table__cell"><a>{{$pay_history->created_at}}</a></td>
												</tr>
											@endforeach
									</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="mdl-card__menu">

							@include('partials.mdl-search')

						</div>
					</div>
				</div>
			</div>
		</div>
			
	</div>
	@include('dialogs.dialog-delete')

@endsection

@section('footer_scripts')
    @include('includes.admin_script')    
    {!! HTML::script('/material/js/material.min.js', array('type' => 'text/javascript')) !!}
    {!! HTML::script('js/dialog-polyfill.min.js', array('type' => 'text/javascript')) !!}
    <script src="{{ mix('/js/mdl.js') }}"></script>
    @include('scripts.mdl-datatables')

    @include('scripts.highlighter-script')
    <style>
    .sbmt {
        float: right;
        width: auto;
        padding: 5px 35px;
        /* background: linear-gradient(0deg, rgba(255,123,26,0.9) 0%, rgb(255, 92, 7, 0.9) 100%); */
        border-radius: 8px;
        font-size: 17px;
        color: #fff !important;
        text-decoration: none !important;
        /* box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); */
        margin-top:7px;
    }
    .mdl-card__menu{
        top:2px !important
    } 
    .mdl-card__title{
        border-bottom: 1px solid #ebecec !important;
    }
    div.material-table .table-footer select{
        color:white !important
    }
    div.material-table .table-footer{
        color: rgba(169, 175, 187, 0.82) !important;
    }
    .material-table .pagination .mdl-button.mdl-button--colored{
        color: rgba(169, 175, 187, 0.82) !important;
    }

    </style>
    
@endsection