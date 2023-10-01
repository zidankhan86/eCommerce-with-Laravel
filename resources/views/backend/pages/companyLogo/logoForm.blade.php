@extends('backend.master')

@section('content')

<br><h4 class=" text-success text-center">Company Logo</h4>

<form action="{{route('logo.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>

        @endif
           @if(session('error'))
        <p class="alert alert-danger"> {{ session('error') }}
            @endif



            <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Banner Title(Optional)</label>
            <input type="text" class="form-control" value="{{ old('tittle') }}" id="title" name="tittle" placeholder="Dry Food..">
            @error('tittle')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
            </div>



            <div class="mb-3 mx-sm-2">
            <label for="exampleInputName2" class="form-label">Upload Image <strong class="text-danger">*(IMAGE SIZE MAX 250kb)*</strong></label>
            <input type="file" class="form-control" value="{{ old('image') }}" id="image" name="image">
            @error('image')

            <strong class="text-danger">{{$message}}</strong>

            @enderror
            </div>


      <div class="text-center">
        <button type="submit" class="btn btn-primary">Post</button>
      </div>

  </form>



@endsection


