<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AEE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    @include('Blog_Site.layouts.head')
  </head>

    @yield('body')
    <body>
          <!-- Begin page -->
          <div id="wrapper">
      @include('Blog_Site.layouts.topbar')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
      @yield('content')
                </div> <!-- content -->
    @include('Blog_Site.layouts.footer')
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    @include('Blog_Site.layouts.footer-script')
    </body>
</html>
