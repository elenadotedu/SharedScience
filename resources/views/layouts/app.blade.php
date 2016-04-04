<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8" />
    <title>
        @section('title')
            @lang('general.site_name')
        @show
    </title>
    <meta name="author" content="Shared Science" />
    <meta name="description" content="A CRM system for Shared Science." />

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS
    ================================================== -->
    <link href="{{ URL:: asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ URL:: asset('assets/startbootstrap-sb-admin-2-1.0.7/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ URL:: asset('assets/startbootstrap-sb-admin-2-1.0.7/dist/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL:: asset('assets/startbootstrap-sb-admin-2-1.0.7/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ URL:: asset('assets/startbootstrap-sb-admin-2-1.0.7/bower_components/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL:: asset('assets/startbootstrap-sb-admin-2-1.0.7/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Datepicker -->
    <link href="{{ URL:: asset('assets/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Query Builder -->
    <link href="{{URL:: asset('assets/css/query-builder.default.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Data Tables -->
    <link href="{{URL:: asset('assets/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css">

    <style>
        @section('styles')

        body #page-wrapper {
            background-color: #FDFDFD;
        }
        /*Top and bottom colors*/
        #footer {

            line-height: 40px;
            background-color: #e7e7e7; /*dark grey*/
            padding-top: 10px;
        }

        .navbar, .navbar-brand {
            min-height:70px;
            background-color:#e7e7e7; /*dark grey*/
        }

        /*Side bar*/
        #wrapper, #side-menu {
            /*background-color: #b7babb;*/
            background-color: #F1F1F1;
        }

        /*Color of the side navigation links text*/
        #side-menu li a {
            color: #00417A;
        }

        /*Color of the side navigation tabs when hovered*/
        #side-menu li a:hover,
        #side-menu li a:focus,
        #side-menu li a:active,
        #side-menu li a:visited
        {
            background-color:#D6D6D6;
        }

        /*Side navigation divider color*/
        .sidebar ul li
        {
           border-bottom-color:#FAFAFA;
        }

        /*Sign in / out*/
        .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus
        {
            background-color: #BAC5D1;
            color: #3D5C79;
        }

        /*Make if so that sign in /sign up are not all the way to the right*/
        .navbar-right {
            padding-right:20px;
        }

        /*fix scroll to the right*/
        .navbar-nav.navbar-right:last-child
        {
            margin-right:0px;
        }

        /*Sign out dropdown menu*/
        .navbar-nav>li>.dropdown-menu {
            margin-top:-10px;
            background-color:#FAFAFA;
        }

        .navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus
        {
            color: #0062B8;
        }
        .navbar-default .navbar-nav>li>a
        {
            color:#00417A;
        }
        .btn-info, .btn-info:hover, .btn-info:focus
        {
            background-color:#47A9FF;
            border-color:#47A9FF;
        }
        @media (min-width: 992px) {
            .navbar-nav>li>a {
                padding-top:25px;
                padding-bottom:25px;
            }
        }

        .navbar, .navbar-brand {
            min-height:180px;
        }

        .input-group[class*=col-] {
            padding-left:15px;
            padding-right:15px;
        }

        .form-control[readonly],
        .form-control[disabled]
        {
            border:none;
            background-color:transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
            transition:none;
            -webkit-transition: none;
            cursor:initial;
            -webkit-appearance:none;
            -moz-appearance:none;
            appearance:none;
        }
        .form-view-field {
            padding-top:8px;
            padding-left:5px;
            display: block;
        }

        .nav-tabs {
            margin-bottom:15px;
        }
        .nav-tabs.nav-tabs-blue {
            border-bottom-color:#428bca;
        }
        .nav-tabs.nav-tabs-blue>li>a {
            margin-bottom: 1px;
        }
        .nav-tabs.nav-tabs-blue li.active a{
            background-color:#428bca;
            color:#FFF;
        }

        .nav-tabs a{
            background-color:#eee;
        }

        .file::-webkit-file-upload-button {
            color: white;
            background-color: #47A9FF;
            border-color: #47A9FF;
            border: 1px solid transparent;
            padding: 8px;
            margin-top:-10px;
            margin-left:-12px;
        }

        /* view fields */
        .form-control-view {
            display: block;
            padding-top:6px;
        }

        /* delete button */
        button.glyphicon{
            background-color:transparent;
            border:none;
            padding:0;
            outline:none;
        }
        button.glyphicon:focus{
            outline:none;
        }

        /*date elements to float correctly*/
        .input-group.date {
            float:left;
        }

        @show
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->

    <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">
</head>

