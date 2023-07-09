@extends('backend.master')

@section('content')

 <br><a class="btn btn-success float-end ml-2" href="{{ route('category.form') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Category</a>




<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>


@endsection


