<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="rica">
    <meta name="keywords" content="rica">
    <meta name="author" content="rica">
    <link rel="icon" href="{{ URL::asset('images/favicon.png') }}" type="image/x-icon" />
    <title>Job Nexus</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vampiro+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&display=swap" rel="stylesheet">

    <!-- Font awesome  -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/font-awesome.css') }}">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/vendors/themify.css') }}">
    <!-- ratio start -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/ratio.css') }}">

    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/vendors/animate.css') }}">
    <!-- Plugins css Ends-->
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/vendors/date-picker.css') }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/vendors/bootstrap.css') }}">
    <!-- vector map css start -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/vector-map.css') }}">
    <!-- vector map css start -->
    <!-- slick slider-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/slick-theme.css') }}">
    <!-- Bootstrap-tag input css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/vendors/bootstrap-tagsinput.css') }}">
    <!--Dropzon start-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/vendors/dropzone.css') }}">
    <!--Dropzon end-->
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/style.css') }}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('backdoordashpanel/css/responsive.css') }}">

</head>

<body>
    @include('admin.partials._header')

    @yield('content')
    @include('admin.partials._footer')

    <!-- latest jquery-->
    <script src="{{ URL::asset('backdoordashpanel/js/jquery-7.0.1.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ URL::asset('backdoordashpanel/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ URL::asset('backdoordashpanel/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ URL::asset('backdoordashpanel/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ URL::asset('backdoordashpanel/js/config.js') }}"></script>


    <!-- tooltip init js  start-->
    <script src="{{ URL::asset('backdoordashpanel/js/tooltip-init.js') }}"></script>
    <!-- tooltip init js  end-->

    <!-- slick js start -->
    <script src="{{ URL::asset('backdoordashpanel/js/slick.js') }}"></script>
    <!-- slick js end -->

    <!-- Plugins JS start-->
    <script src="{{ URL::asset('backdoordashpanel/js/sidebar-menu.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/notify/bootstrap-notify.min.js') }}"></script>

    <!--ckEditor js start-->
    <script src="{{ URL::asset('backdoordashpanel/js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/ckeditor/styles.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/ckeditor/ckeditor.custom.js') }}"></script>

    <!--ckEditor js end-->


    <script src="{{ URL::asset('backdoordashpanel/js/notify/index.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/typeahead-search/typeahead-custom.js') }}"></script>
    <!-- Plugins JS Ends-->

    <script src="{{ URL::asset('backdoordashpanel/js/datepicker/date-picker/datepicker.js') }}"></script>

    <script src="{{ URL::asset('backdoordashpanel/js/datepicker/date-picker/datepicker.en.js') }}"></script>

    <script src="{{ URL::asset('backdoordashpanel/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <!-- Apexchar js start -->

    <script src="{{ URL::asset('backdoordashpanel/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/chart/apex-chart/chart-custom.js') }}"></script>
    <!-- Apexchar js start -->
    <!-- ratio start  -->
    <script src="{{ URL::asset('backdoordashpanel/js/ratio.js') }}"></script>
    <!-- vector map start -->
    <!-- customizer js start  -->
    <script src="{{ URL::asset('backdoordashpanel/js/customizer.js') }}"></script>
    <!-- customizer js start  -->

    <script src="{{ URL::asset('backdoordashpanel/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/vector-map/map-vector.js') }}"></script>
    <!-- vector map end -->

    <script src="{{ URL::asset('backdoordashpanel/js/bootstrap-tagsinput.min.js') }}"></script>
    <!--Dropzon start-->
    <script src="{{ URL::asset('backdoordashpanel/js/dropzone/dropzone.js') }}"></script>
    <script src="{{ URL::asset('backdoordashpanel/js/dropzone/dropzone-script.js') }}"></script>
    <!--Dropzon end-->
    <!-- Theme js-->
    <script src="{{ URL::asset('backdoordashpanel/js/script.js') }}"></script>

    <!-- login js-->
    <!-- Plugin used-->

</body>

</html>