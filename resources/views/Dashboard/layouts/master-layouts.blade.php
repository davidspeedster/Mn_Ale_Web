<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('Dashboard.layouts.head')
</head>
    @yield('body')
    <body>
          <!-- Begin page -->
          <div id="wrapper">
      @include('Dashboard.layouts.topbar')
      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="content-page">
          <!-- Start content -->
          <div class="content">
              @yield('content')

                </div> <!-- content -->
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    @include('Dashboard.layouts.footer-script')
    </body>
</html>
