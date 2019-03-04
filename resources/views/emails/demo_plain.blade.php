
@component('mail::message', ['subcopy' => ''])
Dear Ziara Tours/Travels,

@component('mail::panel')
I would like to book a {{ $booking_type }} as follows:
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
| Budget:  | {{ $booking->budget }}  |
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

Thank You,

<a href="mailto:{{ $booking->email }}">{{ $booking->email }}</a>

@endcomponent