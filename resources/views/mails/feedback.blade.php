@component('mail::message')
## От {{ config('app.name') }}

Похоже, что вы интересовались темой

{{ config('app.name') }}, это:

- Индивидуальный подход
- Несинтетические материалы

@component('mail::button', ['url' => 'https://{{ config(`app.name`) }}'])
Посетить
@endcomponent


Благодарим, <br>
{{ config('app.name') }}


@endcomponent
