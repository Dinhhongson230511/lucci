<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @if(isset($seo['title']))
        <title>{{ $seo['title'] }}</title>
    @else
        <title>{{ setting('site.title', 'Nha khoa lucci') . ' - ' . setting('site.description', 'Nha khoa lucci , Lucci dental') }}</title>
    @endif

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- † -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('/') }}">

    <link rel="icon" href="{{ asset('storage/'.setting('site.favicon', '/wave/favicon.png'))  }}" type="image/x-icon">

    {{-- Social Share Open Graph Meta Tags --}}
    @if(isset($seo['title']) && isset($seo['description']) && isset($seo['image']))
        <meta property="og:title" content="{{ $seo['title'] }}">
        <meta property="og:url" content="{{ Request::url() }}">
        <meta property="og:image" content="{{ $seo['image'] }}">
        <meta property="og:type" content="@if(isset($seo['type'])){{ $seo['type'] }}@else{{ 'article' }}@endif">
        <meta property="og:description" content="{{ $seo['description'] }}">
        <meta property="og:site_name" content="{{ setting('site.title') }}">

        <meta itemprop="name" content="{{ $seo['title'] }}">
        <meta itemprop="description" content="{{$seo['description'] }}">
        <meta itemprop="image" content="{{ $seo['image'] }}">

        <meta property="og:image:width" content="1801">
        <meta property="og:image:height" content="946">
    @endif

    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">

    @if(isset($seo['description']))
        <meta name="description" content="{{ $seo['description'] }}">
    @endif

    <!-- Styles -->
    <link href="{{ asset('themes/' . $theme->folder . '/lucci/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/' . $theme->folder . '/lucci/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/' . $theme->folder . '/lucci/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/' . $theme->folder . '/lucci/css/wickedpicker.css') }}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>
<body class="">

    @include('theme::partials.lucci.header')

    <main>
        @yield('content')
    </main>

    @include('theme::partials.lucci.footer')

</body>
</html>
