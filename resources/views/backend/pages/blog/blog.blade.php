@extends('backend.master')

@section('content')

<br><h4 class=" text-success text-center">Banner Form</h4>

<form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>
         @endif



        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName1" class="form-label">Blog Tittle</label>
        <input type="text" class="form-control" id="exampleInputName1" name="tittle" placeholder="write tittle here..">
         </div>

        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName2" class="form-label"> Description</label>
        <input type="text" class="form-control" id="exampleInputName2" name="description" placeholder="Description..">
        </div>

            <div class="mb-3 mx-sm-2">
            <label for="exampleInputName2" class="form-label">Upload Image</label>
            <input type="file" class="form-control" id="exampleInputName2" name="image">
            </div>


      <div class="text-center">
        <button type="submit" class="btn btn-primary">Post</button>
      </div>

  </form>



@endsection


