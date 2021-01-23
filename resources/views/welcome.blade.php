<!DOCTYPE html>

@section('head')
<title xmlns="http://www.w3.org/1999/html">Столярофф Цех</title>
<meta
    content="столярный цех в Учалинском районе, столярный цех в Учалинском районе, столярный цех в селе Ахуново, столярный цех села Ахуново, Ильдар Ильгамович Алибаев"
    name="keywords"/>
<meta
    content="Столярофф Цех по производству изделий из дерева"
    name="description"/>
<meta
    content="ИП Столярофф Цех"
    name="author"/>
<meta property="og:title" content="Столярофф Цех" />
<meta property="og:site_name" content="Столярофф Цех" />
<meta property="og:description" content="Индивидуальный подход и учёт пожеланий каждого клиента" />
<meta name="twitter:title" content="Столярофф Цех">
<meta name="twitter:description" content="Индивидуальный подход и учёт пожеланий каждого клиента">

@endsection


@section('about')
{{-- For  mobile screen--}}
<div class="lg:hidden block flex">
    <div class="bg-gray-800 bg-gradient  rounded-full  block flex my-2 ">
         </h1><h1 class="float-left flex text-4xl p-4">Изделия из дерева.</h1>
    </div>
</div>

{{-- For large screen--}}
<div class="hidden lg:block">
    <div class="type-js bg-gradient bg-gray-800 rounded-full block mt-4">
        </h1><h1 class="text-js float-left text-4xl p-4">Изделия из дерева.</h1>
    </div>
</div>
@endsection

@extends ('layout')

@section('content')
    <div id="page-wrapper">
        <div id="page" class="container">
            <div class="title">
                <h2>Рады  <strong>#{{ $visits ?? 'не подсчитываемому пока' }}</strong> просмотру нашей мастерской.</h2>
            </div>
            <div id="page-hint"> <strong>Столярофф Цех</strong> - это индивидуальный подход и учёт желаний
                каждого клиента.
            <comment></comment>
            </div>
        </div>
    </div>
    <div id="wrapper"></div>
@endsection
