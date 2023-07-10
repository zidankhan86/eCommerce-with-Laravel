@extends('backend.master')

@section('content')

 <br><a class="btn btn-success float-end ml-2" href="{{ route('product.form') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Product</a><br>
 <br><h4 class="text-success text-center">Products List</h4><br>



<table class="table">
    <thead>
      <tr>
        <th scope="col">serial</th>
        <th scope="col">Image</th>
        <th scope="col"> Name</th>
        <th scope="col">Category</th>
        <th scope="col">Product Weight</th>
        <th scope="col">Stock</th>
        <th scope="col">Product  Price</th>
        <th scope="col">Dicount Price</th>
        <th scope="col">Shipping time</th>

        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

      <tr>

        @foreach ($products as $key=>$item)

        <th scope="row">{{ $key+1}}</th>
        <td>{{ $item->name}}</td>
        <td>{{ $item->name}}</td>
        <td>{{ $item->name}}</td>
        <td>{{ $item->name}}</td>
        <td>{{ $item->name}}</td>
        <td>{{ $item->name}}</td>
        <td>{{ $item->name}}</td>
        <td>{{ $item->type}}</td>

        <td>
            <a href="" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')">Delete</a>
        </td>

      </tr>
      @endforeach

    </tbody>
  </table>


@endsection


