@props([
    'title' => 'Most Trusted Packers and Movers in Patna | Transparent Pricing & Hassle-Free Relocation Services in Patna |
        Grand Packers & Movers',
    'meta_desc' => 'Looking for reliable packers and movers in Patna? We offer safe, affordable, and professional house shifting, office relocation, vehicle transportation, and storage services with timely delivery and complete safety.',
    'meta_keywords' => 'packers and movers in Patna, best movers in Patna, house shifting Patna, office relocation Patna, bike transportation Patna, relocation services Patna',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name', 'Shree Shivay') }}</title>
    <meta name="description" content="{{ $meta_desc }}">
    <meta name="keywords" content="{{ $meta_keywords }}">

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon/favicon.ico') }}">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap"
    rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- Font Awesome Icon Css-->
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet" media="screen">
    
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <x-navbar />

    <main>
        {{ $slot }}
    </main>

    {{-- <x-float-icon /> --}}

    <!-- Footer -->
    <x-footer />
</body>

</html>