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

    <div id="page-wrapper" class="text-gray-600 text-2xl ">Обратная связь</div>
    <div id="page-wrapper" class="text-lg pb-4 p-2 text-center">
        Здесь можно заказать изделие или сообщить релевантую столярному цеху
        <strong> ИП Алибаев</strong> информацию.
    </div>
    <div id="wrapper">
        <div id="three-column" class="container"></div>
        <div id="portfolio" class="container">
            <form
                method="POST"
                action="/feedback" class="shadow-md rounded-3xl px-4 py-6 bg-write">
                @csrf
                <div class="w-full text-center font-bold w-full text-lg">
                    <label for="email" class=" text-bold  text-lg pt-2 text-center">Моя почта</label>
                    <input type="text" class="w-full text-lg p-2  border rounded-full" name="email" id="email">
                    @error('email')
                    <div class="text-red-600 text-xs">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="w-full text-center  font-bold w-full text-lg">
                    <label for="message" class=" text-center pt-2 text-bold  text-lg ">Хочу сообщить</label>
                    <textarea class="w-full text-lg px-2  border rounded-2xl" name="message" id="message"></textarea>
                </div>
                <button type="submit" name="submit" class="text-center font-bold w-full text-lg"></button>
                <div class="text-center  w-full ">
                    <button
                        type="submit"
                        class="border border-yellow-600 text-yellow-600 rounded-full px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-yellow-600 focus:outline-none focus:shadow-outline">
                        Сообщить ИП
                    </button>

                    @if(session('message'))
                        <p class="text-green-400 text-sm mt-2 text-center">
                            {{ session('message') }}
                        </p>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
</body>

<style>
    label {
        @apply py-2 my-2;
    }

    input {
        @apply py-2 my-2;
    }
</style>
