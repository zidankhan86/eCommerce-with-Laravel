@extends('backend.master')

@section('content')

<br><h1 class="btn btn-success">Add Category</h1>

<form action="" method="POST" enctype="multipart/form-data">



        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName1" class="form-label">Category Name</label>
        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Category Name..">
         </div>

        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName2" class="form-label">Category Type</label>
        <input type="text" class="form-control" id="exampleInputName2" name="type" placeholder="Category Type..">
        </div>


      <div class="text-center">
        <button type="submit" class="btn btn-primary">Post</button>
      </div>

  </form>



@endsection
