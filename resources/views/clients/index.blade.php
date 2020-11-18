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

    @section('content')
    <div id="page-wrapper">Наши Клиенты</div>
    <div id="wrapper">
        <div id="three-column" class="container"></div>
    <div id="portfolio" class="container"></div>
    <div id="wrapper">
        <div id="three-column" class="container">
            <div><span class="arrow-down"></span></div>
            @foreach($clients as $client)
                <div id="tbox1">
                    <div class="title">
                        <h2>{{ $client->name}}</h2>
                    </div>
                    <p>{{$client->about}}</p>
                    <a href="/clients/{{$client->id}}" class="button">О Клиенте  {{ $client->name }} </a> 
                </div>
                @endforeach
            </div>
            <div id="portfolio" class="container"></div>
        </div>
    </div>
@endsection

</body>
</html>