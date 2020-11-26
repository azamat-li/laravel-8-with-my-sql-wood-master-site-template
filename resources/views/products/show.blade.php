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
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700"
          rel="stylesheet"/>
    <link href="{{asset('css/default.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/fonts.css')}}"
    " rel="stylesheet" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
@extends ('layout')

@section('content')
<div id="page-wrapper">
    <h3>{{ $product->name }} </h3>
</div>
<div id="wrapper">
    <div id="three-column" class="container"></div>
    <div id="portfolio" class="container">
        <div class="box">
            <a href="#"><img src="{{asset('images/scr01.jpg')}}" alt="" class="image image-full"/></a>
            <p>{{ $product->description}}</p>
            <a href="#" class="button button-small">Заказать</a></div>
        <div class="margin-top 1em">

            Теги:
             @foreach ($product->tags as $tag)
            <div class="bg-yellow-500  text-gray-100 m-2 p-1 w-1/6 rounded-lg">
                {{ $tag->name }}
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

</body>







