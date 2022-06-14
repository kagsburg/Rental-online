@component("mail::message")
# Welcome to {{ config('app.name') }}
#Hey {{$NAME}}

@component("mail::button", ["url" => "http://localhost:8000/"])
Login
@endcomponent

Thank you for signing up!<br>
James Bond
@endcomponent