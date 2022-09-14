<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMAR Final Project</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <!-- SCSS -->
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>
<body>
    <!--Header-->
    <header id="header">
      <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-cairo font-size-20 yexy-black-250 m-0">Free shipping on all orders</p>
        <div class="font-cairo font-size-16 d-flex">
            <a href="#" class="px-3-border-right-border-left-text-dark p-2 text-decoration-none color-third">Whishlest</a>
            <a href="#" class="px-3-border-right-border-left-text-dark p-2 text-decoration-none color-third">Currency</a>
            <a href="/cart" class="px-3-border-right-text-dark p-2 text-decoration-none color-third"><i class="fa-solid fa-cart-shopping"></i> My Cart</a>
            @if(Route::has('login'))
                @auth
                    @if(Auth::user()->utype === 'ADM')

                    <a href="#" class="px-3-border-right-border-left-text-dark p-2 text-decoration-none color-third">My Account ({{Auth::user()->name}}) </a>
                    <a href=" {{ route('admin.dashboard')}} " class="px-3-border-right-border-left-text-dark p-2 text-decoration-none color-third">Dashboard</a>
                    <form method="POST" action="{{ route('logout')}} ">
                      @csrf

                      <a href="{{ route('logout')}}" onclick="event.preventDefault(); .closest('form').submit(); " class="px-3-border-right-border-left-text-dark p-2 text-decoration-none color-third">LogOut</a>
                    </form>
                    @else 
                    <a href="#" class="px-3-border-right-border-left-text-dark p-2 text-decoration-none color-third">My Account ({{Auth::user()->name}}) </a>
                    <a href=" {{ route('user.dashboard')}} " class="px-3-border-right-border-left-text-dark p-2 text-decoration-none color-third">Dashboard</a>
                    <form method="POST" action="{{ route('logout')}} ">
                      @csrf

                      <a href="{{ route('logout')}}" onclick="event.preventDefault(); .closest('form').submit(); " class="px-3-border-right-border-left-text-dark p-2 text-decoration-none color-third">LogOut</a>
                    </form>
                    @endif 
                @else
                <a href="{{route('login')}}" class="px-3-border-right-border-left-text-dark p-2 text-decoration-none color-third">Login</a>
                <a href="{{route('register')}}" class="px-3-border-right-border-left-text-dark p-2 text-decoration-none color-third">Register</a>
                @endif

            @endif
        </div>     
      </div>
          
        
        <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
          <div class="input-group-prepend input-group-text">
            <i class="bi-search"></i>
          </div>

          <input type="search" class="js-form-search form-control" placeholder="Search" aria-label="Search">
          <a class="input-group-append input-group-text" href="javascript:;">
            <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
          </a> 
        </div>

        {{--start navbar --}}
        @include('layouts.navbar');
        {{--start navbar --}}
          
          
        
    </header>

    <!--End of Header-->

        {{$slot}}

    <!--Footer-->
    <footer id="footer" class="bg-dark text-white py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-12">
            <h4 class="font-rubik font-size-20">Shops</h4>
            <div class="d-flex flex-column flex-wrap">
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">New In</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Men</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Women</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Shoes</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Bags & Accescories</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Top Brands</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Special Offers</a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <h4 class="font-rubik font-size-20">Information</h4>
            <div class="d-flex flex-column flex-wrap">
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Customer Service</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Best Sellers</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Manufacturers</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Blog</a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <h4 class="font-rubik font-size-20">Customer Service</h4>
            <div class="d-flex flex-column flex-wrap">
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Search Terms</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Contact Us</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Store Locations</a>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <h4 class="font-rubik font-size-20">Newslatter</h4>
            <form class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Email *">
              </div>
              <div class="col">
                <button type="submit" class="btn btn-danger mb-2">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </footer>

    <!--End of footer-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
    <!--isotope cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>
    <!--custom js-->
    <script src="{{url('js/main.js')}}"></script>

    @livewireStyles
</body>
</html>