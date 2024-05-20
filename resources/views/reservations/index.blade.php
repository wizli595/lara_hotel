<div>
   <table>
         <thead>
              <tr>
                <th>Client</th>
                <th>Room</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Price</th>
                <th>Actions</th>
              </tr>
         </thead>
         <tbody>
              @foreach($reservations as $reservation)
              <tr>
                <td>{{$reservation->client->user->name}}</td>
                <td>{{$reservation->room->room_number}}</td>
                <td>{{$reservation->checkin}}</td>
                <td>{{$reservation->checkout}}</td>
                <td>{{$reservation->total}}</td>
                <td>
                    <a href="{{route('reservations.show', $reservation->id)}}"> {{">>"}} </a>
                    <a href="{{route('reservations.edit', $reservation->id)}}">Edit</a>
                    <form action="{{route('reservations.destroy', $reservation->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
              </tr>
              @endforeach
         </tbody>
   </table>
</div>
