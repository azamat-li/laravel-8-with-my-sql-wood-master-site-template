<div>


    <form
        method="POST"
        action="/feedback" class="shadow-md lg:w-3/5 lg:pl-64 rounded-3xl px-4 py-6 bg-write">
        @csrf
        <div class="w-full  ">
            <label for="email" class="w-full text-bold text-lg pt-2 text-center">Моя почта</label>
            <input type="text" class="w-full text-lg p-2  border rounded-full" name="email" id="email">
            @error('email')
            <div class="text-red-600 text-xs">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="w-full text-center  font-bold w-full text-lg">
            {{--                <label for="message" class=" text-center pt-2 text-bold  text-lg ">Хочу сообщить</label>--}}
            {{--                <textarea class="w-full text-lg px-2  border rounded-2xl" name="message" id="message"></textarea>--}}
        </div>

        <label for="font-family" class="w-full text-bold text-lg pt-2 text-center">Шрифт таблички</label>
        <select wire:model="font_family" name="font-family" id="font-family">
            {{--            TODO: refactor to use blade for generating options --}}
            {{--            @foreach($font_families as $font_family)--}}
            {{--                <option value="{{$font_family}}"> {{ $font_family }} </option>--}}
            <option value="Nunito">Nunito</option>
            <option value="Padauk">Padauk</option>
            {{--            @endforeach--}}
        </select>

        <label for="label" class="w-full text-bold text-lg pt-2 text-center">Номер дома</label>
        <input type="text" wire:model="label" id="label" name="label">

        <label for="curly" class="w-full text-bold text-lg pt-2 text-center">Наклонный шрифт</label>
        <input wire:model="curly" id="curly" name="curly" type="checkbox">

        <div id="preview" style="@if ($curly) font-style: italic @endif;
            font-family: {{$font_family}};
            " class="text-center font-bold mt-12 p-4 text-6xl ">
            {{ $label }}
        </div>

        <button type="submit" name="submit" class="text-center font-bold w-full text-lg"></button>

        <div class="text-center  w-full ">
            <button
                type="submit"
                class="border border-yellow-600 text-yellow-600 rounded-full px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-yellow-600 focus:outline-none focus:shadow-outline">
                Заказать табличку
            </button>
            <button
                wire:click="$set('label', '24/6')"
                type="button"
                class="inline border border-yellow-600 text-yellow-600 rounded-full px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-yellow-600 focus:outline-none focus:shadow-outline">
                Сбросить вариант
            </button>

            @if(session('message'))
                <p class="text-green-400 text-sm mt-2 text-center">
                    {{ session('message') }}
                </p>
            @endif

        </div>
    </form>
</div>

<style>
</style>
