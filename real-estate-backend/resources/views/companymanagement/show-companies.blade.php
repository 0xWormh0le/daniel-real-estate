@extends('layouts.admin')

@section('template_title')
    Showing Companies
@endsection

@section('template_linked_css')
    <link href="/assets/fonts/fonts.googleapis.css" rel="stylesheet" type="text/css">
    <link href="/assets/fonts/fonts.googleapis.icons.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mdl-themes/material.min.css') }}" id="user_theme_link">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
@endsection

@section('header')
    Showing All Companies
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
                Company List
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
                        <div class = "col-md-10">
                        </div>
                        <div class = "col-md-2">
                            <input type="button" class="sbmt btn btn-primary" value="Add Company" onclick="create_company()" name="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="card" style="overflow: visible;margin-top: 50px; border-radius: 10px; width: 100%">
                            <div class="card-header">
                                <h2 class="card-title" >                                
                                    
                                    @if (count($companies) === 1)
                                        {{ count($companies)}} Current Company
                                    @elseif (count($companies) > 1)
                                        Total {{ count($companies)}} Companies
                                    @else
                                        No Current Companies :(
                                    @endif
                                   
                                  
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive material-table">
                                    <table id="user_table" class="mdl-data-table mdl-js-data-table data-table" cellspacing="0" width="100%">
                                    <thead>
                                            <tr>
                                                <th class="mdl-data-table__cell--non-numeric no-display">ID</th>
                                                <th class="mdl-data-table__cell--non-numeric">Name</th>
                                                <th class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only">Address1</th>
                                                <th class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only">Address2</th>
                                                <th class="mdl-data-table__cell--non-numeric">City</th>
                                                <th class="mdl-data-table__cell--non-numeric">State</th>
                                                <th class="mdl-data-table__cell--non-numeric">Zip</th>
                                           
                                                <th class="mdl-data-table__cell--non-numeric no-sort no-search">Actions</th>
                                            
                                    </thead>
                                    <tbody>
                                            @foreach ($companies as $company)
                                                <tr>
                                                    <td class="mdl-data-table__cell--non-numeric no-display"><a>{{$company->id}}</a></td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a>{{$company->name}} </a></td>
                                                    <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a>{{$company->address1}} </a></td>
                                                    <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a>{{$company->address2}} </a></td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a>{{$company->city}} </a></td>
                                                    <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only">{{$company->state}}</td>
                                                    <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only">{{$company->zip}}</td>
                                                    <td class="mdl-data-table__cell--non-numeric">
                                                        
                                                            <a href="{{ URL::to('companies/' . $company->id . '/edit') }}" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                                                <i class="material-icons mdl-color-text--orange">edit</i>
                                                            </a>
                                                        {{-- DELETE ICON BUTTON AND FORM CALL --}}
                                                        {!! Form::open(array('url' => 'companies/' . $company->id.'/delete', 'style' => 'display:inline;', 'id' => 'delete_'.$company->id)) !!}
                                                            {!! Form::hidden('_method', 'POST') !!}
                                                            <a href="#" class="dialog-button dialiog-trigger-delete dialiog-trigger{{$company->id}} mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-color--pink-400"
                                                                 data-companyid="{{$company->id}}">
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
        @foreach ($companies as $a_company)
            mdl_dialog('.dialiog-trigger{{$a_company->id}}','','#dialog_delete');
        @endforeach
        var companyid;
        $('.dialiog-trigger-delete').click(function(event) {
            event.preventDefault();
            companyid = $(this).attr('data-companyid');
        });
        $('#confirm').click(function(event) {
            $('form#delete_'+companyid).submit();
        });
        function create_company(){
            window.location.href= "/companies/create";
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