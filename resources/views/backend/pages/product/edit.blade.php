@extends('backend.master')

@section('content')

<br><h4 class="text-success text-center">Edit Product</h4>

<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>
         @endif



        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName1" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="exampleInputName1" value="{{$edit->name}}" name="name" placeholder="Product Name..">
        @error('name')

        <strong class="text-danger">{{$message}}</strong>

        @enderror

         </div>

         <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Select Category</label>

            <select name="category_id" id="" class="form-control">#

                @foreach ($categories as $item)


                <option value="{{$item->id}}">{{$item->name}}</option>

                @endforeach


            </select>

             </div>

         <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="exampleInputName1" name="image" value="{{$edit->image}}" placeholder="Product Image..">
            @error('image')

            <strong class="text-danger">{{$message}}</strong>

            @enderror
             </div>
             <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Product Weight</label>
                <input type="number" class="form-control" step="0.01" id="exampleInputName1" name="weight" value="{{$edit->weight}}" placeholder="0.5kg..">

                @error('weight')

                <strong class="text-danger">{{$message}}</strong>

                @enderror
                 </div>

        <div class="mb-3 mx-sm-2">
        <label for="exampleInputNumber2" class="form-label">Product Stock</label>
        <input type="number" class="form-control" id="exampleInputNumber2" name="stock" value="{{$edit->stock}}" placeholder="70..">
        @error('stock')

        <strong class="text-danger">{{$message}}</strong>

        @enderror
        </div>

        <div class="mb-3 mx-sm-2">
            <label for="exampleInputNumber" class="form-label">Product Price</label>
            <input type="number" class="form-control" id="exampleInputNumber" name="price" value="{{$edit->price}}" placeholder="500..">

            @error('price')

            <strong class="text-danger">{{$message}}</strong>

            @enderror
            </div>

            <div class="mb-3 mx-sm-2">
                <label for="exampleInputNumber" class="form-label">Dicount Price</label>
                <input type="number" class="form-control" id="exampleInputNumber" name="discount" value="{{$edit->discount}}" placeholder="25%..">

                @error('discount')

                <strong class="text-danger">{{$message}}</strong>

                @enderror
                </div>

             <div class="mb-3 mx-sm-2">
            <label for="exampleInputNumber3" class="form-label">Shipping time</label>
            <input type="number" class="form-control" id="exampleInputNumber3" name="time" value="{{$edit->time}}" placeholder="3 days in Dhaka..">
            @error('time')

                <strong class="text-danger">{{$message}}</strong>

                @enderror
             </div>

             <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Product Description</label>
                <input type="text" class="form-control" id="exampleInputName1" name="description" value="{{$edit->description}}" placeholder="Write product description here.." style="height: 100px;">
                @error('description')

                <strong class="text-danger">{{$message}}</strong>

                @enderror

              </div>


      <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit Changes</button>
      </div>

  </form>



@endsection


