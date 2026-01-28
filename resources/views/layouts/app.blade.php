<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    {{-- Dynamic SEO Title --}}
    <title>@yield('title', 'Nano Hospitals')</title>

    {{-- SEO Meta Tags --}}
    <meta name="description" content="@yield('meta_description', 'Nano Hospitals - Advanced Healthcare Services')">
    <meta name="keywords" content="@yield('meta_keywords', 'hospitals, healthcare, doctors')">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Open Graph (for WhatsApp / Facebook sharing) --}}
    <meta property="og:title" content="@yield('title', 'Nano Hospitals')">
    <meta property="og:description" content="@yield('meta_description', 'Nano Hospitals - Advanced Healthcare Services')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body class="font-sans">

    @include('partials.header')

    <main>
        @yield('content')
        <x-scroll-to-top />
        <x-floating-contact />
        <x-footer />
    </main>

    @stack('scripts')

</body>
</html>
