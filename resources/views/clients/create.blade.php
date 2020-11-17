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
    @section('head')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    @endsection
</head>

<body>
    @extends ('layout')

    @section('content')
    <div id="page-wrapper"></div>
    <div id="wrapper">
	<div id="three-column" class="container"></div>
    <div id="portfolio" class="container">
    </div>
</div>


<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">Новый Клиент</h1>
        <div class="section">
            <form method="POST" action="/clients">
                    @csrf
                    <div class="field">
                        <label class="label" for="name">Имя Клиента</label>
                        <div class="control">
                            <input type="text" class="input" name="name" id="">
                        </div>

                        <div class="field">
                            <label class="label" for="about">Тёплые слова о клиенте</label>
                            <div class="control">
                                <textarea class="textarea" name="about" id="">
                                </textarea>
                            </div>
                        </div>
                            
                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-text" type="submit">Добавить Клиента</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

@endsection

</body>
</html>