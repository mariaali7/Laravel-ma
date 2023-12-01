<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Shaghenli</title>

    <!-- Fonts -->
    <link rel="icon" href="{{ asset('assets/images/Asset 3.svg') }}">

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Our Css and Js files -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom-bs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/line-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/quill.snow.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Our Css and Js files End -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="utf-8">

</head>

<body>
    <div id="app">

        <!-- NAVBAR -->
        <header class="site-navbar mt-4">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="site-logo col-6">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo_eng.png') }}" style="width: 28%">
                        </a>
                    </div>

                    <nav class="mx-auto site-navigation d-flex justify-content-around">
                        <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                            <li style="padding-left: 544px"><a href="{{ route('home') }}"
                                    class="nav-link active">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('categories') }}">Categories</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            
                            @guest
                                @if (Route::has('login'))
                                    <li><a href="{{ route('login') }}">Log In</a></li>
                                @endif
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('profile') }}">
                                            Profile
                                        </a>
                                        <a class="dropdown-item" href="{{ route('edit.Details') }}">
                                            Update Profile
                                        </a>
                                      
                                        <a class="dropdown-item" href="{{ route('applications') }}">
                                            Applications
                                        </a>
                                        <a class="dropdown-item" href="{{ route('saved.jobs') }}">
                                            Saved Jobs
                                        </a>
                                        
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest

                        </ul>
                    </nav>
                    <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                        <div class="ml-auto ">
                            <div class="site-mobile-menu site-navbar-target">
                                <div class="site-mobile-menu-header">
                                    <div class="site-mobile-menu-close">
                                        <span class="icon-close2 js-menu-toggle d-none"></span>
                                    </div>
                                </div>
                                <div >
                                    <!-- Add your mobile menu items here -->
                                    <ul class="site-mobile-menu-body">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('categories') }}">Categories</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                        <!-- Add your authentication-related links for guest and logged-in users -->
                                    </ul>
                                </div>
                            </div>
                        <a href="#"
                            class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span
                                class="icon-menu h3 m-0 p-0 mt-2"></span></a>
                    </div>

                </div>
            </div>
        </header>





        <main>
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer class="site-footer">

        <a href="#top" class="smoothscroll scroll-top">
            <span class="icon-keyboard_arrow_up"></span>
        </a>

        <div class="container">
            <div class="row mb-5">
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Search Trending</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('login') }}">Apply for a Jobing opportunity</a></li>

                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Company</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('about') }}">Contact Us</a></li>
                        {{-- <li><a href="#">Blog</a></li> --}}
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Support</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('support') }}">Support</a></li>
                        <li><a href="{{ route('privacy') }}">Privacy</a></li>
                        <li><a href="{{ route('terms') }}">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Follow Us</h3>
                    <div class="footer-social">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-instagram"></span></a>
                        <a href="#"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-12">
                    <p class="copyright"><small>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Shaghenli, Unlocking Opportunities, Empowering Careers
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </small></p>
                </div>
            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/stickyfill.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>


    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/quill.min.js') }}"></script>


    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
