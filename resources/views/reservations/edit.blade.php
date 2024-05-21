<div>
    <form action="{{ route('reservations.update',$reservation) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $reservation->id }}">
        <input type="hidden" name="client_id" value="{{ $reservation->client->id }}">
        <div>
            <label for="checkin">checkin</label>
            <input type="date" name="checkin" value="{{ $reservation->checkin }}">
        </div>
        <div>
            <label for="checkout">checkout</label>
            <input type="date" name="checkout" value="{{ $reservation->checkout }}">
        </div>
        <div>
            <label for="total">total</label>
            <input type="text" name="total" value="{{ $reservation->total }}">
        </div>
        <div>
            <select name="room_id">
                @foreach($rooms as $room)
                <option value="{{ $room->id }}" {{ $room->id == $reservation->room_id ? 'selected' : '' }}>
                    {{$room->room_number }}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <button>update</button>
        </div>
    </form>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


</div>