<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('custom/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Theme style -->
    <link href="{{ asset('custom/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('custom/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('custom/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('custom/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('custom/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('custom/vendor/aos/aos.css') }}" rel="stylesheet">

    <title>{{ config('app.name') }}</title>
</head>
<style>
    nav a {
        color: white !important;
    }
    nav a:hover,
    nav a:active {
        color: red !important;
        text-decoration: underline;
    }
</style>
<body>
    <nav class="navbar navbar-light bg-dark justify-content-between" style="color: white">
        <div>
            <a class="active" href="/home">Home</a> |
            <a href="#about">About</a> |
            <a href="#services">Services</a>

        </div>
        <div>
            <a href="/" class="navbar-brand mx-auto d-block text-center order-0 order-md-1 w-25"><img
                    src="{{ asset('custom/automax.png') }}" width="150" alt=""></a>
        </div>
        <div>
            @guest
                <a href="{{ route('login') }}">{{ __('Login') }}</a> |
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">{{ __('Register') }}</a> |
                    <a href="#contact">Contact</a>
                @endif
            @else
                <a href="/dashboard">Dashboard</a> |
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a> |
                <form id="logout-form" action="{{ url('/logout')  }}" method="POST" class="d-none">
                    @csrf
                </form>
                <a href="#contact">Contact</a>
            @endguest
        </div>

    </nav>
    @yield('content')
    @yield('third_party_stylesheets')
    @stack('page_css')


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

  <!-- Vendor JS Files -->
  <script src="{{ asset('custom/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('custom/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('custom/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('custom/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('custom/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('custom/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('custom/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('custom/vendor/aos/aos.js') }}"></script>

  @yield('script')
  <!-- Template Main JS File -->
  <script src="{{ asset('custom/js/main.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

</html>
