<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Brushwood
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20131025

-->

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Padauk:wght@700&display=swap" rel="stylesheet">

@livewireStyles
<body>
@extends ('layout')

@section('content')
    <div class="text-blue-800 font-semibold text-red-500 bg-blue-300">Alpha Version.

        <div class="text-sm font-bold ">Страница разрабатывается.</div>
    </div>
    <div id="page-wrapper" class="text-gray-600 text-2xl">
        Запросить адресную табличку дома
    </div>
    <div id="page-wrapper" class="text-lg pb-4 p-2 text-center">
        Здесь можно спроектировать и закать табличку номера дома.
    </div>
    <div id="wrapper">
        <div id="three-column" class="container"></div>
        <div id="portfolio" class="container"></div>

        @livewire('address-label')
    </div>
@endsection

@livewireScripts
</body>
