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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700" rel="stylesheet" />
    <link href="{{asset('css/default.css')}}" rel="stylesheet"  />
    <link href="{{asset('css/fonts.css')}}"" rel="stylesheet"  />
    <link href="{{asset('css/app.css')}}" rel="stylesheet"  />
</head>

<body>
    @section('head')
    @extends ('layout')
            <div id="logo">
                <h1><a href="/">ИП Алибаев</a></h1>
                <div id="menu">
                    <ul>
                        <li class="{{Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/" accesskey="1" title="">Домашняя</a></li>
                        <li class="{{Request::path() === 'about' ? 'current_page_item' : ''}}"><a href="about" class=" current_page_item " accesskey="3" title="">О Нас</a></li>
                        <li class="{{Request::path() === 'clients' ? 'current_page_item' : ''}}"><a href="clients" class=" current_page_item " accesskey="3" title="">Клиенты</a></li>
                        <li class="{{Request::path() === 'applying' ? 'current_page_item' : ''}}"><a href="#" class=" current_page_item" accesskey="4" title="">Вакансии</a></li>
                        <li class="{{Request::path() === 'contacts' ? 'current_page_item' : ''}}"><a href="#" class=" current_page_item" accesskey="5" title="">Контакты</a></li>
                    </ul>
                </div>
    </div>
    @endsection

    @section('content')
    <div id="page-wrapper">Наши Клиенты</div>
    <div id="wrapper">
	<div id="three-column" class="container"></div>
    <div id="portfolio" class="container"></div>
    <p>
        {{ $client->about}}
    </p>
</div>
@endsection

</body>
</html>