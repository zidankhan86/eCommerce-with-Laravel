@extends('backend.master')

@section('content')

 <br><a class="btn btn-success float-end ml-2" href="{{ route('category.form') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Category</a>
 <br><h4 class="text-success text-center">Category List</h4><br>



<table class="table">
    <thead>
      <tr>
        <th scope="col">serial</th>
        <th scope="col">Category Name</th>
        <th scope="col">Type Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($category as $key=>$item)
      <tr>


        <th scope="row">{{ $key+1}}</th>
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


