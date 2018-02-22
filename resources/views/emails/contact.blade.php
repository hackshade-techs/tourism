@component('mail::message')
# Royal Experience Contact Feedback

 Name: {{ $data['name'] }}
 Email: {{ $data['email'] }}
 Message: {{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
