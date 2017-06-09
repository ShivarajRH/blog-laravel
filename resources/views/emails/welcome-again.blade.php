@component('mail::message')
# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => 'https://laracasts.com'])
Learn Laravel
@endcomponent

@component('mail::panel', ['url' => ''])
Some inspirational quotes goes here, or learn laravel to get inspiration
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
