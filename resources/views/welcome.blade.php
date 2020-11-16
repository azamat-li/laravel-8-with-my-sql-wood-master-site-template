
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
<body>
    @extends ('layout')
    @section('head')
    <div id="header-wrapper">
        <div id="header" class="container">
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
        </div>
    </div>
    @endsection

    @section('content')
    <div id="page-wrapper">
        <div id="page" class="container">
            <div class="title">
                <h2>Рады Видеть в Нашей Мастерской</h2>
            </div>
            <p>Столярный цех  <strong>ИП Алибаев</strong> -  это индивидуальный подход и учёт желаний каждого клиента </p>
	</div>
</div>
<div id="wrapper"></div>
@endsection

</body>
</html>