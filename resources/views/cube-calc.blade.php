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
