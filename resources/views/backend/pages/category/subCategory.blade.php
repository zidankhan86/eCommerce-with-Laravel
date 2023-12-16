@extends('backend.master')

@section('content')
<div class="container">
<div class="container">
<div class="container">

<br><h4 class=" text-success text-center">Category Form</h4>

<form action="{{route('sub.category.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>
         @endif




        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName1" class="form-label">Sub Category Type</label>
        <input type="text" value="{{ old('sub_cat_type') }}" class="form-control" id="exampleInputName1" name="sub_cat_type" placeholder="Category Type..">
        @error('sub_cat_type')

        <strong class="text-danger">{{$message}}</strong>

        @enderror
         </div>

        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName2" class="form-label"> Select Category</label>
       <select name="type" id="" class="form-control">
        @foreach ($category as $item)
        <option value="{{ $item->type }}">{{ $item->type }}</option>
        @endforeach
       </select>
        @error('type')

        <strong class="text-danger">{{$message}}</strong>

        @enderror
        </div>

        <div>
            <input type="hidden" name="category_id" value="{{ $item->id }}">
        </div>

        <div class="mb-3 mx-sm-2">
            <label for="exampleInputName2" class="form-label">Status</label>


            <select class="form-control" name="status" id="">
                <option value="0">Inactive</option>
                <option value="1">Active</option>
            </select>
            @error('status')

            <strong class="text-danger">{{$message}}</strong>

            @enderror
            </div>


      <div class="text-center">
        <button type="submit" class="btn btn-primary">Post</button>
      </div>

  </form>
  </div>
  </div>
  </div>

@endsection
