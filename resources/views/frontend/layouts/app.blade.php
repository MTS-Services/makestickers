<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

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

    {{-- Custom Scripts --}}
    @stack('scripts')

</body>

</html>
