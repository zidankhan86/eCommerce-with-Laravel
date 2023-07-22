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
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @php
            $serial =1;
        @endphp

        @foreach ($category as $item)
      <tr>


        <th scope="row">{{ $serial++}}</th>
        <td>{{ $item->name}}</td>
        <td>{{ $item->type}}</td>
        <td>{{ $item->status ? 'Active' : 'Inactive' }}</td>

        <td>
            <a href="{{route('category.edit',$item->id)}}" class="btn btn-success"> <i class="fas fa-edit"></i></a>
            <a href="{{route('category.delete',$item->id)}}" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')">  <i class="fas fa-trash"></i></a>
        </td>

      </tr>
      @endforeach

    </tbody>
  </table>


@endsection


