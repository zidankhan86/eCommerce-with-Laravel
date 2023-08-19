@extends('backend.master')

@section('content')
    <div class="container">
        <h3>Notifications</h3>

        @if ($notifications->count() > 0)
    <span class="badge badge-pill badge-danger">{{ $notifications->count() }}</span>
      @endif
        <ul>
            @foreach ($notifications as $notification)
                <li>
                    {{ $notification->data['message'] }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
