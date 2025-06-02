<x-mail::message>
# Hello, your have received an enquiry!

<h3>Name: {{$data['name']}}</h3>
<h3>Email: {{$data['email']}}</h3>
<h3>MessageContent: {{$data['messageContent']}}</h3>

<x-mail::button :url="$url">
View More Details
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>