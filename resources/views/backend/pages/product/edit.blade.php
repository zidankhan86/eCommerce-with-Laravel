@extends('backend.master')

@section('content')

<br><h4 class="text-success text-center">Edit Product</h4>


<form action="{{route('product.update',$edit->id)}}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>
         @endif



        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName1" class="form-label">Product Name</label>
        <input type="text" class="form-control" value="{{$edit->name}}" id="exampleInputName1" name="name" placeholder="Product Name..">
        @error('name')

        <strong class="text-danger">{{$message}}</strong>

        @enderror

         </div>

         <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Select Category</label>

            <select name="category_id" id="" class="form-control">

                @foreach ($categories as $item)


                <option value="{{$item->id}}">{{$item->type}}</option>

                @endforeach


            </select>

             </div>

         <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Product Image</label>
            <input type="file" class="form-control"  id="exampleInputName1" value="{{$edit->image}}" name="image" placeholder="Product Image..">
            @error('image')

            <strong class="text-danger">{{$message}}</strong>

            @enderror
             </div>
             <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Product Weight</label>
                <input type="number" class="form-control" step="0.01"  value="{{$edit->weight}}" id="exampleInputName1" name="weight" placeholder="0.5kg..">

                @error('weight')

                <strong class="text-danger">{{$message}}</strong>

                @enderror
                 </div>

        <div class="mb-3 mx-sm-2">
        <label for="exampleInputNumber2" class="form-label">Product Stock</label>
        <input type="number" class="form-control"  value="{{$edit->stock}}" id="exampleInputNumber2" name="stock" placeholder="70..">
        @error('stock')

        <strong class="text-danger">{{$message}}</strong>

        @enderror
        </div>

        <div class="mb-3 mx-sm-2">
            <label for="exampleInputNumber" class="form-label">Product Price</label>
            <input type="number" class="form-control" id="exampleInputNumber"  value="{{$edit->price}}" name="price" placeholder="500..">

            @error('price')

            <strong class="text-danger">{{$message}}</strong>

            @enderror
            </div>

            <div class="mb-3 mx-sm-2">
                <label for="exampleInputNumber" class="form-label">Dicount Price</label>
                <input type="number" class="form-control" id="exampleInputNumber"  value="{{$edit->discount}}" name="discount" placeholder="25%..">

                @error('discount')

                <strong class="text-danger">{{$message}}</strong>

                @enderror
                </div>

             <div class="mb-3 mx-sm-2">
            <label for="exampleInputNumber3" class="form-label">Shipping time</label>
            <input type="number" class="form-control" id="exampleInputNumber3" name="time"  value="{{$edit->time}}" placeholder="3 days in Dhaka..">
            @error('time')

                <strong class="text-danger">{{$message}}</strong>

                @enderror
             </div>




              <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Product Description</label>
                <input type="text" class="form-control" id="exampleInputName1"  name="description" value="{{$edit->description}}" placeholder="Write product description here.." style="height: 100px;">
                @error('description')

                <strong class="text-danger">{{$message}}</strong>

                @enderror

              </div>

              <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Product Information</label>
                <textarea class="form-control" id="exampleInputName1" name="product_information"  placeholder="Write more details about your product  here.." style="height: 150px;"> {{$edit->product_information}}</textarea>
                @error('product_information')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
              </div>

              <div class="mb-3 mx-sm-2" >
                <label for="exampleInputNumber3" class="form-label">Status</label>

                <select name="status" id="" class="form-control">
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                </select>

                @error('time')

                    <strong class="text-danger">{{$message}}</strong>

                    @enderror
                 </div> <br> <br>



      <div class="text-center">
        <button type="submit" class="btn btn-primary">Post</button>
      </div>

  </form>



@endsection




