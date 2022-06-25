<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- feather icon --}}
    <script src="{{ asset('https://unpkg.com/feather-icons') }}"></script>


    <title>{{ $title }}</title>
</head>

<body class="">
    <div class="flex">
        {{-- sidebar --}}
        <div>
            @include('home.partials.sidebar')
        </div>
        {{-- content --}}
        <div style="width: 100%">
            @include('home.partials.header')
            @yield('content')
        </div>
    </div>


    <script>
        feather.replace()
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
