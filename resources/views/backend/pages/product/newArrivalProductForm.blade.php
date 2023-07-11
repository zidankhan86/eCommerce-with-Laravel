@extends('backend.master')

@section('content')



<br><h4 class=" text-success text-center"> New Arrival</h4>

<form action="{{route('new.product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>
         @endif



        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName1" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Product Name..">

        @error('name')

        <strong>{{$message}}</strong>

        @enderror
         </div>



         <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="exampleInputName1" name="image" placeholder="Product Image..">

             </div>
             <div class="mb-3 mx-sm-2">
                <label for="exampleInputNumber1" class="form-label">Product Weight</label>
                <input type="text" class="form-control" id="exampleInputNumber1" step="0.01" name="weight" placeholder="Product Weight..">

                @error('weight')

                <strong>{{$message}}</strong>

                @enderror
                 </div>

        <div class="mb-3 mx-sm-2">
        <label for="exampleInputNumber2" class="form-label">Product Stock</label>
        <input type="number" class="form-control" id="exampleInputNumber2" name="stock" placeholder="Product Stock..">

        @error('stock')

        <strong>{{$message}}</strong>

        @enderror
        </div>

        <div class="mb-3 mx-sm-2">
            <label for="exampleInputNumber" class="form-label">Product Price</label>
            <input type="number" class="form-control" id="exampleInputNumber" name="price" placeholder="Product Price..">


        @error('price')

        <strong>{{$message}}</strong>

        @enderror
            </div>

            <div class="mb-3 mx-sm-2">
                <label for="exampleInputNumber" class="form-label">Dicount Price</label>
                <input type="number" class="form-control" id="exampleInputNumber" name="discount" placeholder="Discount Price..">
                @error('discount')

                <strong>{{$message}}</strong>

                @enderror
                </div>

        <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Shipping time</label>
            <input type="text" class="form-control" id="exampleInputName1" name="time" placeholder="Shipping time..">
            @error('time')

                <strong>{{$message}}</strong>

                @enderror
             </div>

             <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Product Description</label>
                <input type="text" class="form-control" id="exampleInputName1" name="description" placeholder="Write Product Description.." style="height: 100px;">
                @error('time')

                <strong>{{$message}}</strong>

                @enderror
              </div>


      <div class="text-center">
        <button type="submit" class="btn btn-primary">Post</button>
      </div>

  </form>



@endsection


