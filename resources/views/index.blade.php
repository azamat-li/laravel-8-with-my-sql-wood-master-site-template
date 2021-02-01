<!DOCTYPE html>

@section('head')
<title>{{ config('app.name') }}</title>
<meta
    content="столярный цех в Учалинском районе, столярный цех в Учалинском районе, столярный цех в селе Ахуново, столярный цех села Ахуново, Ильдар Ильгамович Алибаев"
    name="keywords" />
<meta
    content=" {{ config('app.name') }} - цех села Ахуново Учалинского района"
    name="description" />
<meta
    content=""{{ config('app.name') }} 
    name="author" />
@endsection

@extends ('layout')

@section('content')
        <div id="page" >
	    <div class="title">
                <h2 class="p-2 m-3">рад  <strong>#{{ $visits ?? 'не подсчитываемому пока' }}</strong> просмотру мастерской.</h2>
            </div>
            <div id="page-hint"> <strong>{{ config('app.name') }}</strong> - это индивидуальный подход и учёт желаний
                каждого клиента.
            </div>
        </div>
@endsection
