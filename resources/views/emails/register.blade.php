@component('mail::message')

<p> Hello {{ $user->name }} </p>

@component('mail::button',['url' => url('varify/'.$user->remember_token)])
Verify

@endcomponent
<p> In case you have any issues please contact to our Team</p>
Thanks <br />
{{ config('app.name') }}
@endcomponent