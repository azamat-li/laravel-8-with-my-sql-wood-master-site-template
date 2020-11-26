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

<body class="bg-gray-200 rounded p-2 ">
@extends ('layout')

@section('content')
<div id="page-wrapper" class="text-gray-600 text-2xl "> Изделия</div>
<div class=" ">
    <div class=" pb-96 ">
        <p class="text-lg  pb-4 p-2 text-center"> Здесь Вы можете ознакомиться с выполненными заказами разной
            сложности. </p>
        <div id="portfolio">
            <div  id="three-column float-left ">
                <div class=" gallery  ">
                    @forelse($products as $product)
                            <div class=" gallery-item rounded-2xl">
                            <a href="#"><img src="images/scr01.jpg" alt="{{ $product->name }}" class="image image-full rounded gallery-image"/></a>
                            <h3 class="title">{{ $product->name}}</h3>
                            <p class="text-gray-500">{{$product->description}}</p>
                            <a href="{{ route('products.show', $product->id) }}" class="button button-small p-2 m-2 rounded-2xl">{{ $product->name
                                }}</a>
                            </div>
                    @empty
                        <p>
                            Пока нет подходящих изделий.
                        </p>
                    @endforelse
                </div>
            </div>
        </div>
</div>


@endsection

</body>

<style>


</style>
