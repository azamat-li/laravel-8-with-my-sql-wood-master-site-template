<!DOCTYPE html>

@section('head')
<title>{{ config('app.name') }}</title>
<meta
    content=" {{ config('app.name') }} - цех села Ахуново Учалинского района"
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
				<div class="title">
									<h2 class="p-2 m-3">рад  <strong>#{{ $visits ?? 'не подсчитываемому пока' }}</strong> просмотру мастерской.</h2>
				</div>
				<div id="page-hint"> <strong>{{ config('app.name') }}</strong> - это индивидуальный подход и учёт желаний
						каждого клиента.
				</div>
			</div>
@endsection
