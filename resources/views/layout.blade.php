
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Brushwood
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20131025

-->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <meta
        content="ИП Алибаев, столярная мастерская в Учалинском районе,  столярная мастерская в Ахуново, изделия из дерева в Учалинском районе, заказать дверь в Учалах, столяр в Учалах, столяр в Ахуново"
        name="keywords"/>
    <meta
        content="Столярный цех в Учалинском районе по производству изделий преимущественно из дерева, ассортиментных и на заказ."
        name="description"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700"
          rel="stylesheet"/>
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
    @yield('head')
</head>
<body>

<div id="header-wrapper">
    <div id="header" class="mt-2 ml-4">
        <div id="logo">
            <h1 class="rounded-full"><a href="/">ИП Алибаев</a></h1>
            <div id="menu" class="pt-2">
                <ul class="rounded-full">
                    <li class="{{Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/"
                                                                                          class="current_page_item"
                                                                                          accesskey="1"
                                                                                          title="Домашняя">Домашняя</a>
                    </li>
                    <li class="{{Request::path() === 'about' ? 'current_page_item' : ''}}"><a href="/about"
                                                                                              class="current_page_item"
                                                                                              accesskey="2"
                                                                                              title="Об ИП">Об ИП</a>
                    </li>
                    <li class="{{Request::path() === 'clients' ? 'current_page_item' : ''}}"><a href="/clients"
                                                                                                class=" current_page_item "
                                                                                                accesskey="3"
                                                                                                title="Клиенты">Клиенты</a>
                    </li>
                    <li class="{{Request::path() === 'products' ? 'current_page_item' : ''}}"><a href="/products"
                                                                                                 class=" current_page_item"
                                                                                                 accesskey="4"
                                                                                                 title="Из дерева">Из
                            дерева</a></li>
                    <li class="{{Request::path() === 'metal_products' ? 'current_page_item' : ''}}"><a
                            href="/metal_products"
                            class=" current_page_item"
                            accesskey="5" title="Из металла">Из металла</a></li>
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
                    <li class="{{Request::path() === 'feedback' ? 'current_page_item' : ''}}"><a href="/feedback"
                                                                                                 class=" current_page_item"
                                                                                                 accesskey="8"
                                                                                                 title="Связаться">Связаться</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@yield('head')
@yield('content')
<div id="copyright" class="container">
    <p>ИП Алибаев | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
    <ul class="contact">
        <li><a href="#"><span>Вконтакте</span></a></li>
        <li><a href="#"><span>Facebook</span></a></li>
    </ul>
</div>
</body>
