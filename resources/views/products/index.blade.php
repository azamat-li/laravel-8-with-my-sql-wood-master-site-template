<!DOCTYPE html>

@section('head')
    <title>Изделия из дерева столярного цеха села Ахуново Учалинского района</title>
    <meta
        content="изделия из дерева столярного цеха в Учалинском районе, продукция столярного цеха в Учалинском районе, заказать из дерева в Учалах, из дерева в Учалах"
        name="keywords"/>
    <meta
        content="Изделия из дерева, произведенные в столярном цехе села Ахуново Учалинского района"
        name="description"/>
    <meta
        content="ИП Алибаев"
        name="author"/>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700"
          rel="stylesheet"/>
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
@endsection

@extends ('layout')

@section('content')
<div id="page-wrapper" class="text-gray-600 text-2xl ">Завершенные проекты</div>
<p id="page-hint" > Здесь Вы можете ознакомиться с выполненными заказами
    различной
    сложности.
</p>
<div id="wrapper">
    <div id="three-column" class="py-8">
        <div class=" gallery my-6">
            @forelse($products as $product)
            <div class=" gallery-item p-2 rounded-2xl">
                <a href="#"><img src="images/scr01.jpg" alt="{{ $product->name }}"
                                 class="image rounded-2xl image-full rounded gallery-image"/></a>
                <h3 class="title">{{ $product->name}}</h3>
                <p class="text-gray-500">{{$product->description}}</p>
                <div class="pt-12 pb-5">
                    <a href="{{ route('products.show', $product->id) }}" class="button ">{{
                        $product->name
                    }}</a>
                </div>
            </div>
            @empty
            <p class="text-center">
                Простите, но подходящих изделий нет.
            </p>
            @endforelse
        </div>
    </div>
</div>
@endsection





