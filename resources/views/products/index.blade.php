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
</head>

<body>
@extends ('layout')

@section('content')
<div id="page-wrapper" class="text-gray-600 text-2xl ">Завершенные проекты</div>
<p id="page-wrapper" class="text-lg pb-4 p-2 text-center"> Здесь Вы можете ознакомиться с выполненными заказами
    различной
    сложности.
</p>
<div id="wrapper">
    <div id="three-column" class="py-8">
        <div class=" gallery my-6">
            @forelse($products as $product)
            <div class=" gallery-item p-2 rounded-2xl">
                <a href="#"><img src="images/scr01.jpg" alt="{{ $product->name }}"
                                 class="image rounded-2xl image-full rounded gallery-image"/></a>
                <h3 class="title">{{ $product->name}}</h3>
                <p class="text-gray-500">{{$product->description}}</p>
                <a href="{{ route('products.show', $product->id) }}" class="button button-small p-2 m-2 rounded-2xl">{{
                    $product->name
                    }}</a>
            </div>
            @empty
            <p class="text-center">
                Простите, но подходящих изделий нет.
            </p>
            @endforelse
        </div>
    </div>
</div>
@endsection

</body>





