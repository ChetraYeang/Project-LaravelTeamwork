
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    {{Html::style('bower_components/Admin-lte/bootstrap/css/bootstrap.min.css')}}
    <!-- Font Awesome Icons -->
    {{Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css')}}
    <!-- Ionicons -->
    {{Html::style('http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css')}}
    <!-- Theme style -->
    {{Html::style('bower_components/Admin-lte/dist/css/AdminLTE.min.css')}}
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    {{Html::style('bower_components/Admin-lte/dist/css/skins/skin-blue.min.css')}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('header')
        @include('sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $page_title or "Page Title" }}
                <small>{{ $page_description or null }}</small>
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

            <!-- Main content -->
            <section class="content">

                <!-- Your Page Content Here -->
                 @yield('content')

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('footer')
    @include('col-slidebar')
</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
 <!-- jQuery 2.1.3 -->
    {{Html::script('bower_components/Admin-lte/plugins/jQuery/jquery-2.2.3.min.js')}}
    <!-- Bootstrap 3.3.2 JS -->
    {{Html::script('bower_components/Admin-lte/bootstrap/js/bootstrap.min.js')}}
    <!-- AdminLTE App -->
    {{Html::script('bower_components/Admin-lte/dist/js/app.min.js')}}

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
</html>

