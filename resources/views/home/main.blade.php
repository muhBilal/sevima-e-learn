<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learn{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--#######  css slick #######-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    {{-- daisyui --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.1.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- feather icon --}}
    <script src="{{ asset('https://unpkg.com/feather-icons') }}"></script>

</head>

<body class="bg-bwhite lg:px-12 md:px-10 sm:px-8 px-6 lg:py-10 md:py-5 sm:py-4 py-3">

    @yield('container')

    <!-- ----------------------------------JS SLIDER---------------------------------------------------- -->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>


    <script>
        $('.slick_one').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            autoplay: true,
            speed: 3000,
            autoplaySpeed: 3000,
            infinite: true,
        });
    </script>
    <script>
        feather.replace()
    </script>
</body>

</html>
