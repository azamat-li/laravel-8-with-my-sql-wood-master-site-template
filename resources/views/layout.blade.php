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
<html lang="ru">
<head>
    @yield('head')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700"
          rel="stylesheet"/>
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/vanilla.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/tailwind.css')}}" rel="stylesheet"/>

{{--    From CDN --}}
{{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}


    <!--  jquery from CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Before page is completely loaded script -->
    <script>
        $(document).ready(function () {
            $('#loading').hide()
        });
    </script>
</head>



<body>
<div id="header-wrapper" class="">
    <div id="header" class="pl-6 font-bold">
        <div id="logo" class="mr-4">
            <div class=" bg-gray-800 flex rounded-full lg:w-96 lg:py-4  lg:p-8 p-4">
                <h4  class="rounded-full flex lg:text-4xl text-2xl"><a href="/" >Столярофф Цех</a></h4>
            </div>
            <div id="menu" class="flex lg:rounded-full rounded-3xl flex-col bg-gray-800 py-1 h-full h-16 my-1 lg:flex-row items-center justify-center lg:justify-between w-full h-full ">
                <ul class=" lg:flex  lg:items-center lg:content-center w-full text-center  lg:gap-x-7">
                    <li class="{{Request::path() === '/' ? 'current_page_item' : ''}} "><a href="/"
                                                                                          class="lg:items-center lg:justify-center  lg:flex lg:rounded-l-full lg:rounded-r-none lg:border-0
                                                                                           lg:ml-1  justify-center
                                                                                          border-l-4 border-r-4  border-gray-800
                                                                                          rounded-t-3xl   current_page_item"
                                                                                          accesskey="1"
                                                                                          title="Домашняя">Домашняя</a>
                    </li>
                    <li class="{{Request::path() === 'about' ? 'current_page_item' : ''}}"><a href="/about"
                                                                                              class="current_page_item  lg:flex lg:p-0 lg:m-0  "
                                                                                              accesskey="2"
                                                                                              title="Об ИП">Об ИП</a>
                    </li>
                    <li class="{{Request::path() === 'clients' ? 'current_page_item' : ''}} "><a href="/clients"
                                                                                                class="w-full current_page_item "
                                                                                                accesskey="3"
                                                                                                title="Клиенты">Клиенты</a>
                    </li>
                    <li class="{{Request::path() === 'products' ? 'current_page_item' : ''}}"><a href="/products"
                                                                                                 class=" current_page_item "
                                                                                                 accesskey="4"
                                                                                                 title="Из дерева">Из
                            дерева</a></li>
                    <li class="{{Request::path() === 'careers' ? 'current_page_item' : ''}}"><a href="/careers"
                                                                                                class=" current_page_item"
                                                                                                accesskey="6"
                                                                                                title="Вакансии">Вакансии</a>
                    </li>
                    <li class="{{Request::path() === 'contacts' ? 'current_page_item' : ''}}"><a href="/contacts"
                                                                                                 class=" current_page_item"
                                                                                                 accesskey="7"
                                                                                                 title="Контакты">Контакты</a>
                    </li>
                    <li class="{{Request::path() === 'feedback' ? 'current_page_item lg:current_page_item_right' : ''}}"><a href="/feedback"
                                                                                                 class="current_page_item  lg:rounded-r-full lg:rounded-l-none lg:border-0
                                                                                                         border-l-4 border-r-4  border-gray-800   rounded-b-3xl  "
                                                                                                 accesskey="8"
                                                                                                 title="Связаться">Связаться</a>
                    </li>
                </ul>
        </div>
            @yield('auto-type')
        </div>
    </div>
</div>

@yield('content')

<div  id="copyright" class=" lg:h-44 h-20 grid justify-items-center " >
    <div ></div>
    <div >Столярофф Цех | Based on design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</div>
</div>
</body>
<div id="loading" class="text-lg bg-gray-800 text-gray-200 rounded">Идет подготовка...</div>
