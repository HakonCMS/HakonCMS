<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=10">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{ url('core/hakon/images/favicon_1.ico') }}">

    <title>{{ $application->project->name }} - Dashboard</title>

    <!-- Bootstrap 3.3.5 -->
    {!! Html::Style('core/bootstrap/css/bootstrap.min.css') !!}
            <!-- Font Awesome -->
    {!! Html::Style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}
            <!-- Ionicons -->
    {!! Html::Style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}
            <!-- Theme style -->
    {!! Html::Style('core/dist/css/AdminLTE.min.css') !!}
            <!-- iCheck -->
    {!! Html::Style('core/plugins/iCheck/square/blue.css') !!}
            <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {!! Html::Style('core/dist/css/skins/_all-skins.min.css') !!}

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>