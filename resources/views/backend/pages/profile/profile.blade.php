@extends('backend\master')
@section('content')
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
        </ul>

    </div>
</body>
</html>


@endsection
