<!DOCTYPE html>

@section('head')
<title>Клиенты столярного цеха села Ахуново Учалинского района</title>
    <meta
        content="клиенты столярного цеха в Учалинском районе, заказали в столярном цехе в Учалинском районе, клиенты столярного цеха в селе Ахуново, заказали в столярном цехе села Ахуново"
        name="keywords"/>
    <meta
        content="Клиенты столярного цеха села Ахуново Учалинского района"
        name="description"/>
@endsection

@extends ('layout')

@section('content')
<div class="bg-gray-100 pt-20 pl-12  ">
    <a href="clients/create"
       class=" border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-gray-200 rounded px-4 py-2 ">
        Добавить Клиента</a>
</div>
<div id="page-wrapper" class="text-gray-600 text-2xl ">
    С кем мы сотрудничаем
</div>
<div id="page-hint">
    Здесь представлены уже воспользовавшиеся услугами
    <strong> Алибаев ИП</strong>
    организации.
</div>
<div id="wrapper">
    <div id="three-column" class="mx-4 my-6">
        <div class="gallery mx-4 my-6 ">
            @forelse($clients as $client)
                <div class=" p-2 gallery-item  rounded-2xl">
                    <h2 class="title p-2">{{ $client->name}}</h2>
                    <div id="eyebrow" class="rounded-full p-0.5 mx-1.5 mt-1 mb-2"
                         style="background-color: {{ $client->color}}"></div>
                    <p class="text-gray-500">{{$client->about}}</p>
                    <div class="pt-12 pb-5">
                        <a href="{{ route('clients.show', $client->id) }}" class="button">О Клиенте {{
                        $client->name }}</a>
                    </div>
                </div>

                @if(session('message'))
                    <p class="text-green-400 text-sm mt-2 text-center">
                        {{ session('message') }}
                    </p>
                @endif

            @empty
                <p class="text-center">
                    Простите, но нет соответствующих клиентов.
                </p>
            @endforelse
        </div>
    </div>
</div>
@endsection

