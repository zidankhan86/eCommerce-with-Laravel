@extends('backend.master')

@section('content')



<br><h4 class=" text-success text-center"> Create Shop</h4>

<form action="{{ route('shop.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>
         @endif



            <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Shop Name</label>
            <input type="text" class="form-control" id="shopName" name="shop_name" placeholder="Shop Name..">

            @error('shop_name')

            <p class="text-danger">{{$message}}</p>

            @enderror
            </div>

            <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Shop Owner Name</label>
            <input type="text" class="form-control" id="shopOwnerName" name="owner_name" placeholder="Shop Owner Name..">

            @error('owner_name')
            <p class="text-danger">{{$message}}</p>
            @enderror
            </div>

            <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Shop Logo</label>
            <input type="file" class="form-control" id="shopLogo" name="image" placeholder="Shop Logo..">

            </div>
            <div class="mb-3 mx-sm-2">
            <label for="exampleInputNumber1" class="form-label">Shop Area</label>
            <input type="text" class="form-control" id="shopArea"  name="shop_area" placeholder="Dhaka , Uttara...">

                @error('shop_area')
                <p class="text-danger">{{$message}}</p>
                @enderror
                 </div>

                <div class="mb-3 mx-sm-2">
                <label for="exampleInputNumber2" class="form-label">Trade license</label>
                <input type="number" class="form-control" id="exampleInputNumber2" name="license" placeholder="Trade license..">

                @error('license')
                <p class="text-danger">{{$message}}</p>
                @enderror
                </div>

            <div class="mb-3 mx-sm-2">
            <label for="exampleInputNumber" class="form-label">Email</label>
            <input type="email" class="form-control" id="shopEmail" name="email" placeholder="Shop Email..">


        @error('email')
        <p class="text-danger">{{$message}}</p>
        @enderror
            </div>

            <div class="mb-3 mx-sm-2">
                <label for="exampleInputNumber" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Shop Phone..">
                @error('phone')
                <p class="text-danger">{{$message}}</p>
                @enderror
                </div>



             <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">About Shop(Optional)</label>
                <input type="text" class="form-control" id="exampleInputName1" name="about" placeholder="About Shop(Optional).." style="height: 100px;">
                @error('about')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>

              <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Select Status</label>
               <select name="status" id="" class="form-control">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
               </select>
                @error('status')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>


      <div class="text-center">
        <button type="submit" class="btn btn-primary">Create Shop</button>
      </div>

  </form>



@endsection


