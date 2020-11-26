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
    <div class="bg-gray-100 pl-10 ">
        <a href="clients/create" class="button rounded-2xl hover:bg-green-400">Добавить  Клиента</a>
    </div>
    <div id="page-wrapper" class="text-gray-600 text-2xl ">
        С кем мы сотрудничаем
    </div>
    <div class="pb-96">
    <div id="page-wrapper" class="text-lg pb-4 p-2 text-center">
        Здесь представлены уже воспользовавшиеся услугами
        <strong> Алибаев ИП</strong>
        организации.
    </div>
    <div id="wrapper" >
        <div id="three-column" class="ml-8 " >
            <div class="gallery mt-6">
            @foreach($clients as $client)
                <div id="tbox1" class="gallery-item rounded-2xl">
                    <h2 class="title">{{ $client->name}}</h2>
                    <p class="text-gray-500">{{$client->about}}</p>
                    <a href="{{ route('clients.show', $client->id) }}" class="button rounded-lg">О Клиенте  {{ $client->name }} </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

</body>

