<!DOCTYPE html>
<html>

@include('frontend.includes.head')

<body>
  <div class="hero_area">

    <!-- header section strats -->
    @include('frontend.includes.header')
    <!-- end header section -->
    <!-- slider section -->

    <!-- end slider section -->
  </div>
  @yield('frontend')



  <!-- footer section -->
  @include('frontend.includes.footer')
  <!-- footer section -->

  <!-- jQery -->
 @include('frontend.includes.scripts')
</body>

</html>
