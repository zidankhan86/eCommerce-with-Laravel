@extends('backend.master')

@section('content')

<br><h4 class=" text-success text-center">Banner Form</h4>

<form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>
         @endif



        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName1" class="form-label">Banner Tittle</label>
        <input type="text" class="form-control" value="{{ old('tittle') }}" id="exampleInputName1" name="tittle" placeholder="Dry Food..">
        @error('tittle')

        <strong class="text-danger">{{$message}}</strong>

        @enderror
         </div>

        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName2" class="form-label">Short Description</label>
        <input type="text" class="form-control" value="{{ old('description') }}" id="exampleInputName2" name="description" placeholder="100% Pure Juice..">
        @error('description')

        <strong class="text-danger">{{$message}}</strong>

        @enderror
        </div>

            <div class="mb-3 mx-sm-2">
            <label for="exampleInputName2" class="form-label">Upload Image</label>
            <input type="file" class="form-control" value="{{ old('image') }}" id="exampleInputName2" name="image">
            @error('image')

            <strong class="text-danger">{{$message}}</strong>

            @enderror
            </div>


      <div class="text-center">
        <button type="submit" class="btn btn-primary">Post</button>
      </div>

  </form>



@endsection


