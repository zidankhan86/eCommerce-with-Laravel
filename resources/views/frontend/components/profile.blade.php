<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - eCommerce</title>
</head>
<body>
    <div style="max-width: 400px; margin: 0 auto; padding: 20px; text-align: center; font-family: Arial, sans-serif;">
        <img src="https://via.placeholder.com/150" alt="User's Profile Picture" style="border-radius: 50%; width: 150px; height: 150px; border: 5px solid #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
        <h2 style="margin: 10px 0;">{{ auth()->user()->name }}</h2>
        <p style="color: #777;">Joined: {{ auth()->user()->created_at->diffForHumans() }}</p>

        <ul style="list-style: none; padding: 0; text-align: left;">
            <form action="logout.php" method="post">

            <li>
                <strong>Address: </strong> {{ auth()->user()->address }}<br>

            </li>
            <li>
                <strong>Phone: </strong>{{ auth()->user()->phone }}<br>

            </li>
            <li>
                <strong>Email: </strong>{{ auth()->user()->email }}<br>

            </li>
            {{-- <button type="submit" style="background-color: #ff5733; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Logout</button> --}}
             </form>
                        </ul><br><br>
                    </div><br><br>
                            <!-- Booking History -->
                            <h3>Booking History</h3><br>                 
                            </div>
                        </div>
                    </div>
                    <div class="table-container">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Booking Name</th>
                                  <th scope="col">Order ID</th>
                                  <th scope="col">Pay</th>
                                  <th scope="col">Placed On</th>
                                  <th scope="col">Transaction No</th>
                                  <th scope="col">Order Status</th>
                                  <th scope="col">Action</th>
                                  <th scope="col">Invoice</th>
                              </tr>
                          </thead>
                          <tbody>
                              @if (empty($order))
                              <tr>
                                  <td colspan="8">No Order History</td>
                              </tr>
                              @else
                              @foreach ($order as $index => $item)
                              <tr>
                                  <th scope="row">{{ $index + 1 }}</th>
                                  <td>{{ $item->first_name }}</td>
                                  <td>#{{ $item->total_price }}{{ $item->id }}67890</td>
                                  <td>BDT {{ $item->total_price }}</td>
                                  <td>{{ $item->created_at }}</td>
                                 
                                  <td>{{ $item->status }}</td>
                                  <td>
                                      {{-- @if($item->status == 'Pending')
                                      <a href="{{ route('cancel.hotel', $item->id) }}" class="btn btn-danger">Cancel Booking</a>
                                      @elseif($item->status == 'Canceled')
                                      <button class="genric-btn danger circle" style="color: rgb(223, 13, 48);">Booking Canceled</button>
                                      @endif --}}
                                  </td>
                                  
                              </tr>
                              @endforeach
                              @endif
                          </tbody>
                      </table>
                  </div>

    </div>
</body>
</html>
