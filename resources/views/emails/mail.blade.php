@component('mail::message')
# Добрый день!

Пользователь по имени <strong>{{ $name }}</strong> оставил заявку с номером <a href="tel:{{$tel}}"> {{ $tel }}</a> на вашем сайте 

Спасибо,<br>
{{ config('app.name') }}
@endcomponent
