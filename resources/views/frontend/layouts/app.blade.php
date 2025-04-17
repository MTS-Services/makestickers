<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    {{-- Fontawesome icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

    {{-- Swiper js --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" integrity="sha512-pmAAV1X4Nh5jA9m+jcvwJXFQvCBi3T17aZ1KWkqXr7g/O2YMvO8rfaa5ETWDuBvRq6fbDjlw4jHL44jNTScaKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Custom CSS --}}
    @stack('styles')
</head>

<body>

    {{-- Header --}}
    @include('frontend.layouts.partials.header')

    {{-- Sidebar --}}
    @include('frontend.layouts.partials.sidebar')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('frontend.layouts.partials.footer')

    {{-- Swiper js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- Custom Scripts --}}
    @stack('scripts')

</body>

</html>
