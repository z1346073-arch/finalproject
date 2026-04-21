<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    <title>Blank | Dasher - Responsive Bootstrap 5 Admin Dashboard</title>
    <!-- Favicon icon-->


    @include('admin.component.icons')

    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{!! asset('/storage/admin/assets/images/favicon/ms-icon-144x144.png') !!}" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Color modes -->
    @include('admin.component.js-head')
    <!-- Libs CSS -->
    @include('admin.component.css-head')
</head>

<body class="d-flex flex-column h-100">
    <!-- Vertical Sidebar -->
    @include('admin.partial.side-navbar')

    <!-- Main Content -->
    <div id="content" class="position-relative flex-grow-1">
        <!-- navbar -->
        @include('admin.partial.top-navbar')

        <div class="custom-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div class="mb-5">
                      @yield('content')
                        <h1 class="mb-3 h2">Blank</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Libs JS -->
    @include('admin.component.js')


    <!-- Footer -->
    <footer class="footer mt-auto py-5 border-top">
        <div class="container">
            <!-- Footer Links -->
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        <p class="text-center">
                            All rights reserved by
                            <a href="https://codescandy.com" target="__blank">CodesCandy</a>.
                            Distributed ny
                            <a href="https://themewagon.com" target=__blank">Themewagon</a>.
                        </p>
                    </div>
                </div>
            </div>
    </footer>

    <!-- Copyright -->
    <div class="row">
        <div class="col-12 text-center">
            <p class="mb-0 text-muted small">Copyright © 2024 - All times ®</p>
        </div>
    </div>
    </div>
    </footer>

</body>

</html>
