<!DOCTYPE html>

@section('head')
<title>{{ config('app.name') }}</title>
<meta
    content="{{ config('app.name') }} - цех села Ахуново Учалинского района"
    name="description" />
<meta
    content="{{ config('app.name') }}" 
    name="author" />

<meta property="og:title" content=" {{ config('app.name') }} - цех по производству изделий из  дерева" />
<meta property="og:description" content="Производство изделий по заказу" />
<meta property="og:image" content="/images/index-big.jpeg" />
<meta property="og:type" content="website" />

<meta property="twitter:title" content=" {{ config('app.name') }} - цех по производству изделий из  дерева" />
<meta property="twitter:description" content="Производство изделий по заказу" />
<meta property="twitter:image" content="/images/index-big.jpeg" />
<meta property="twitter:type" content="website" />
@endsection

@extends ('layout')

@section('content')
	<div id="page" >
		<div id="page-hint"> <div data-cy="app-name" class="font-bold"><strong>{{ config('app.name') }}</strong></div> </div>
	</div>
@endsection
