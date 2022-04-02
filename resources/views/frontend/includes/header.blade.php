<header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand " href="{{route('home.index')}}"> Brolta </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home.index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('show.about')}}"> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('show.product')}}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('show.contact')}}">Contact Us</a>
            </li>

            <li class="nav-item">
                @if (Route::has('login'))

                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('show.cart')}}"> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>[{{$count}}] </a>
                      </li>
                        {{-- <a href="{{ url('/dashboard') }}" >Dashboard</a> --}}
                        <li class="nav-item">

                            <x-app-layout>


                            </x-app-layout>

                        </li>



                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" >Log in</a>
                    </li>


                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        </li>

                        @endif
                    @endauth

            @endif

            </li>
            <form class="form-inline justify-content-center">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </ul>
        </div>
      </nav>
    </div>
  </header>
