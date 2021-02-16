<!DOCTYPE html>

@section('head')
<title>{{ config('app.name') }}</title>

<meta
    content="Вычислитель кубометра"
    name="description" />
<meta
    content="{{ config('app.name') }}" 
    name="author" />

<meta property="og:title" content="Вычислить кубометр деревянного материала" />
<meta property="og:description" content="Кубометр по габаритам доски или кругляка" />
<meta property="og:image" content="/images/calc-big.jpeg" />
<meta property="og:type" content="website" />

<meta property="twitter:title" content="Вычислить кубометр деревянного материала" />
<meta property="twitter:description" content="Кубометр по габаритам доски или кругляка" />
<meta property="twitter:image" content="/images/calc-big.jpeg" />
<meta property="twitter:type" content="website" />

@livewireStyles
@endsection

@extends ('layout')

@section('content')
        <div id="page" >
            <div id="page-hint"> 
						@livewire('cube-calc')
            </div>
        </div>
@livewireScripts
@endsection
