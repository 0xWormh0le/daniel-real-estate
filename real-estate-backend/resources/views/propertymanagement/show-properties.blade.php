@extends('layouts.admin')

@section('template_title')
    Showing Properties
@endsection

@section('template_linked_css')
    <link href="/assets/fonts/fonts.googleapis.css" rel="stylesheet" type="text/css">
    <link href="/assets/fonts/fonts.googleapis.icons.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mdl-themes/material.min.css') }}" id="user_theme_link">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
@endsection

@section('header')
    Showing All Properties
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
                Property List
            </span>
        </a>
        <meta itemprop="position" content="2" />
    </li>
@endsection

@section('content')
    <div class="main-panel">
        <div class="container">
            <div class="page-inner">
                <div data-background-color="dark">
                    <div class = "row">
                        <div class = "col-md-3 company_list" >
                            <div class="form-group" style ="display:flex">
                                <label style = "margin-top: 10px; margin-right: 10px;">Company:</label>
                                <div class="select2-input">
                                    <select id="company" name="company" class="form-control">
                                        <option value="0">All companies</option>
                                        <?php
                                            foreach($companies as $company){
                                                if(!empty($company_id)){
                                                    if($company->id == $company_id){
                                                        echo('<option value="'.$company->id.'" selected>'.$company->name.'</option>');
                                                    }else{
                                                        echo('<option value="'.$company->id.'">'.$company->name.'</option>');
                                                    }
                                                }else{
                                                    echo('<option value="'.$company->id.'">'.$company->name.'</option>');
                                                }
                                            } 
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class = "col-md-1 company_list" >
                            <input type="button" class="sbmt btn btn-primary" value="Filter" onclick="showByCompany()" name="">
                        </div>
                        <div class = "col-md-4 ">
                            <!-- <input type="button" class="sbmt btn btn-primary" value="Reset" onclick="showAllLinks()" name=""> -->
                        </div>
                        <div class = "col-md-2">
                        </div>
                        <div class = "col-md-2">
                            <input type="button" class="sbmt btn btn-primary" value="Add Property" onclick="create_property()" name="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="card" style="overflow: visible;margin-top: 50px; border-radius: 10px; width: 100%">
                            <div class="card-header">
                                <h2 class="card-title" >                                
                                    
                                    @if (count($properties) === 1)
                                        {{ count($properties)}} Current Property
                                    @elseif (count($properties) > 1)
                                        Total {{ count($properties)}} Properties
                                    @else
                                        No Current Properties :(
                                    @endif
                                   
                                  
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive material-table">
                                    <table id="user_table" class="mdl-data-table mdl-js-data-table data-table" cellspacing="0" width="100%">
                                    <thead>
                                            <tr>
                                                <th class="mdl-data-table__cell--non-numeric no-display">ID</th>
                                                <th class="mdl-data-table__cell--non-numeric">Title</th>
                                                <!-- <th class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only">Description</th> -->
                                                <th class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only">Features</th>
                                                <th class="mdl-data-table__cell--non-numeric">Owner</th>
                                                <th class="mdl-data-table__cell--non-numeric">Company</th>
                                                <th class="mdl-data-table__cell--non-numeric">Property Type</th>
                                           
                                                <th class="mdl-data-table__cell--non-numeric no-sort no-search">Actions</th>
                                            
                                    </thead>
                                    <tbody>
                                            @foreach ($properties as $property)
                                                <tr>
                                                    <td class="mdl-data-table__cell--non-numeric no-display"><a>{{$property->id}}</a></td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a>{{$property->title}} </a></td>
                                                    <!-- <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a>{{$property->description}} </a></td> -->
                                                    <?php $temp_feature = 0;?>
                                                    @foreach($property_features as $property_feature)
                                                        @if($property->featured == $property_feature->id)
                                                            <?php $temp_feature = 1;?>
                                                            <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a>{{$property_feature->name}} </a></td>
                                                        @endif
                                                    @endforeach
                                                    @if($temp_feature == 0)
                                                        <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a> </a></td>
                                                    @endif


                                                    <?php $temp_owner = 0;?>
                                                    @foreach($users as $user)
                                                        @if($property->user_id == $user->id)
                                                            <?php $temp_owner = 1;?>
                                                            <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a>{{$user->first_name}}  {{$user->last_name}}</a></td>
                                                        @endif
                                                    @endforeach
                                                    @if($temp_owner == 0)
                                                        <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a> </a></td>
                                                    @endif

                                                    <?php $temp_company = 0;?>
                                                    @foreach($property_companies as $property_company)
                                                        @if($property->id == $property_company->id)
                                                            <?php $temp_company = 1;?>
                                                            <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a>{{$property_company->name}}</a></td>
                                                        @endif
                                                    @endforeach
                                                    @if($temp_company == 0)
                                                        <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a> </a></td>
                                                    @endif

                                                   
                                                    <?php $temp_property_type = 0;?>
                                                    @foreach($property_types as $property_type)
                                                        @if($property->property_type_id == $property_type->id)
                                                            <?php $temp_property_type = 1;?>
                                                            <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a>{{$property_type->name}}</a></td>
                                                        @endif
                                                    @endforeach
                                                    @if($temp_property_type == 0)
                                                        <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a> </a></td>
                                                    @endif


                                                    <td class="mdl-data-table__cell--non-numeric">
                                                        
                                                            <a href="{{ URL::to('properties/' . $property->id . '/edit') }}" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                                                <i class="material-icons mdl-color-text--orange">edit</i>
                                                            </a>
                                                        {{-- DELETE ICON BUTTON AND FORM CALL --}}
                                                        {!! Form::open(array('url' => 'properties/' . $property->id.'/delete', 'style' => 'display:inline;', 'id' => 'delete_'.$property->id)) !!}
                                                            {!! Form::hidden('_method', 'POST') !!}
                                                            <a href="#" class="dialog-button dialiog-trigger-delete dialiog-trigger{{$property->id}} mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-color--pink-400"
                                                                 data-propertyid="{{$property->id}}">
                                                                <i class="material-icons mdl-color-text--white">delete_forever</i>
                                                            </a>
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                    </tbody>
                                    </table>
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
    <script type="text/javascript">
        @foreach ($properties as $a_property)
            mdl_dialog('.dialiog-trigger{{$a_property->id}}','','#dialog_delete');
        @endforeach
        var propertyid;
        var company_id = 0;
        var is_admin = <?php if (Auth::user()->hasRole('admin')) echo 1; else echo 0;?>; 
        if(is_admin == 0) {
            $(".company_list").css("visibility", "hidden");
        }
        function showByCompany(){
            company_id = $('#company').val();
            var infoData = {
                'company_id':company_id,
            }
            if(company_id == 0){
                window.location.replace('/admin/properties/');
            }
            window.location.replace('/admin/properties/'+company_id);
        }
        
        $('.dialiog-trigger-delete').click(function(event) {
            event.preventDefault();
            propertyid = $(this).attr('data-propertyid');
        });
        $('#confirm').click(function(event) {
            $('form#delete_'+propertyid).submit();
        });
        function create_property(){
            window.location.href= "/properties/create";
        }
    </script>

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