@extends('backend.master')

@section('content')
<div class="container">
<div class="container">
<div class="container">

<br><h4 class=" text-success text-center">Hero Banner Form</h4>

<form action="{{route('hero.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>
        @endif


        @if(session('error'))
        <p class="alert alert-danger"> {{ session('error') }}
            @endif


            <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Small Tittle</label>
                <input type="text" class="form-control" value="{{ old('small_tittle') }}" id="exampleInputName1" name="small_tittle" placeholder="FRUIT FRESH..">
                @error('tittle')

                <strong class="text-danger">{{$message}}</strong>

                @enderror
                 </div>


        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName1" class="form-label">Banner Tittle</label>
        <input type="text" class="form-control" value="{{ old('tittle') }}" id="exampleInputName1" name="tittle" placeholder="Vegetable 100% Fresh..">
        @error('tittle')

        <strong class="text-danger">{{$message}}</strong>

        @enderror
         </div>

        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName2" class="form-label">Short Description</label>
        <input type="text" class="form-control" value="{{ old('description') }}" id="exampleInputName2" name="description" placeholder="Free Pickup and Delivery Available..">
        @error('description')

        <strong class="text-danger">{{$message}}</strong>

        @enderror
        </div>

            <div class="mb-3 mx-sm-2">
            <label for="exampleInputName2" class="form-label">Chose Banner <strong>*(MAX IMAGE SIZE 200kb)*</strong></label>
            <input type="file" class="form-control dropify" value="{{ old('image') }}" name="image">
            @error('image')

            <strong class="text-danger">{{$message}}</strong>

            @enderror
            </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Upload Banner</button>
        </div>
            </form>
                </div>
                 </div>
                    </div>


    <script>
        $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove':  'Remove',
            'error':   'Ooops, something wrong happended.'
        }
        });
        </script>
@endsection


