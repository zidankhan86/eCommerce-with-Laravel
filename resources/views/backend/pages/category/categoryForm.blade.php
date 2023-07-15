@extends('backend.master')

@section('content')

<br><h4 class=" text-success text-center">Category Form</h4>

<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>
         @endif




        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName1" class="form-label">Category Name</label>
        <input type="text" value="{{ old('name') }}" class="form-control" id="exampleInputName1" name="name" placeholder="Category Name..">
        @error('name')

        <strong class="text-danger">{{$message}}</strong>

        @enderror
         </div>

        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName2" class="form-label">Category Type</label>
        <input type="text" value="{{ old('type') }}" class="form-control" id="exampleInputName2" name="type" placeholder="Category Type..">
        @error('type')

        <strong class="text-danger">{{$message}}</strong>

        @enderror
        </div>


      <div class="text-center">
        <button type="submit" class="btn btn-primary">Post</button>
      </div>

  </form>



@endsection


