<div>

    <h1>Client {{$client->user->name}}</h1>
    <table class="reservation-table">
        <thead>
            <tr>
                <th>Room</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            {{-- @dd($reservations) --}}
            @foreach($reservations as $reservation)
            <tr>
                <td>{{$reservation->room->room_number}}</td>
                <td>{{$reservation->checkin}}</td>
                <td>{{$reservation->checkout}}</td>
                <td>{{$reservation->total}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>