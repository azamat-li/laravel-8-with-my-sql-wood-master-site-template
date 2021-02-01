<!DOCTYPE html>

@section('head')
<title>Контакты предприятия Столярофф Цех.</title>
<meta
    content="контакты столярного цеха в Учалинском районе, контакты столярного цеха в Учалинском районе, контакты столярного цеха в селе Ахуново, контакты столярного цеха села Ахуново, телефон Ильдара Ильгамовича Алибаева, Ильдар Ильгамович Алибаев"
    name="keywords"/>
<meta
    content="Контакты  {{ config('app.name') }}- цеха села Ахуново Учалинского района"
    name="description"/>
<meta
    content="{{ config('app.name') }}"
    name="author"/>
@endsection

@extends ('layout')

@section('content')
<div id="page-wrapper" class="text-gray-600 text-2xl border-t border-b border-gray-200">
    Контакты.
</div>
<div id="page-hint" >
    Для связи со
    <strong>  {{ config('app.name') }}</strong> вы можете воспользоваться удобным для вас способом связи из указанных ниже.
</div>
<div id="wrapper">
    <div id="feedback" class="lg:px-4" >
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg ">
            <div class=" border-t border-gray-200 py-5  sm:px-6 ">
                <p class="mt-1  text-center  text-sm text-gray-500">
                    Контактные данные.
                </p>
            </div>
            <div class="border-t border-b relative border-gray-200 lg:px-64">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"></div>

                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500 text-center">
                            Электронная почта
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 text-center ">
													TODO: add email
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
													Рабочий телефон
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
													TODO: add work phone
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Мобильный телефон
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            +7 961 04 66 107
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Адрес столярного цеха
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            TODO: add address
                        </dd>
                    </div>
                </dl>
            </div>
            <div class="rounded-2xl w-full lg:px-64">
                <div class="w-full" style="position:relative;overflow:hidden;"><a href="https://yandex.com/maps?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0;">Yandex.Maps</a><a href="https://yandex.com/maps/geo/selo_akhunovo/53071444/?ll=59.604049%2C54.204921&utm_medium=mapframe&utm_source=maps&z=17" style="color:#eee;font-size:12px;position:absolute;top:14px;">Yandex.Maps</a><iframe src="https://yandex.com/map-widget/v1/-/CCUEMAc-sB" width="720" height="400"  style="position:relative;"></iframe></div>
            </div>
        </div>
</div>
</div>
@endsection
