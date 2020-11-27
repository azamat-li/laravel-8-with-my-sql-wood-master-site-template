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
<div id="page-wrapper" class="text-gray-600 text-2xl ">
    Контакты.
</div>
<div id="page-wrapper" class="text-lg pb-4 p-2 text-center">
    Для связи с
<strong> ИП Алибаев</strong> вы можете воспользоваться удобным для вас способом связи из указанных ниже.
</div>
<div id="wrapper">
	<div id="three-column" class="container"></div>
	<div id="portfolio" class="container">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white  shadow overflow-hidden sm:rounded-lg ">
            <div class="px-4 py-5 sm:px-6">
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Контактные данные.
                </p>
            </div>
            <div class="border-t relative border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"></div>

                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Электронная почта
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            ali.ildar1964@yandex.ru
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Стационарный телефон
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            +7 347 91 72 356
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
                </dl>
            </div>
            <div class="rounded-2xl w-full ">
                <div class="w-full" style="position:relative;overflow:hidden;"><a href="https://yandex.com/maps?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0;">Yandex.Maps</a><a href="https://yandex.com/maps/geo/selo_akhunovo/53071444/?ll=59.604049%2C54.204921&utm_medium=mapframe&utm_source=maps&z=17" style="color:#eee;font-size:12px;position:absolute;top:14px;">Yandex.Maps</a><iframe src="https://yandex.com/map-widget/v1/-/CCUEMAc-sB" width="720" height="400"  style="position:relative;"></iframe></div>
            </div>
        </div>
</div>
</div>
@endsection

</body>
