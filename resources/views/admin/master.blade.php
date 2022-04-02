<!DOCTYPE html>
<html lang="en">
@include('admin.includes.head')
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
     @include('admin.includes.sidebar')
      <!-- partial -->

      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.includes.navbar')
       <div class="main-panel">
        <!-- partial -->
        @yield('content')

        </div>
      <!-- page-body-wrapper ends -->
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.includes.scripts')
    <!-- End custom js for this page -->

</div>
  </body>
</html>
