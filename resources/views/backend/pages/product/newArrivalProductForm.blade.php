@extends('backend.master')

@section('content')


<br><a class="btn btn-success float-end ml-2" href="{{ route('new.arrival.product.form') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add New Arrival</a>
<br><h4 class=" text-success text-center"> New Arrival</h4>

<form action="{{route('new.product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>
         @endif



        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName1" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Product Name..">
         </div>



         <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="exampleInputName1" name="image" placeholder="Product Image..">
             </div>
             <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Product Weight</label>
                <input type="text" class="form-control" id="exampleInputName1" name="weight" placeholder="Product Weight..">
                 </div>

        <div class="mb-3 mx-sm-2">
        <label for="exampleInputNumber2" class="form-label">Product Stock</label>
        <input type="number" class="form-control" id="exampleInputNumber2" name="stock" placeholder="Product Stock..">
        </div>

        <div class="mb-3 mx-sm-2">
            <label for="exampleInputNumber" class="form-label">Product Price</label>
            <input type="number" class="form-control" id="exampleInputNumber" name="price" placeholder="Product Price..">
            </div>

            <div class="mb-3 mx-sm-2">
                <label for="exampleInputNumber" class="form-label">Dicount Price</label>
                <input type="number" class="form-control" id="exampleInputNumber" name="discount" placeholder="Discount Price..">
                </div>

        <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Shipping time</label>
            <input type="text" class="form-control" id="exampleInputName1" name="time" placeholder="Shipping time..">
             </div>

             <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Product Description</label>
                <input type="text" class="form-control" id="exampleInputName1" name="description" placeholder="Write Product Description.." style="height: 100px;">
              </div>


      <div class="text-center">
        <button type="submit" class="btn btn-primary">Post</button>
      </div>

  </form>



@endsection


