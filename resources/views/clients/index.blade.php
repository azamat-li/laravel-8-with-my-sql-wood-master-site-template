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
    <a href="clients/create" class="button rounded-2xl hover:bg-green-400">Добавить Клиента</a>
</div>
<div id="page-wrapper" class="text-gray-600 text-2xl ">
    С кем мы сотрудничаем
</div>
<div id="page-wrapper" class="text-lg pb-4 p-2 text-center">
    Здесь представлены уже воспользовавшиеся услугами
    <strong> Алибаев ИП</strong>
    организации.
</div>
<div id="wrapper">
    <div id="three-column">
        <div class="gallery py-16 pl-8">
            @forelse($clients as $client)
            <div id="tbox1" class="bg-gray-100 p-2 gallery-item  rounded-2xl">
                <h2 class="title p-2">{{ $client->name}}</h2>
                <div id="eyebrow" class="rounded-full p-0.5 mx-1.5 mt-1 mb-2"
                     style="background-color: {{ $client->color}}"></div>
                <p class="text-gray-500">{{$client->about}}</p>
                <a href="{{ route('clients.show', $client->id) }}" class="button rounded-2xl">О Клиенте {{
                    $client->name }} </a>
            </div>
            @empty
            <p class="text-center">
                Простите, но нет соответствующих клиентов.
            </p>
            @endforelse
        </div>
    </div>
</div>
@endsection

</body>

