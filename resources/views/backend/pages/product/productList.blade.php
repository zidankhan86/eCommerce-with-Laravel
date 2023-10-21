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
        <th scope="col">Weight</th>
        <th scope="col">Total Stock</th>
        <th scope="col">Inhouse Stock</th>
        <th scope="col">Price</th>
        <th scope="col">Dicount</th>
        <th scope="col">Shipping</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @php
            $id = 1;
        @endphp
        @foreach ($products as $item)

      <tr>



        <th scope="row">{{ $id++}}</th>
        <td><img height="100px" width="100px" src="{{url('/public/uploads/'.$item->image)}}" alt=""></td>
        <td>{{ $item->name}}</td>
        <td>{{ $item->ProductCategory->type}}</td>
        <td>{{ $item->weight}} Kg</td>
        <td>{{ $item->product_stock}}</td>
        <td>{{ $item->stock}}</td>
        <td>{{ $item->price}} Tk.</td>
        <td>{{ $item->discount}}.00%</td>
        <td>{{ $item->time}}</td>
        <td>{{ $item->status ? 'Active':'Inactive'}}</td>

        <td>
            <a href="{{route('product.edit',$item->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <a href="{{route('product.delete',$item->id)}}" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><i class="fas fa-trash"></i></a>
            <a href="{{route('trending.status',$item->id)}}" class="btn btn-success">Trending</a>
        </td>

      </tr>
      @endforeach

    </tbody>
  </table>


@endsection


