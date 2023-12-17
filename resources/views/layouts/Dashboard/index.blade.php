<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{URL::asset('/images/GIG/apple-touch-icon.png')}}" type="image/x-icon">
    @include('/layouts/Dashboard/css')
    <title>@yield('title')</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('/layouts/Dashboard/preloader')
        @include('/layouts/Dashboard/nav')
        @include('/layouts/Dashboard/main_sidbar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('main_title')</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="@yield('url')">@yield('link_name')</a></li>
                        <li class="breadcrumb-item active">@yield('link_title')</li>
                        </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->
        @include('/layouts/Dashboard/footer')

    </div>
    @include('/layouts/Dashboard/js')
</body>
</html>