@extends('backend.master')

@section('content')



<br><h4 class=" text-success text-center"> Distibute Product</h4>

<form action="{{ route('distribute.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>
         @endif



            <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Select Product</label>
                <select name="name" id="" class="form-control">
                    @foreach ($productQuantity as $item)
                  <option value="{{$item->name }}">{{ $item->name }}</option>
                   @endforeach
                </select>
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
            </div>

            <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Quantity</label>
           <select name="stock" id="" class="form-control">
                    @foreach ($productQuantity as $item)
                  <option value="{{$item->stock }}">{{ $item->stock }}</option>
                    @endforeach
                </select>
            @error('stock')
            <p class="text-danger">{{$message}}</p>
            @enderror
            </div>

            <div>
                @isset($item)
                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                @endisset
            </div>

            <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Enter Distribute Quantity</label>
                <input type="number" class="form-control" id="distribute_quantity" name="distribute_quantity" placeholder="12..">
                @error('distribute_quantity')
                <p class="text-danger">{{$message}}</p>
                @enderror
                </div>


            <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="ProductImage" name="image" placeholder="..">

            </div>
            <div class="mb-3 mx-sm-2">
            <label for="exampleInputNumber1" class="form-label">Wholesell Price</label>
            <input type="text" class="form-control" id="shopArea"  name="price" placeholder="Wholesell Price...">

                @error('price')
                <p class="text-danger">{{$message}}</p>
                @enderror
                 </div>

                <div class="mb-3 mx-sm-2">
                <label for="exampleInputNumber2" class="form-label">Selling Price</label>
                <input type="number" class="form-control" id="exampleInputNumber2" name="selling_price" placeholder="selling price..">

                @error('selling_price')
                <p class="text-danger">{{$message}}</p>
                @enderror
                </div>

            <div class="mb-3 mx-sm-2">
            <label for="exampleInputNumber" class="form-label">Distributing Date</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="">

            @error('date')
            <p class="text-danger">{{$message}}</p>
            @enderror
            </div>

            <div class="mb-3 mx-sm-2">
                <label for="exampleInputNumber" class="form-label">Slect shop</label>
                <select name="shop_id" id="" class="form-control">

                    @foreach ($distribute as $item)
                    <option value="{{ $item->id }}">{{ $item->shop_name }}</option>
                    @endforeach


                </select>
                @error('phone')
                <p class="text-danger">{{$message}}</p>
                @enderror
                </div>

                <div class="mb-3 mx-sm-2">
                    <label for="exampleInputNumber" class="form-label">Slect Location</label>
                    <select name="shop_location" id="" class="form-control">

                        @foreach ($distribute as $item)
                        <option value="{{ $item->shop_area }}">{{ $item->shop_area }}</option>
                        @endforeach


                    </select>
                    @error('phone')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>




             <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Note(Optional)</label>
                <input type="text" class="form-control" id="exampleInputName1" name="note" placeholder="say something about product(Optional).." style="height: 100px;">
                @error('about')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>




      <div class="text-center">
        <button type="submit" class="btn btn-primary">Create Shop</button>
      </div>

  </form>



@endsection


