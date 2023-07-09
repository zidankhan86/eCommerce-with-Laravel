@extends('backend.master')

@section('content')

 <br><a class="btn btn-success float-end ml-2" href="{{ route('category.form') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Category</a>




<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Category Name</th>
        <th scope="col">Type</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
@foreach ($category as $item)


        <th scope="row">{{ $item->id}}</th>
        <td>{{ $item->name}}</td>
        <td>{{ $item->type}}</td>
        <td>
            <a href="" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>

        </td>

      </tr>
      @endforeach
    </tbody>
  </table>


@endsection


