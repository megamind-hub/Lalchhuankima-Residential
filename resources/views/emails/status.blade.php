@component('mail::message')
# Introduction
Your name is {{$person['name']}}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
