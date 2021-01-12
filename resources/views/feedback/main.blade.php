<!DOCTYPE html>

@section('head')
    <title >Система обратной связи столярного цеха села Ахуново Учалинского района</title>
    <meta
        content="feedback, обратная связь столярного цеха в Учалинском районе, сообщить столярному цеху в Учалинском районе, связь со столярным цехом в селе Ахуново, отправить сообщение в столярный цех села Ахуново"
        name="keywords"/>
    <meta
        content="Обратная связь столярного цеха села Ахуново Учалинского района"
        name="description"/>
    <meta
        content="ИП Столярофф Цех"
        name="author"/>
@endsection

@extends ('layout')

@section('content')
    <div id="page-wrapper" class="text-gray-600 text-2xl ">Улучшить мастерскую.</div>
    <div id="page-hint" >
        Здесь можно заказать изделие либо что-то посоветовать мастерской
        <strong>Столярофф Цех</strong>.
    </div>
    <div id="wrapper">
        <div class="lg:px-4">
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
                <div class="text-center  w-full ">
                    <button
                        type="submit"
                        class="border border-yellow-600 text-yellow-600 rounded-full px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-yellow-600 focus:outline-none focus:shadow-outline">
                        Сообщить Цеху
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

<style>
    label {
        @apply py-2 my-2;
    }

    input {
        @apply py-2 my-2;
    }
</style>

