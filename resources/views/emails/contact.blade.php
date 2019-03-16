
@component('mail::message', ['subcopy' => ''])
To Ziara Travels,

@component('mail::panel')

{{ $booking->message }}

@endcomponent

<b>Contact Info</b><br>
Name: {{ $booking->customer_name }}<br>
Email: <a href="mailto:{{ $booking->email }}">{{ $booking->email }}</a><br>
@isset($booking->mobile_number)
Phone: <a href="tel:{{ $booking->mobile_number }}">{{ $booking->mobile_number }}</a>
@endisset

<br><br>
Thank You
@endcomponent