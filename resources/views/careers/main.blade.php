<!DOCTYPE html>
@section('head')
    <title>Устроиться на работу в столярном цехе села Ахуново Учалинского района</title>
    <meta
        content="вакансия столяра в Учалинском районе, работа столяром в Учалинском районе, работа в селе Ахуново, работа плотником в Учалинском районе, вакансия плотника в Учалинском районе"
        name="keywords"/>
    <meta
        content="Работа в столярном цехе села Ахуново Учалинского района"
        name="description"/>
    <meta
        content="ИП Столярофф Цех"
        name="author"/>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700"
          rel="stylesheet"/>
    <link href="{{asset('css/fonts.css')}}"
    " rel="stylesheet" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
@endsection

@extends ('layout')

@section('content')
<div id="page-wrapper" class="text-gray-600 text-2xl ">Открытые вакансии.</div>
<p id="page-hint" >Здесь можно узнать о возможностях трудоустройства в организации или сотрудничества со
    <strong> Столярофф Цех</strong>.
</p>
<div id="wrapper">
    <div  id="three-column">
        <div class=" gallery my-6 py-2 px-4">
        @forelse($careers as $career)
        <div  class=" gallery-item  px-2 rounded-2xl">
            <h3 class="title">{{ $career->name}}</h3>
            <p class="text-gray-500">{{$career->description}}</p>
            <div class="pt-12 pb-5">
                <a href="{{ route('products.show', $career->id) }}" class="button">{{ $career->name
                    }}</a>
            </div>
            <div class="text-left my-2 mx-4">
                <div class="right-2 px-6 inline ">Область работ</div>
                <div class="text-lg  w-1/4 inline px-4 font-bold tag">{{ $career->field }}</div>
            </div>
        </div>
        @empty
            <p class="text-center">
                Простите, но открытых вакансий на данный момент нет.
            </p>
        @endforelse
        </div>
    </div>
</div>
@endsection






