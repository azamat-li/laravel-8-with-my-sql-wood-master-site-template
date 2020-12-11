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
        <h1 class="heading has-text-weight-bold is-size-4">Обновить Информацию о Клиенте</h1>
        <div class="section">
            <form method="POST" action="/clients/{{$client->id}}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="name">Имя Клиента</label>
                    <div class="control">
                        <input type="text" class="input @error('name') alert  is-danger @enderror"
                               name="name" id="name"
                               value="{{$client->name}}" required>
                        @error('name')
                        <p class="  is-danger alert"> {{ $errors->first('name') }} </p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label" for="about">Тёплые слова о клиенте</label>
                        <div class="control">
                                <textarea class="textarea @error('about')  is-danger alert @enderror" name="about"
                                          id="about" required>{{$client->about}}</textarea>
                            @error('about')
                            <p class="help  is-danger alert"> {{ $errors->first('about') }} </p>
                            @enderror
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-text" type="submit">Обновить информацию о клиенте</button>
                        </div>
                        <div class="control">
                            <!--                            <button class="button  is-text" ></button>-->
                            <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                            <!-- we will add this later since its a little more complicated than the other two buttons -->
                            {{ Form::open(array('url' => 'clients/' . $value->id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete this client', array('class' => 'border border-red-500 text-red-500
                            hover:bg-red-500 hover:text-gray-200 rounded px-4 py-2')) }}
                            {{ Form::close() }}

                            <button type="button" type="submit"
                                    class="border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-gray-200 rounded px-4 py-2">
                                Обновить информацию о клиенте
                            </button>
                            <!--                            <button type="button" class="border border-red-500 text-red-500 hover:bg-red-500 hover:text-gray-200 rounded px-4 py-2">Danger</button>-->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    @endsection

</body>
