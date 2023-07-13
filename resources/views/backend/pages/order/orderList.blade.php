@extends('backend.master')

@section('content')


 <br><h4 class="text-success text-center">Order List</h4><br>



<table class="table">
    <thead>
      <tr>
        <th scope="col">serial</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">City</th>
        <th scope="col">Address</th>
        <th scope="col">Postcode</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Note</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        
        @foreach ($orders->reverse() as $key=>$item)

      <tr>



        <th scope="row">{{ $key+1}}</th>
        <td>{{ $item->first_name}}</td>
        <td>{{ $item->last_name}}</td>
        <td>{{ $item->address}}</td>
        <td>{{ $item->city}}</td>
        <td>{{ $item->postcode}}</td>
        <td>{{ $item->phone}}</td>
        <td>{{ $item->email}}</td>

        <td>{{ $item->note}}</td>
        <td></td>

        <td>
            <a href="" class="btn btn-info">View</a>

        </td>

      </tr>
      @endforeach

    </tbody>
  </table>


@endsection


