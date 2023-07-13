@extends('backend.master')

@section('content')

<br><a class="btn btn-success float-end ml-2" href="{{ route('new.arrival.product.form') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add New Arrival</a>
 <br><h4 class="text-success text-center">New Products List</h4><br>



<table class="table">
    <thead>
      <tr>
        <th scope="col">serial</th>
        <th scope="col">Image</th>
        <th scope="col"> Name</th>
        <th scope="col">Weight</th>
        <th scope="col">Stock</th>
        <th scope="col">Product  Price</th>
        <th scope="col">Dicount Price</th>
        <th scope="col">Shipping time</th>

        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @php
        $serial = 1;
        @endphp
        
        @foreach ($products as $key=>$item)
      <tr>



        <th scope="row">{{ $key+1}}</th>
        <td><img height="100px" width="100px" src="{{url('/public/uploads/'.$item->image)}}" alt=""></td>
        <td>{{ $item->name}}</td>
        <td>{{ $item->weight}} Kg</td>
        <td>{{ $item->stock}}</td>
        <td>{{ $item->price}} Tk.</td>
        <td>{{ $item->discount}}%</td>
        <td>{{ $item->time}}</td>

        <td>
            <a href="" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')">Delete</a>
        </td>

      </tr>
      @endforeach

    </tbody>
  </table>


@endsection


