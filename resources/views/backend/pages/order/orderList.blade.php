@extends('backend.master')

@section('content')
<div class="container">
        <div class="container">
            <div class="container">
<br>
<h4 class="text-success text-center">Order List</h4>
<br>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Product Name</th>
            <th scope="col">Total</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">City</th>
            <th scope="col">Address</th>
            <th scope="col">Postcode</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Note</th>
            <th scope="col">Status</th>
            <th scope="col">Invoice</th>
        </tr>
    </thead>
    <tbody>
        @php
        $id = 1;
        @endphp

        @foreach ($orders as $item)
        <tr>
            <th scope="row">{{ $id++ }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->total_price }} Tk.</td>
            <td>{{ $item->first_name }}</td>
            <td>{{ $item->last_name }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->city }}</td>
            <td>{{ $item->postcode }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->note }}</td>
            <td >
                <a href="{{ route('order.tracking',$item->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
            </td>
            <td>
                <a href="{{route('order.invoice' ,$item->id)}}" class="btn btn-info"><i class="fas fa-file-invoice"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>

</div>

@endsection
