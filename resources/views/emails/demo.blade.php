
@component('mail::message', ['subcopy' => ''])
Dear Ziara Travels,

@component('mail::panel')
I {{ $booking->customer_name }}, would like to book a <strong>{{ $booking_type }}</strong> as follows:
@component('mail::table')
|           |          |
| :------------ |:---------------|
@isset($booking->destination)
| Destination:  | {{ $booking->destination }}  |
@endisset
@isset($booking->trip_type)
| Trip Type:  | {{ $booking->trip_type }}  |
@endisset
@isset($booking->budget)
| Budget:  | {{ $booking->currency . '' . number_format($booking->budget, 2) }}  |
@endisset
@isset($booking->month)
| Month:  | {{ $booking->month }}  |
@endisset
@isset($booking->date_of_travel)
| Travel Date:  | {{ $booking->date_of_travel }}  |
@endisset
@isset($booking->flight_class)
| Flight:  | {{ $booking->flight_class }}  |
@endisset
@isset($booking->number_of_travellers)
| Travellers:  | {{ $booking->number_of_travellers }}  |
@endisset
@endcomponent

@endcomponent

<b>Contact Info</b><br>
Email: <a href="mailto:{{ $booking->email }}">{{ $booking->email }}</a><br>
@isset($booking->mobile_number)
Phone: <a href="tel:{{ $booking->mobile_number }}">{{ $booking->mobile_number }}</a>
@endisset
<br><br>
Thank You
@endcomponent