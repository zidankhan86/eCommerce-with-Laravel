@extends('backend.master')

@section('content')
<div class="container">
        <div class="container">
            <div class="container">
<br><a class="btn btn-success float-end ml-2" href="{{ route('blog.post') }}"><i class="fa fa-plus" aria-hidden="true"></i> Create Blog Post</a>
 <br><h4 class="text-success text-center">Blog List</h4><br>



<table class="table">
    <thead>
      <tr>
        <th scope="col">serial</th>
        <th scope="col">Image</th>
        <th scope="col">Tittle</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @php
            $serial =1;
        @endphp

        @foreach ($blogs as $item)
      <tr>


        <th scope="row">{{ $serial++}}</th>
        <td><img height="100px" width="100px" src="{{url('/public/uploads/'.$item->image)}}" alt=""></td>
        <td>{{ $item->tittle}}</td>

        <td>
            <a href="" class="btn btn-success"> <i class="fas fa-edit"></i></a>
            <a href="{{route('blog.delete',$item->id)}}" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')">  <i class="fas fa-trash"></i></a>
        </td>

      </tr>
      @endforeach

    </tbody>
  </table>

</div>
</div>
</div>


@endsection
