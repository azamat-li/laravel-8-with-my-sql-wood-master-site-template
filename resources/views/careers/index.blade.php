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

<body >
@extends ('layout')

@section('content')
<div id="page-wrapper" class="text-gray-600 text-2xl ">Открытые вакансии.</div>
<p id="page-wrapper" class="text-lg pb-4 p-2 text-center">Здесь можно узнать о возможностях трудоустройства в организации или сотрудничества с
    <strong> ИП Алибаев</strong>.
</p>
<div id="wrapper">
    <div  id="three-column">
        <div class=" gallery my-6">
        @forelse($careers as $career)
        <div  class=" gallery-item  px-2 rounded-2xl">
            <h3 class="title">{{ $career->name}}</h3>
            <p class="text-gray-500">{{$career->description}}</p>
            <a href="{{ route('products.show', $career->id) }}" class="button button-small mb-2 rounded-2xl">{{ $career->name
                }}</a>
            <div class="text-left my-2 mx-4">
                <div class="right-2 px-6 inline ">Область работ</div>
                <div class="text-lg text-gray-50 bg-yellow-800 w-1/4 rounded-full  inline px-4 font-bold">{{ $career->field }}</div>
            </div>
        </div>
        @empty
            <p class="text-center">
                Простите, но открытых вакансий на данный момент нет.
            </p>
        @endforelse
        </div>
    </div>
</div>
@endsection

</body>





