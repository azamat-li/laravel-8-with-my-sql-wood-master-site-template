@component('mail::message')
## От ИП Алибаев

Похоже, что вы интересовались темой

ИП Алибаев, это

- Индивидуальный подход
- Несинтетические материалы

@component('mail::button', ['url' => 'localhost:8000'])
Посетить ИП Алибаев
@endcomponent


Благодарим, <br>
{{ config('app.name') }}


@endcomponent
