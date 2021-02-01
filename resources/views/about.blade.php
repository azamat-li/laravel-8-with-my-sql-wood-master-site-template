<!DOCTYPE html>

@section('head')
<title>О Столярофф Цехе</title>
<meta
    content="о столярном цехе в Учалинском районе, о столярном цехе в Учалинском районе, о столярном цехе в селе Ахуново, о столярном цехе села Ахуново"
    name="keywords"/>
<meta
    content="О столярном цехе {{ config('app.name') }} села Ахуново Учалинского района"
    name="description"/>
<meta
    content="{{ config('app.name') }}"
    name="author"/>
@endsection

@extends ('layout')

@section('content')
<div id="page-wrapper" class="text-gray-600 text-2xl ">
    Об индивидуальном предпринимателе.
</div>
<div id="page-hint" class="">
    Здесь можно найти общую информацию по предприятию
    <strong>{{ config('app.name') }}</strong>.
</div>
<div id="wrapper">
    <div id="three-column" class="container"></div>
    <div id="portfolio" class="container"></div>
</div>
@endsection
