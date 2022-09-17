@extends('layouts.admin')

@section('template_title')
    Showing Users
@endsection

@section('template_linked_css')
    <link href="/assets/fonts/fonts.googleapis.css" rel="stylesheet" type="text/css">
    <link href="/assets/fonts/fonts.googleapis.icons.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mdl-themes/material.min.css') }}" id="user_theme_link">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
@endsection

@section('header')
    Showing All Users
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
            <div class="page-inner">
                <div data-background-color="dark">
                    <div class = "row">
                        <div class = "col-md-10">
                        </div>
                        <div class = "col-md-2">
                            <input type="button" class="sbmt btn btn-primary" value="Add User" onclick="create_subuser()" name="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="card" style="overflow: visible;margin-top: 50px; border-radius: 10px; width: 100%">
                            <div class="card-header">
                                <h2 class="card-title" >                                
                                    
                                    @if (count($users) === 1)
                                        {{ count($users)}} Current User
                                    @elseif (count($users) > 1)
                                        Total {{ count($users)}} Users
                                    @else
                                        No Current Users :(
                                    @endif
                                   
                                  
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive material-table">
                                    <table id="user_table" class="mdl-data-table mdl-js-data-table data-table" cellspacing="0" width="100%">
                                    <thead>
                                            <tr>
                                                <th class="mdl-data-table__cell--non-numeric no-display">ID</th>
                                                <th class="mdl-data-table__cell--non-numeric">Email</th>
                                                <th class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only">First Name</th>
                                                <th class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only">Last Name</th>
                                                <th class="mdl-data-table__cell--non-numeric">Type</th>
                                                <th class="mdl-data-table__cell--non-numeric">Company</th>
                                                <th class="mdl-data-table__cell--non-numeric no-sort no-search">Status</th>
                                                <th class="mdl-data-table__cell--non-numeric no-sort no-search">Actions</th>

                                            
                                    </thead>
                                    <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td class="mdl-data-table__cell--non-numeric no-display"><a>{{$user->id}}</a></td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a>{{$user->email}} </a></td>
                                                    <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a>{{$user->first_name}} </a></td>
                                                    <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a>{{$user->last_name}} </a></td>
                                                    @foreach($role_users as $role_user)
                                                        @foreach($roles as $role)
                                                            @if(($role_user->user_id == $user->id) && ($role_user->role_id == $role->id))
                                                                <td class="mdl-data-table__cell--non-numeric"><a>{{$role->name}} </a></td>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                   <?php $temp_company = 0;?>
                                                    @foreach($companies as $company)
                                                        @if($company->id == $user->company_id)
                                                            <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a>{{$company->name}} </a></td>
                                                            <?php $temp_company = 1;?>
                                                        @endif
                                                   @endforeach
                                                   @if($temp_company == 0)
                                                        <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"></td>
                                                       
                                                    @endif
                                                    <td class="mdl-data-table__cell--non-numeric">                                                           
                                                        <label class="switch"><input type="checkbox" id="togBtn_{{$user->id}}" class="dialog-button   
                                                                mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-color--pink-400" onClick = "setAcitve({{$user->id}})"
                                                                <?php if($user->activated == 1) echo('checked');?> 
                                                                ><div class="slider round"></div></label>
                                                        
                                                    </td>
                                                   
                                                    <td class="mdl-data-table__cell--non-numeric">
                                                        
                                                            <a href="{{ URL::to('users/' . $user->id . '/edit') }}" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                                                <i class="material-icons mdl-color-text--orange">edit</i>
                                                            </a>
                                                        {{-- DELETE ICON BUTTON AND FORM CALL --}}
                                                        {!! Form::open(array('url' => 'users/' . $user->id.'/delete', 'style' => 'display:inline;', 'id' => 'delete_'.$user->id)) !!}
                                                            {!! Form::hidden('_method', 'POST') !!}
                                                            <a href="#" class="dialog-button dialiog-trigger-delete dialiog-trigger{{$user->id}} mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-color--pink-400"
                                                                 data-userid="{{$user->id}}">
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
        @foreach ($users as $a_user)
            mdl_dialog('.dialiog-trigger{{$a_user->id}}','','#dialog_delete');
        @endforeach
        var userid;
        $('.dialiog-trigger-delete').click(function(event) {
            event.preventDefault();
            userid = $(this).attr('data-userid');
        });
        $('#confirm').click(function(event) {
            $('form#delete_'+userid).submit();
        });
        function create_subuser(){
            window.location.href= "/users/create";
        }
        function setAcitve(user_id){
            var infoData = {
                'user_id' :user_id,
            }
            $.ajax({
                type: "get",
                url: '/users/update_status',
                data: infoData,
                success: function (result) {
                
                    console.log(result);
                    location.reload();
                },
                error: function (result) {
                    if (result.status = 442)
                    console.log( result);
        
                }
            })
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
    .toggle{
        text-align: center;
        margin-top: 38px;
    }
    .switch {
    position: relative;
    display: inline-block;
    width: 120px;
    height: 34px;
    }

    .switch input {display:none;}
    .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fe8214;
    -webkit-transition: .4s;
    transition: .4s;
    font-size: 12px;
    border-radius: 34px;
    }

    .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;


    border-radius: 50%;
    }

    input:checked + .slider {
    background-color: #2c6ca9;
    }

    input:focus + .slider {
    box-shadow: 0 0 1px #2c6ca9;
    }

    input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(88px);
    }

    /*------ ADDED CSS ---------*/
    .slider:after
    {
    content:'Inactive';
    color: white;
    display: block;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    font-size: 12px;
    font-family: Verdana, sans-serif;
    }

    input:checked + .slider:after
    {  
    content:'Acitve';
    }
    </style>
@endsection