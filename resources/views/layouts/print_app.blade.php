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

    <!-- Custom Fonts -->
    <link href="{{ URL:: asset('assets/startbootstrap-sb-admin-2-1.0.7/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <style>
        @section('styles')

        #page-wrapper {
            padding:0 20px;
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
</div>

<!-- Javascripts
================================================== -->
<script src="{{ URL:: asset('assets/js/jquery.1.10.2.min.js') }}"></script>
<script src="{{ URL:: asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>

@section('body_bottom')
@show
</body>
</html>