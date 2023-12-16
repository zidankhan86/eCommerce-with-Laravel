@extends('backend.master')

@section('content')
<div class="container">
<div class="container">

<div class="container">


<br><h4 class=" text-success text-center">Category Form</h4>

<form action="{{route('category.update',$edit->id)}}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>
         @endif




        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName1" class="form-label">Category Name</label>
        <input type="text" value="{{ $edit->name }}" class="form-control" id="exampleInputName1" name="name" placeholder="Category Name..">
        @error('name')

        <strong class="text-danger">{{$message}}</strong>

        @enderror
         </div>

        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName2" class="form-label">Category Type</label>
        <input type="text" value="{{$edit->type}}" class="form-control" id="exampleInputName2" name="type" placeholder="Category Type..">
        @error('type')

        <strong class="text-danger">{{$message}}</strong>

        @enderror
        </div>

        <div class="mb-3 mx-sm-2">
            <label for="exampleInputName2" class="form-label">Status</label>


            <select class="form-control" name="status" id="">
                <option value="0">Inactive</option>
                <option value="1">Active</option>
            </select>
            @error('type')

            <strong class="text-danger">{{$message}}</strong>

            @enderror
            </div>


      <div class="text-center">
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>

  </form>

  </div>
  </div>
  </div>


@endsection


