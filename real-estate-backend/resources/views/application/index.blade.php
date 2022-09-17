@extends('layouts.admin')

@section('template_title')
    Showing applications
@endsection

@section('template_linked_css')
    <link href="/assets/fonts/fonts.googleapis.css" rel="stylesheet" type="text/css">
    <link href="/assets/fonts/fonts.googleapis.icons.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mdl-themes/material.min.css') }}" id="user_theme_link">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
@endsection

@section('header')
    Showing All applications
@endsection

@section('breadcrumbs')
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{url('/')}}">
            <span itemprop="name">6+
                {{ trans('titles.app') }}
            </span>
        </a>
        <i class="material-icons">chevron_right</i>
        <meta itemprop="position" content="1" />
    </li>
    <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="/application" disabled>
            <span itemprop="name">
                Application List
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

                    <div class="row">
                        <div class="card" style="overflow: visible;margin-top: 50px; border-radius: 10px; width: 100%">
                            <div class="card-header">
                                <h2 class="card-title" >                                
                                    
                                    @if (count($applications) === 1)
                                        {{ count($applications)}} Current application
                                    @elseif (count($applications) > 1)
                                        Total {{ count($applications)}} applications
                                    @else
                                        No Current applications :(
                                    @endif
                                   
                                  
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive material-table">
                                    <table id="user_table" class="mdl-data-table mdl-js-data-table data-table" cellspacing="0" width="100%">
                                    <thead>
                                            <tr>
                                                <th class="mdl-data-table__cell--non-numeric no-display">ID</th>
                                                <th class="mdl-data-table__cell--non-numeric">Username</th>
                                                <!-- <th class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only">Description</th> -->
                                                <th class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only">PropertyTitle</th>
                                                <th class="mdl-data-table__cell--non-numeric">UserEmail</th>
                                                <th class="mdl-data-table__cell--non-numeric">Content</th>
                                                <th class="mdl-data-table__cell--non-numeric">Rent Or Buy</th>
                                                <th class="mdl-data-table__cell--non-numeric">Period</th>
                                                <th class="mdl-data-table__cell--non-numeric">Status</th>
                                                <th class="mdl-data-table__cell--non-numeric">Actions</th>
                                           
                                                <!-- <th class="mdl-data-table__cell--non-numeric no-sort no-search">Actions</th> -->
                                            
                                    </thead>
                                    <tbody>
                                            @foreach ($applications as $application)
                                                <tr>
                                                    <td class="mdl-data-table__cell--non-numeric no-display"><a>{{$application->id}}</a></td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a>{{$application->customer->first_name}} {{$application->customer->last_name}}</a></td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a>{{$application->property->title}}</a></td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a>{{$application->customer->email}}</a></td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a>{{$application->content}}</a></td>
                                                    @if($application->rent_or_buy == 1)
                                                        <td class="mdl-data-table__cell--non-numeric"><a>Buy</a></td>
                                                    @else
                                                        <td class="mdl-data-table__cell--non-numeric"><a>Rent</a></td>
                                                    @endif

                                                    <td class="mdl-data-table__cell--non-numeric"><a>{{$application->period}}</a></td>

                                                    @if($application->status == 0)
                                                        <td class="mdl-data-table__cell--non-numeric"><a>Pending</a></td>
                                                    @else 
                                                        @if($application->status == 1)
                                                            <td class="mdl-data-table__cell--non-numeric"><a>Accepted</a></td>
                                                        @else
                                                            <td class="mdl-data-table__cell--non-numeric"><a>Rejected</a></td>
                                                        @endif
                                                    @endif
                                                    <td class="mdl-data-table__cell--non-numeric">
                                                            <a href="{{ route('applications_detail', ['id' => $application->id] ) }}" class="mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                                                <i class="mdl-color-text--orange">Detail</i>
                                                            </a>
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