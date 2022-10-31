<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Admin Panel">
    <meta name="author" content="Fundbucks">
    <meta name="keywords" content="fundbucks">

    <title>Fundbucks - لوحة التحكم</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{  asset('admin/vendors/core/core.css')  }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{  asset('admin/vendors/flatpickr/flatpickr.min.css')  }}">

    @yield('stylesheet')

    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{  asset('admin/fonts/feather-font/css/iconfont.css')  }}">
    <link rel="stylesheet" href="{{  asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')  }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{  asset('admin/css/demo1/style-rtl.css')  }}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{  asset('admin/images/favicon.png')  }}"/>
</head>
<body>
<div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
    @include('admin.partials._sidebar')
    <!-- partial -->

    <div class="page-wrapper">

        <!-- partial:partials/_navbar.html -->
        @include('admin.partials._navbar')
        <!-- partial -->

        <div class="page-content">

            @yield('content')

        </div>

        <!-- partial:partials/_footer.html -->
        @include('admin.partials._footer')
        <!-- partial -->

    </div>
</div>

<!-- core:js -->
<script src="{{  asset('admin/vendors/core/core.js')  }}"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="{{  asset('admin/vendors/flatpickr/flatpickr.min.js')  }}"></script>
<script src="{{  asset('admin/vendors/apexcharts/apexcharts.min.js')  }}"></script>

@yield('scripts')

<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="{{  asset('admin/vendors/feather-icons/feather.min.js')  }}"></script>
<script src="{{  asset('admin/js/template.js')  }}"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="{{  asset('admin/js/dashboard-light.js')  }}"></script>
<script src="{{  asset('admin/js/data-table.js') }}"></script>
<!-- End custom js for this page -->

</body>
</html>
