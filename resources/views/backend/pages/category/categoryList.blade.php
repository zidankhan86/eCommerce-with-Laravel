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
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>
            <a href="" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>

        </td>
      </tr>
    </tbody>
  </table>


@endsection


