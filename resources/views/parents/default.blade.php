<!DOCTYPE html>
<html lang="en">
{{-- head --}}
@include('parents/partials/_head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
              @include('parents/partials/_profile')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
              @include('parents/partials/_sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
              @include('parents/partials/_footer_bottom')
              
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
              @include('parents/partials/_top_nav')      
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->

{{-- footer --}}
	@include('parents/partials/_footer')

  </body>
</html>