<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('assets/images/logo.png')}}" /><!--<span class="glyphicon glyphicon-home"></span>@lang('general.site_name')--></a>
        </div>

        <!-- Top bar -->
        <div class="navbar-collapse collapse">
            <!--<ul class="nav navbar-nav">
                <li {{ (Request::is('about-us') ? 'class="active"' : '') }}><a href="{{ URL::to('about-us') }}">About us</a></li>
                <li {{ (Request::is('contact-us') ? 'class="active"' : '') }}><a href="{{ URL::to('contact-us') }}">Contact us</a></li>

            </ul>-->
            <ul class="nav navbar-nav navbar-right">

                <!-- Authentication Links -->
                @if (!Auth::check())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                            <li><a href="{{ route('users.edit', Auth::getUser()->id) }}"><i class="fa fa-btn fa-user"></i> My Account</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <!-----------------------------------------------
                SIDE MENU
                ------------------------------------------------->

                <ul class="nav" id="side-menu">

                    @if (Auth::check())
                    <!--
                    Resources
                    ------------------------------------------------->
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> Records<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li pre-reg><a href="{{route('participants.index')}}"> Participants</a></li>
                            <li pre-reg><a href="{{route('contacts.index')}}"> Contacts</a></li>
                            <li pre-reg><a href="{{route('programs.index')}}"> Programs</a></li>
                            <li pre-reg><a href="{{route('schools.index')}}">Schools</a></li>
                            @can('view users')
                            <li pre-reg><a href="{{ route('users.index') }}">Users</a></li>
                            @endcan
                        </ul>

                        <!-- /.nav-second-level -->
                    </li>

                    <!--
                   Reports
                   ------------------------------------------------->
                    <li>
                        <a href="#"><i class="fa fa-cogs fa-fw"></i> Reports<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            @can('create reports')
                            <li pre-reg><a href="{{route('reports.pre_create')}}"> Create</a></li>
                            @endcan
                            @can('view reports')
                            <li pre-reg><a href="{{route('reports.index')}}"> List</a></li>
                            @endcan
                            @can('view templates')
                            <li pre-reg><a href="{{route('templates.index')}}"> Templates</a></li>
                            @endcan
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <!--
                  CSV
                  ------------------------------------------------->
                    <li>
                        <a href="#"><i class="fa fa-database fa-fw"></i> CSV<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            @can('view csv_maps')
                            <li pre-reg><a href="{{route('csv_maps.index')}}"> Maps</a></li>
                            @endcan
                            <li pre-reg><a href="{{route('csv_browse')}}"> Import</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <!--
                Help
                ------------------------------------------------->
                    <li>
                        <a href="#"><i class="fa fa-info fa-fw"></i> Help<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li pre-reg><a href="{{route('help.reports')}}"> Reports</a></li>
                        </ul>
                    </li>

                    <!--
                 Mass Email
                 ------------------------------------------------->
                    <!--<li>
                        <a href="{{route('campaigns.index')}}"><i class="fa fa-envelope fa-fw"></i> Email Campaigns</a>
                    </li>-->
                    @endif
                </ul>


            </div>
            <!-- /.sidebar-collapse -->
        </div>

        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">

                <!-- Notifications -->
                @include('errors.notifications')

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        @section('content')
        @show
    </div> <!-- /.page-wrapper -->
    <div id="footer">
        <div class="container">
            <p class="text-muted">Shared Science.</p>
        </div>
    </div>
</div> <!-- /#wrapper -->

<!-- Javascripts
================================================== -->
<script src="{{ URL:: asset('assets/js/jquery.1.10.2.min.js') }}"></script>
<script src="{{ URL:: asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ URL:: asset('assets/startbootstrap-sb-admin-2-1.0.7/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ URL:: asset('assets/startbootstrap-sb-admin-2-1.0.7/dist/js/sb-admin-2.js') }}"></script>

<!-- Datepicker -->
<script src="{{ URL:: asset('assets/bootstrap-datetimepicker/js/moment.js')}}"></script>
<script src="{{ URL:: asset('assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript">
    $('.datepicker').datetimepicker({
        format: "YYYY-MM-DD"
    });
    $('.timepicker').datetimepicker({
        format: "HH:mm:ss"
    });
    </script>

<!-- Data Tables -->
<script src="{{URL:: asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript">

    $(document).ready(function(){
        $('.object-list').DataTable();
    });

    $(document).ready(function(){
        $('#object_list').DataTable();
    });
</script>

<!-- Query Builder (for report generation) -->
<script src="{{URL:: asset('assets/js/query-builder.standalone.min.js')}}"></script>

<!-- Main js file -->
<script src="{{URL:: asset('assets/js/main.js')}}"></script>

@section('body_bottom')
@show
</body>
</html>
