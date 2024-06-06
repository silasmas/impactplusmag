<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
         <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Un portail magazine evangelique" />
<meta name="author" content="Costa Luleka" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>{{ config('app.name') }} | {{ isset($titre) ? $titre : '' }}</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins-css.css') }}" />

<!-- revoluation -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}" media="screen" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/typography.css') }}" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes/shortcodes.css') }}" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />

<!-- magazine -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/demo-categories/magazine-02/css/magazine-02.css') }}" />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />

<!-- Style customizer -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin-orange.css') }}" data-style="styles"/>

</head>

<body>

<div class="wrapper">

<!--=================================
 preloader -->

<div id="pre-loader">
    <img src="{{ asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
</div>

<!--=================================
 preloader -->

<!--=================================
